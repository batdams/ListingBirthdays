<?php

namespace models;

use PDO;

require_once 'app/core/Database.php';
require_once 'app/models/User.php';

class UserModel
{
    private \PDO $db;

    public function __construct()
    {
        // Connexion à la base de données
        $this->db = \core\Database::getConnection();
    }

    public function findByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM app_user WHERE email = :email");
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch();
        return $user;
    }
}
