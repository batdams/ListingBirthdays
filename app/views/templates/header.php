<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil formulaire birthday</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/styles.css" type="text/css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/home.css" type="text/css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/components.css" type="text/css">
    </head>
    <body>
        <header>
            <nav class="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="nav-link-home" class="nav-link nav-icone nav-link-active" href="<?php echo BASE_URL;?>/home">
                            <img src="public/pictures/cake-candles-2.svg" alt="bday cake">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="nav-link-API" class="nav-link nav-icone" href="<?php echo BASE_URL;?>/API">
                            <img src="public/pictures/API.svg" alt="API">
                        </a>
                    </li>
                    <li class="nav-item">
                        <?php if (isset($_SESSION['role'])): ?>
                            <!-- Si l'utilisateur est connecté, afficher "Déconnexion" -->
                            <a id="nav-link-logout" class="nav-link nav-icone" href="<?php echo BASE_URL;?>/logout">
                                <img src="public/pictures/logout.svg" alt="logout">
                            </a>
                        <?php else: ?>
                            <!-- Sinon, afficher "Connexion" -->
                            <a id="nav-link-connection" class="nav-link nav-icone" href="<?php echo BASE_URL;?>/connection">
                                <img src="public/pictures/user-lock-solid.svg" alt="Connexion">
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>
            </nav>
        </header>
        <main id="main-container">