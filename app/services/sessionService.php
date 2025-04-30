<?php

namespace service;

class SessionService
{
    public static function sessionStart(): void
    {
        // Démarre une nouvelle session ou reprend une session existante
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function checkSession(): bool
    {
        // Vérifie si la session est active et si l'utilisateur est connecté
        if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['email'])) {
            return true;
        }
        return false;
    }

    public static function sessionDestroy(): void
    {
        // Détruit la session en cours
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_unset();
        }
    }
}