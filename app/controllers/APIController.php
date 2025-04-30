<?php 

namespace controllers;

class APIController extends Controller
{
    
    public function getAPIPage(): void
    { 
        $this->viewManager->render('api/api.php');
    }
}