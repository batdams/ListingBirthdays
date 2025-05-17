<?php

namespace core;

class Database
{
    private static ?\PDO $connection;

    public static function getConnection(): \PDO {
        // Chargement de la configuration de la base de données
        require_once 'app/config/databaseConfig.php';
        $host = $config['host'];
        $dbname = $config['database'];
        $username = $config['username'];
        $password = $config['password'];
        $dsn = $mySQLDSN;
        $pdo = new \PDO($dsn, $username, $password);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $pdo;
        /*
        if (self::$connection === null) {
            try {
                self::$connection = new \PDO($dsn, $username, $password);
            } catch (\PDOException $e) {
                die('Erreur de connexion à la base de données : ' . $e->getMessage());
            }
        }

        return self::$connection;
        */
    }
}
