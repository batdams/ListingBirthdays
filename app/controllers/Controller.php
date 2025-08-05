<?php

namespace controllers;

use views\ViewManager;
use service\SessionService;
use models\BirthdayModel;

class Controller
{
    protected $viewManager;

    public function __construct(ViewManager $viewManager)
    {
        $this->viewManager = $viewManager;
    }

    public function getData() : ?array
    {
      if (SessionService::checkSession()) {
        $userId = $_SESSION['id'];
        $birthdayModel = new BirthdayModel();
        $data['birthdays'] = $birthdayModel->getAllBirthdays($userId);
        $data['nextBirthdays'] = $birthdayModel->getNextThreeBirthdays($userId);
  
        return $data;
      } else {
        return null;
      }
    }
}