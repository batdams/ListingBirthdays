<?php

namespace controllers;

use service\SessionService;

require_once __DIR__ . '/../models/BirthdayModel.php';

class HomeController extends Controller
{
   /**
   * Affiche la page d'accueil
   * 
   * Cette méthode affiche la page d'accueil de l'application.
   * 
   * @return void
   */
  public function index(): void
  { 
    if (SessionService::checkSession()) {
      $_SESSION['data'] = $this->getData();
      $this->viewManager->render('home/birthdayDashboard.php');
    } else {
      $this->viewManager->render('home/home.php');
    }

  }

  public function getHomePage() : void
  {
    if (SessionService::checkSession()) {
      $_SESSION['data'] = $this->getData();
      $this->viewManager->render('home/birthdayDashboard.php');
    } else {
      $this->viewManager->render('home/home.php');
    }
  }

  public function getBirthdayManager() : void
  {
    if (SessionService::checkSession()) {
      $_SESSION['data'] = $this->getData();
      $this->viewManager->renderMainContent('home/birthdayManager.php');
    } else {
      $this->viewManager->render('home/home.php');
    }
  }
}