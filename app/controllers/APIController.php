<?php 

namespace controllers;

use models\ApiModel;
use service\SessionService;
use service\ApiService;

require_once __DIR__ . '/../models/ApiModel.php';

class ApiController extends Controller
{
    
    public function getAPIPage(): void
    { 
        if (SessionService::checkSession()) {
            $apiModel = new ApiModel();
            $userId = $_SESSION['id'];
            $_SESSION['api-key'] = $apiModel->displayApiKey($userId) ?? 'NULL';
            $this->viewManager->render('api/apiDashboard.php');
        } else {
            $this->viewManager->render('api/api.php');
        }
    }

    public function setAPIKey(): void
    {
        $userId = $_SESSION['id'];
        $apiKey = ApiService::ApiKeyGenerator($userId);
        $apiModel = new ApiModel();
        $apiModel->createAPIKey($apiKey, $userId);
        
        header('Location: ' . BASE_URL . '/API');
        exit();
    }

    public function getAPIRequest(): void
    {
        if(!isset($_GET['api_key'])) {
            http_response_code(400);
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(['error' => 'clé API absente'], JSON_UNESCAPED_UNICODE);
            return;
        } else {
            $apiKey = $_GET['api_key'];
            $apiModel = new ApiModel();
            $data = $apiModel->ApiKeyAuthentification($apiKey);
            if($data) {
                header('Content-Type: application/json; charset=utf-8');
                echo json_encode([
                    'success' => true,
                    'data' => $data
                ], JSON_UNESCAPED_UNICODE);
            } else {
                header('Content-Type: application/json');
                echo json_encode([
                    'error' => 'clé API incorrecte'
                ], JSON_UNESCAPED_UNICODE);
            }

        }


        // $this->viewManager->render('api/apiTest.php');
        // $apiModel = new ApiModel();
        /*
        if (!$apiKey) {
            http_response_code(401);
            echo json_encode(['error' => 'Clé API manquante']);
            return;
        }
        
        // Validation de la clé
        if (!$apiModel->ApiKeyAuthentification($apiKey)) {
            http_response_code(401);
            echo json_encode(['error' => 'Clé API invalide']);
            return;
        }
        
        // Récupération des données ---------------------------------- A TRAITER
        $birthdays = $this->getBirthdaysByApiKey($apiKey);
        
        
        header('Content-Type: application/json');
        echo json_encode([
            'success' => true,
            'data' => $birthdays,
            'generated_at' => date('c')
        ]);
        */
    }
}