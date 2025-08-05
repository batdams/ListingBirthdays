<?php

// Mise en place de la session
require_once 'app/services/sessionService.php';
Service\SessionService::sessionStart();

//require_once 'app/core/envLoader.php';

// Chargement de la configuration des utilitaires
require_once 'app/config/utilsConfig.php';

// Définition de la constante pour l'URL
define("BASE_URL", '/ListingBirthdays');

// définition des constantes
define('WEATHER_API_KEY', $apiWeatherKey);

// Inclusion des classes
require_once 'app/controllers/Controller.php';
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/APIController.php';
require_once 'app/controllers/UserController.php';
require_once 'app/controllers/AboutController.php';
require_once 'app/views/ViewManager.php';

// Ajout du routeur
require_once 'app/models/Router.php';

// Instanciation du routeur
$router = new Router();

// Définition des routes
// routes non connectées
$router->addRoute('GET', BASE_URL  . '/',                   'HomeController',   'index', 0);
$router->addRoute('GET', BASE_URL  . '/home',               'HomeController',   'getHomePage', 0);
$router->addRoute('GET', BASE_URL  . '/API',                'APIController',    'getAPIPage', 0);
$router->addRoute('GET', BASE_URL  . '/connection',         'UserController',   'getConnectionForm', 0);
// routes de connexion et déconnexion
$router->addRoute('POST', BASE_URL . '/login',              'UserController',   'userConnect', 0);
$router->addRoute('GET', BASE_URL .  '/logout',             'UserController',   'userDisconnect', 1);
// routes connectées
$router->addRoute('GET', BASE_URL . '/birthdayManager',     'HomeController', 'getBirthdayManager', 1);
$router->addRoute('POST', BASE_URL. '/userBdayCreation',    'UserController', 'addBirthday', 1);
$router->addRoute('POST', BASE_URL. '/userBdayModify',      'UserController', 'modifBirthday', 1);
$router->addRoute('POST', BASE_URL. '/userBdayDelete',      'UserController', 'deleteBirthday', 1);

// $router->addRoute('GET', BASE_URL . '/listing',         'UserController',   'getBirthdayDashboard', 1);
// $router->addRoute('GET', BASE_URL . '/APIKEY',          'UserController',   'getAPIDashboard', 1);
// routes non traitées

$router->addRoute('POST', BASE_URL.'/userCreationView', 'UserController', 'userSubscription');
$router->addRoute('GET', BASE_URL.'/userView', 'UserController', 'index');
$router->addRoute('GET', BASE_URL.'/aboutView', 'AboutController', 'index');
$router->addRoute('GET', BASE_URL.'/logout', 'UserController', 'userDisconnect');

// Récupération des informations de la requête via la super variable $_SERVER 
$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$routesRequiringSession = ['/login', '/logout', '/listing', '/APIKey'];

// Récupération du handler associé à la requête
$handler = $router->getHandler($method, $uri);
if ($handler == null) {
    header('HTTP/1.1 404 Not Found');
    exit();
}

// Instanciation du ViewManager
$viewManager = new views\ViewManager();

// Appel du contrôleur associé à la requête
$controllerClassName = $handler['controller'];
// Préfixage du nom de la classe du contrôleur avec le namespace
$controllerClassName = '\controllers\\' . $controllerClassName;
// Instanciation du contrôleur (le contrôleur est instancié avec le ViewManager)
$controller = new $controllerClassName($viewManager);

$action = $handler['action'];
$controller->$action();