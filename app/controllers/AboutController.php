<?php

namespace controllers;

class AboutController extends Controller
{ 
  /**
   * Affiche la page "A propos"
   * 
   * Cette méthode affiche la page "A propos".
   * 
   * @return void
   */
  public function index(): void
  { 
    $this->viewManager->render('home/about.php');
  }
}