<?php

namespace controllers;
require_once "app/models/Birthdays.php";
require_once 'app/models/User.php';

class UserController extends Controller
{

  public function getConnectionForm() : void
  {
    $this->viewManager->render('home/connection.html');
  }







  /**
   * Connecte un utilisateur à l'application
   * 
   * Cette méthode vérifie les informations d'identification fournies par l'utilisateur et connecte l'utilisateur à l'application.
   * 
   * @param PDO $pdo Une instance de PDO pour la connexion à la base de données.
   * @return void
   */
  public function userConnect($pdo)
  {
    $sql = 'SELECT * FROM users WHERE email = :email';
    $stmt = $pdo->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
    if (isset($_POST["email"]) && isset($_POST["password"])) {
      $email = $_POST['email'];
      $password = $_POST['password'];      
      $stmt->bindValue(':email', $email, PDO::PARAM_STR);
      if ($stmt->execute()) {
        $user = $stmt->fetch();
        if ($user !== false && password_verify($password, $user->getPassword())) {
          $_SESSION['mail'] = $user->getEmail();
          $_SESSION['id'] = $user->getId();
          $_SESSION['pseudo'] = $user->getPseudo();
          if($_SESSION['mail'] === "admin@admin.fr"){
            $_SESSION['role'] = 'administrateur';
            setcookie("user", "administrateur", time() + 3600, '/'); // création cookie superAdmin
            $this->userBirthdaysDisplay($pdo);
          $this->viewManager->render('home/user.php');
          } else if (isset($_SESSION['mail'])){
            $_SESSION['role'] = 'user';
            setcookie("user", "user", time() + 3600, '/'); // création cookie user
            $this->userBirthdaysDisplay($pdo);
            $this->viewManager->render('home/user.php');
          }        
        } else {
          echo 'Utilisateur non inscrit ou erreur dans l\'adresse mail';
        }
      }
    }
  }
  
  /**
   * Affiche la liste des anniversaires enregistrées pour l'utilisateur concerné
   * 
   * Cette méthode récupère et affiche les anniversaires enregistrés dans la base de données
   * pour l'utilisateur actuellement connecté, identifié par $_SESSION["id"].
   * 
   * @param PDO $pdo Une instance de PDO pour la connexion à la base de données.
   * @return array|false Un tableau contenant les anniversaires enregistrés, ou false si aucune donnée n'est trouvée.
   */
  public function userBirthdaysDisplay(PDO $pdo)
  {
    try {
      // Requête SQL pour sélectionner les anniversaires de l'utilisateur courant
      $sql = 'SELECT * FROM birthdays where user_id = :userId';
      // Préparation de la requête SQL
      $stmt = $pdo->prepare($sql);
      // Définition du mode de récupération des résultats sous forme d'objets de la classe 'Birthdays'
      $stmt->setFetchMode(PDO::FETCH_CLASS, 'Birthdays');
      // Vérification de l'existence d'une session d'utilisateur
      if (isset($_SESSION["id"])) {
        // Récupération de l'ID de l'utilisateur depuis la session
        $userId = $_SESSION["id"];
        // Liaison de la valeur de l'ID utilisateur à la requête préparée     
        $stmt->bindValue(':userId', $userId, PDO::PARAM_INT);
        // Exécution de la requête préparée
        if ($stmt->execute()) {
          // Récupération de tous les anniversaires correspondants
          $birthdays = $stmt->fetchAll();
          // Vérification de l'existence d'anniversaires
          if ($birthdays !== false) {
            // Stockage des anniversaires dans la session
            $_SESSION['birthdays'] = $birthdays;
            // Retourne les anniversaires
            return $birthdays;
          }
        }
      }
      // Retourne false si aucun anniversaire n'est trouvé ou si une erreur survient.
      return false;
    } catch (PDOException $e) {
      echo "Une erreur s'est produite";
    }
  }
  /**
   * Affiche la page d'accueil de l'utilisateur
   * 
   * Cette méthode affiche la page d'accueil de l'utilisateur après avoir récupéré et affiché les anniversaires enregistrés pour l'utilisateur.
   * 
   * @param PDO $pdo Une instance de PDO pour la connexion à la BDD
   * @return void
   */
  public function index(PDO $pdo): void
  { 
  $this->userBirthdaysDisplay($pdo);
  $this->viewManager->render('home/user.php');
  }

  /**
   * Insère un nouvel utilisateur dans la BDD
   * 
   * @param PDO $pdo Objet PDO pour la connexion à la BDD
   * 
   * @return void
   */
  public function userSubscription($pdo)
  {
    // requête SQL pour l'insertion d'un nouveal utilisateur
    $sql = 'INSERT INTO users (name, surname, pseudo, email, password) VALUES (:name, :surname, :pseudo, :email, :password)';
    // Préparation de la requête
    $stmt = $pdo->prepare($sql);
    // Vérification de la présence des données
    if (isset($_POST["nameSub"], $_POST["surnameSub"], $_POST["pseudoSub"], $_POST["emailSub"], $_POST["passwordSub"])) {
      // Récupération des données postées
      $name = $_POST['nameSub'];
      $surname = $_POST['surnameSub'];
      $pseudo = $_POST['pseudoSub'];
      $email = $_POST['emailSub'];
      $password = $_POST['passwordSub'];
      // Liaison des valeurs aux paramètres de la requête
      $stmt->bindValue(':name', $name, PDO::PARAM_STR);
      $stmt->bindValue(':surname', $surname, PDO::PARAM_STR);
      $stmt->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
      $stmt->bindValue(':email', $email, PDO::PARAM_STR);   
      $stmt->bindValue(':password', password_hash($password, PASSWORD_BCRYPT), PDO::PARAM_STR);
      // Execution de la requête
      if ($stmt->execute()) {
        // Redirection vers la page de confirmation
        $this->viewManager->render('home/subscription.html');
      } else {
        // En cas d'erreur lors de l'execution
        echo 'ERREUR SUBSCRIPTION';
      }
    }
  }

  /**
   * Déconnecte un utilisateur de l'application
   * 
   * Cette méthode déconnecte l'utilisateur de l'application en supprimant ses informations de session.
   * 
   * @return void
   */
  public function userDisconnect()
  {
    unset($_SESSION['role']);
    $this->viewManager->render('home/home.html');
  }

  /**
   * Enregistre un nouvel anniversaire pour l'utilisateur
   * 
   * Cette méthode insère un nouvel anniversaire dans la base de données pour l'utilisateur courant.
   * 
   * @param PDO $pdo Une instance de PDO pour la connexion à la base de données.
   * @return void
   */
  public function userBirthdaysSetting($pdo)
  {
    $sql = 'INSERT INTO birthdays (name, surname, birthdayDate, user_id) VALUES (:name, :surname, :birthday, :user_id)';
    $stmt = $pdo->prepare($sql);
    if (isset($_POST["nameBday"], $_POST["surnameBday"], $_POST["birthdayBday"], $_SESSION['id'])) {
      // Récupération des données postées
      $name = $_POST['nameBday'];
      $surname = $_POST['surnameBday'];
      $birthday = $_POST['birthdayBday'];
      $userId = $_SESSION['id'];
      // Liaison des valeurs aux paramètres de la requête
      $stmt->bindValue(':name', $name, PDO::PARAM_STR);
      $stmt->bindValue(':surname', $surname, PDO::PARAM_STR);
      $stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);
      $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);   
      // Execution de la requête
      if ($stmt->execute()) {
        // Redirection vers la page de confirmation
        $this->userBirthdaysDisplay($pdo);
      $this->viewManager->render('home/user.php');
      } else {
        // En cas d'erreur lors de l'execution
        echo 'Erreur lors de la création de l\'anniversaire';
      }
    }
  }
}