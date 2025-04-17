<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil formulaire birthday</title>
        <link rel="stylesheet" href="../../../public_html/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../../../public_html/css/styles.css" type="text/css">
    </head>
    <body>
        <div class="container containerPrincipal mt-5 mb-5">
            <header>
                <div class="container-fluid d-flex align-items-center justify-content-between">
                    <nav class="navbar navbar-expand-lg">
                        <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary" href="<?php echo BASE_URL;?>/userView">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary" href="<?php echo BASE_URL;?>/aboutView">A propos</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                        <div class="ms-1">
                        <a href="<?php echo BASE_URL;?>/logout"><button type="button" class="btn btn-primary" name="disconnnect">Deconnexion</button></a>
                        </div>
                </div>
            </header>
            <main class="container">