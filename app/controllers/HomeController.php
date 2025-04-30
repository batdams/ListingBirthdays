<?php

namespace controllers;

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
    $this->viewManager->render('home/home.php');
  }

  public function getHomePage() : void
  {
    $this->viewManager->render('home/home.php');
  }
}