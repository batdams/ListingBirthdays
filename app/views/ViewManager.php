<?php

namespace views;
/**
 * Gère l'affichage des vues et des templates pour l'application
 */
class ViewManager
{
    /**
     * Charge le header non connecté
     * @return void
     */
    public function loadHeader()
    {
        include_once 'app/views/templates/header.php';
    }

    /**
     * Charge le footer commun à toutes les pages
     * @return void
     */
    public function loadFooter()
    {
        include_once 'app/views/templates/footer.php';
    }

    /**
     * Charge le contenu spécifié dans la vue
     * @param string $view Le nom de la vue à charger
     * @return void
     */
    public function loadContent($view)
    {
        include_once "app/views/$view";
    }

    /**
     * Rend la vue complète en incluant le header, le contenu et le footer
     * @param string $view Le nom de la vue à afficher
     * @return void
     */
    public function render($view)
    {
        // Charge le header
        $this->loadHeader();
        // Charge le contenu de la vue spécifiée
        include_once "app/views/$view";
        // Charge le footer commun à toutes les pages
        $this->loadFooter();
    }

    // fonction pour les requetes AJAX
    public function renderMainContent($view, $parameters = [])
    {
        // Extrait les paramètres pour les rendre accessibles dans la vue
        //extract($parameters, \EXTR_PREFIX_ALL, 'data');

        // Charge le contenu de la vue spécifiée
        $this->loadContent("$view");
    }
}
