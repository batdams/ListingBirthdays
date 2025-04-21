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
    if (isset($_POST['email'])) {
      require_once 'app/services/sessionService.php';
      SessionService::sessionStart();
      if (SessionService::checkSession()) {
          SessionService::sessionDestroy();
    }
      $email = $_POST['email'];
    } else {
      $email = 'nope';
    }
    $_SESSION['email'] = $email;
    $_SESSION['role'] = 'user';
    $this->viewManager->render('home/homeConnected.php');
  }

  public function userDisconnect() : void
  {
    SessionService::sessionDestroy();
    $this->viewManager->render('form/connection.php');
  }
}