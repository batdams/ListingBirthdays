<?php

namespace models;

use PDO;

require_once 'app/core/Database.php';
require_once 'app/models/Birthday.php';

class BirthdayModel
{
    private \PDO $db;

    public function __construct()
    {
        // Connexion à la base de données
        $this->db = \core\Database::getConnection();
    }
    public function getAllBirthdays($userId) {
        $stmt = $this->db->prepare("SELECT * FROM birthday WHERE app_user_id = :userId");
        $stmt->setFetchMode(PDO::FETCH_CLASS, Birthday::class);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->execute();
        $birthdays = $stmt->fetchAll();
        return $birthdays;
    }

    public function addBirthday($name, $surname, $birthday, $app_user_id): void
    {
        $sql = "INSERT INTO birthday(name, surname, birthday, app_user_id) VALUES (:name, :surname, :birthday, :app_user_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, Birthday::class);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':surname', $surname, PDO::PARAM_STR);
        $stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);
        $stmt->bindValue(':app_user_id', $app_user_id, PDO::PARAM_INT);
        $stmt->execute();
    }
}