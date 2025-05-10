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
      } else {
        $error = 'formulaire invalide.';
      }

    } else {
      $error = 'mail ou mot de passe non défini.';
    }
    $_SESSION['user'] = $user;
    $_SESSION['email'] = $email;
    $_SESSION['role'] = 'user';
    //$_SESSION['password'] = $password;
    //$_SESSION['role'] = 'user';
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