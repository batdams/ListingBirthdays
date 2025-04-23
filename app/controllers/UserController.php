<?php

namespace controllers;

use service\SessionService;

class UserController extends Controller
{

  public function getConnectionForm() : void
  {
    $this->viewManager->renderMainContent('form/connection.php');
  }

  public function userConnect() : void
  {

    SessionService::sessionStart();

    if (isset($_POST['email']) && isset($_POST['password'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $this->viewManager->render('form/connection.php', ['error' => 'Invalid email format']);
        return;
      }

    }
    //$_SESSION['email'] = $email;
    //$_SESSION['password'] = $password;
    //$_SESSION['role'] = 'user';
    $this->viewManager->render('home/homeConnected.php', ['messageTest' => $email]);
  }

  public function userDisconnect() : void
  {
    SessionService::sessionDestroy();
    $this->viewManager->render('form/connection.php');
  }
}