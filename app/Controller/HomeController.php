<?php

class HomeController extends AppController {

    public $uses = array('About_video', 'Latest_video', 'Gallery');

    public function index() {
        $this->layout = 'home_dashboard';
        $about_video = $this->About_video->find('first');
        $gallery = $this->Gallery->find('all');
        $latest_video = $this->Latest_video->find('all');
        $this->set(compact('about_video', 'latest_video', 'gallery'));
    }

    public function about() {
        $this->layout = 'home_dashboard';
        $gallery = $this->Gallery->find('all');
        $this->set(compact('gallery'));
    }

    public function contact() {
        $this->layout = 'home_dashboard';
    }

    public function services() {
        $this->layout = 'home_dashboard';
    }

    public function gallery() {
        $this->layout = 'home_dashboard';
        $gallery = $this->Gallery->find('all');
        $this->set(compact('gallery'));
    }
}
