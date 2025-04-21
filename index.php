<?php

// Récupération de la config pour la connexion à la BDD
require_once 'app/config/config.php';

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
require_once 'app/services/sessionService.php';
require_once 'app/views/ViewManager.php';

// Ajout du routeur
require_once 'app/models/Router.php';

// Instanciation du routeur
$router = new Router();
//var_dump($_SESSION);
//ECHO PHP_SESSION_ACTIVE;

// Définition de la route initiale
$router->addRoute('GET', BASE_URL . '/',            'HomeController',   'index');

// création de nouvelles routes
$router->addRoute('GET', BASE_URL  . '/home',           'HomeController',   'getHomePage');
$router->addRoute('GET', BASE_URL  . '/API',            'APIController',    'getAPIPage');
$router->addRoute('GET', BASE_URL  . '/connection',     'UserController',   'getConnectionForm');
$router->addRoute('POST', BASE_URL . '/login',          'UserController',   'userConnect');
$router->addRoute('POST', BASE_URL . '/logout',         'UserController',   'userDisconnect');

$router->addRoute('POST', BASE_URL.'/userBdayCreation', 'UserController', 'userBirthdaysSetting');
$router->addRoute('POST', BASE_URL.'/userCreationView', 'UserController', 'userSubscription');
$router->addRoute('GET', BASE_URL.'/userView', 'UserController', 'index');
$router->addRoute('GET', BASE_URL.'/aboutView', 'AboutController', 'index');
$router->addRoute('GET', BASE_URL.'/logout', 'UserController', 'userDisconnect');

// Récupération des informations de la requête via la super variable $_SERVER 
$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

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
$pdo = new PDO($mySQLDSN, $config['username'], $config['password']);
if ($controllerClassName == 'HomeController') {
    $controller->$action();
} else {
    $controller->$action($pdo);
}
