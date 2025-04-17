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
     * Charge le header pour un utilisateur connecté
     * @return void
     */
    public function loadHeaderLogged()
    {
        include_once 'app/views/templates/headerLogged.php';
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
        // Vérification si l'utilisateur est connecté
        if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
            // Charge le header pour un utilisateur connecté
            $this->loadHeaderLogged();
        } else {
            // Charge le header non connecté
            $this->loadHeader();
        }
        // Charge le contenu de la vue spécifiée
        $this->loadContent("$view");
        // Charge le footer commun à toutes les pages
        $this->loadFooter();
    }

    public function renderMainContent($view)
    {
        // Charge le contenu de la vue spécifiée
        $this->loadContent("$view");
    }
}
