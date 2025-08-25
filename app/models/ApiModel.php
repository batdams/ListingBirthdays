<?php

namespace models;

USE PDO;

require_once 'app/core/Database.php';
require_once 'app/models/Birthday.php';

class ApiModel
{
    private \PDO $db;

    public function __construct()
    {
        $this->db = \core\Database::getConnection();
    }

    public function createApiKey($api_key_number, $app_user_id) 
    {
        $sql = "INSERT INTO api_key(api_key_number, app_user_id) VALUES (:api_key_number, :app_user_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':api_key_number', $api_key_number, PDO::PARAM_STR);
        $stmt->bindValue('app_user_id', $app_user_id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function displayApiKey($app_user_id)
    {
        $sql = "SELECT api_key_number FROM api_key WHERE app_user_id = :app_user_id";
        $stmt = $this->db->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindValue('app_user_id', $app_user_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function ApiKeyAuthentification(string $apiKey): ?array
    {
        $sql = "SELECT b.name, b.surname, b.birthday FROM api_key a 
                LEFT JOIN birthday b
                ON a.app_user_id = b.app_user_id
                WHERE a.api_key_number = :api_key_number";
        $stmt = $this->db->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindValue('api_key_number', $apiKey, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}