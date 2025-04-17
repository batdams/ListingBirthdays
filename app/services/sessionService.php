<?php

namespace service;

function sessionStart(): void
{
    // Démarre une nouvelle session ou reprend une session existante
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function  checkSession(): bool
{
    // Vérifie si la session est active et si l'utilisateur est connecté
    if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['user'])) {
        return true;
    }
    return false;
}

function sessionDestroy(): void
{
    // Détruit la session en cours
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_unset();
        session_destroy();
    }
}