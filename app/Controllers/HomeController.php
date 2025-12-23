<?php

namespace App\Controllers;

use Core\View; // Import class View dari Core

class HomeController {
    public function index() {
        // Render 'home' menggunakan layout otomatis
        View::render('home', [
            'title' => 'Home - Kals Flower Shop'
        ]);
    }
}