<?php

namespace controllers;

require_once __DIR__ . '/../models/UserModel.php';

use service\SessionService;
use models\UserModel;

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