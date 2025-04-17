<?php

namespace controllers;

class UserController extends Controller
{

  public function getConnectionForm() : void
  {
    $this->viewManager->renderMainContent('form/connection.php');
  }

}