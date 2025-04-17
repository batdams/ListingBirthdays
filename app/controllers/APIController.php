<?php 

namespace controllers;

class APIController extends Controller
{
    
    public function getAPIPage(): void
    { 
        $this->viewManager->renderMainContent('api/api.php');
    }
}