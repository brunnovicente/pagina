<?php

namespace App\Controller;

use App\Controller\AppController;

class WelcomeController extends AppController{

    public function index(){
        $user = $this->Auth->user();
        $this->set(compact('user'));
    }

    public function isAuthorized($user)
    {
        if (in_array($user['roles'], ['ADMINISTRADOR'])) {
            return true;
        } else {
            if (in_array($this->request->getParam('action'), ['index'])) {
                return true;
            }
        }

        return false;
    }

}//Fim da Classe
