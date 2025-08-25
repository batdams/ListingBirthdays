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
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ];
        $pdo = new \PDO($dsn, $username, $password, $options);
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
