<?php

use service\SessionService;

class Router { 
    private array $routes; // private array $routes = [] pour php7.4+ (et donc construct() inutile)

    public function __construct() {
        $this->routes = array(); // On initialise la variable $routes avec un tableau vide qu'on remplira avec notre fonction addRoute()
    }

    public function getRoutes() {
        return $this->routes;
    }
    /**
     * Ajoute une nouvelle route au routeur
     * Cette fonction ajoute une nouvelle route au routeur avec les détails nécessaires
     * 
     * @param string method : verbes HTTP (GET, POST...)
     * @param string path : chemin de l'URL de la route
     * @param string controller : le controlleur que l'on doit appeler
     * @param string action : action à effectuer 
     * @return void
     */
    public function addRoute(string $method,string $path, string $controller, string $action, bool $isLogged = false) {
        $this->routes [] = [
            'method' => $method,
            'path' => $path,
            'controller' =>$controller,
            'action' => $action,
            'isLogged' => $isLogged
        ];    
    }

/**
 * Trouve le controller associé à une requete HTTP donnée en fonction de l'URI demandée
 * 
 * Cette fonction recherche la correspondance entre le verbe HTTP et l'URI demandée
 * dans les routes définies et renvoie les détails du controleur associé si une correspondance est trouvée
 * 
 * @param string $method : verbe HTTP de la requête
 * @param string $uri : URI demandée par le client pour accéder à une ressource
 * @return array|null : tableau associatif contenant les détails du controleur et de l'action si une correspondance est trouvée, sinon null.
 */
    public function getHandler(string $method, string $uri) { 
        foreach ($this->routes as $route) {
            // Vérifier si la route correspond à la méthode et au chemin
            if ($route['method'] === $method && $route['path'] === $uri) {
                // Si la route nécessite une session
                if ($route['isLogged'] == 1) {
                    if (!SessionService::checkSession()) {
                        // Rediriger vers le formulaire de connexion si la session est absente
                        return [
                            'method' => 'GET',
                            'controller' => 'UserController',
                            'action' => 'getConnectionForm',
                        ];
                    } else {
                        // Retourner la route si la session est valide
                        return [
                            'method' => $route['method'],
                            'controller' => $route['controller'],
                            'action' => $route['action'],
                        ];
                    }
                }

                // Si la route ne nécessite pas de session
                return [
                    'method' => $route['method'],
                    'controller' => $route['controller'],
                    'action' => $route['action'],
                ];
            }
        }

        // Si aucune route ne correspond, retourner null
        return null;
    }

}