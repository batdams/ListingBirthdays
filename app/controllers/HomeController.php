<?php

namespace controllers;

use service\SessionService;

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
      $this->viewManager->render('home/birthdayDashboard.php');
    } else {
      $this->viewManager->render('home/home.php');
    }

  }

  public function getHomePage() : void
  {
    if (SessionService::checkSession()) {
      $this->viewManager->render('home/birthdayDashboard.php');
    } else {
      $this->viewManager->render('home/home.php');
    }
  }
}