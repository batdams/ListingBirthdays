<?php

namespace models;

use PDO;

require_once 'app/core/Database.php';
require_once 'app/models/User.php';

class UserModel
{
    private \PDO $db;
    private int $id;
    private string $email;
    private string $password;
    private string $name;
    private string $surname;
    private string $pseudo;
    private string $role;
    private string $createdAt;

    public function __construct()
    {
        // Connexion à la base de données
        $this->db = \core\Database::getConnection();
    }

    // GETTERS
    public function getId() : int
    {
        return $this->id;
    }
    public function getEmail() : string
    {
        return $this->email;
    }
    public function getPassword() : string
    {
        return $this->password;
    }
    public function getPseudo() : string
    {
        return $this->pseudo;
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
