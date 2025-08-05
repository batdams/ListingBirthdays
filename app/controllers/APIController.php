<?php 

namespace controllers;

use service\SessionService;
use service\ApiService;

class ApiController extends Controller
{
    
    public function getAPIPage(): void
    { 
        if (SessionService::checkSession()) {
            $_SESSION['data'] = $this->getData();
            $_SESSION['APIKey'] = $this->displayAPIKey();
            $this->viewManager->render('api/apiDashboard.php');
        } else {
            $this->viewManager->render('api/api.php');
        }
    }

    public function displayAPIKey(): string
    {
        $ApiKey = ApiService::ApiKeyGenerator();
        return $ApiKey;
    }
}