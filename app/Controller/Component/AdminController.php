<?php

class AdminController extends AppController {

    public function login() {
        $this->layout = 'login';
        if ($this->Auth->login()) {

        }
    }

    public function logout() {
        $this->Session->destroy();
        $this->redirect($this->Auth->logout());
    }

    public function dashboard() {
        $this->layout = 'admin_dashboard';
    }

    public function operations() {
        if ($this->request->is('post')) {
            
        }
    }

    public function uploads()  {
        if ($this->request->is('post')) {

        }
    }
}