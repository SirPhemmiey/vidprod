<?php

class HomeControler extends AppController {

    public function index() {
        $this->layout = 'home_dashboard';
    }

    public function about() {
        $this->layout = 'home_dashboard';
    }

    public function contact() {
        $this->layout = 'home_dashboard';
    }

    public function services() {
        $this->layout = 'home_dashboard';
    }

    public function gallery() {
        $this->layout = 'home_dashboard';
    }
}