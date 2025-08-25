<?php

namespace controllers;

use models\Birthday;
use models\BirthdayModel;
use service\SessionService;
use models\UserModel;

require_once __DIR__ . '/../models/UserModel.php';

class UserController extends Controller
{

  public function getConnectionForm() : void
  {
    $this->viewManager->render('form/connection.php');
  }

  public function userConnect() : void
  {
    if (isset($_POST['email']) && isset($_POST['password'])) {
      $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL) ;
      $password = trim($_POST['password']);

      if($email && $password) {
        $userModel = new UserModel();
        $user = $userModel->findByEmail($email);
        if ($user && password_verify($password, $user->getPassword())) {
          session_regenerate_id(true);
          $_SESSION['email'] = $user->getEmail();
          $_SESSION['id'] = $user->getId();
          $_SESSION['role'] = 'user';
          $_SESSION['pseudo'] = $user->getPseudo();
        } else {
          $error = 'identifiants incorrects.';
        }
      } else {
        $error = 'formulaire invalide.';
      }

    } else {
      $error = 'mail ou mot de passe non défini.';
    }

    header('Location: ' . BASE_URL . '/home');
    exit();
  }

  public function addBirthday() : void
  {
    if(isset($_POST['nameBday']) && isset($_POST['surnameBday']) && isset($_POST['birthdayBday'])) {
      $nameBday = htmlspecialchars(trim($_POST['nameBday']), ENT_QUOTES, 'UTF-8');
      $surnameBday = htmlspecialchars(trim($_POST['surnameBday']), ENT_QUOTES, 'UTF-8');
      $birthdayBday = filter_var(trim($_POST['birthdayBday']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      if($nameBday && $surnameBday && $birthdayBday) {
        $userId = $_SESSION['id'];
        $birthdayModel = new BirthdayModel;
        $birthdayModel->addBirthday($nameBday, $surnameBday, $birthdayBday, $userId);
      }
    } else {
      $error = 'prénom, nom ou date de naissance non définie';
    }
    header('Location: ' . BASE_URL . '/home');
    exit();
  }

  public function modifBirthday() : void
  {
    if(isset($_POST['nameBdayModif']) && isset($_POST['surnameBdayModif']) && isset($_POST['birthdayBdayModif']) && isset($_POST['IDBdayModif'])) {
      $nameBday = filter_var(trim($_POST['nameBdayModif']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      $surnameBday = filter_var(trim($_POST['surnameBdayModif']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      $birthdayBday = filter_var(trim($_POST['birthdayBdayModif']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      $IdBday = filter_var(trim($_POST['IDBdayModif']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      if($nameBday && $surnameBday && $birthdayBday && $IdBday) {
        $birthdayModel = new BirthdayModel;
        $birthdayModel->modifBirthday($nameBday, $surnameBday, $birthdayBday, $IdBday);
      }
    } else {
      $error = 'prénom, nom ou date de naissance non définie';
    }
    header('Location: ' . BASE_URL . '/home');
    exit();
  }

  public function deleteBirthday() : void
  {
    if(isset($_POST['birthdayToDelete'])) {
     $birthdayID = filter_var(trim($_POST['birthdayToDelete']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      if($birthdayID) {
        $birthdayModel = new BirthdayModel;
        $birthdayModel->deleteBirthday($birthdayID);
      }
    } else {
      $error = 'erreur lors de la suppression';
    }
    header('Location: ' . BASE_URL . '/home');
    exit();
  }

  public function getBirthdayDashboard() : void
  {
    $this->viewManager->render('home/birthdayDashboard.php');
  }

  public function getAPIDashboard() : void
  {
    $this->viewManager->render('home/apiDashboard.php');
  }

  public function userDisconnect() : void
  {
    SessionService::sessionDestroy();
    header('Location: ' . BASE_URL . '/home');
    exit();
  }
}