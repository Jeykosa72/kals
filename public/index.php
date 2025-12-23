<?php

// Load Composer Autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// Load Environment Variables (Nanti pakai library DotEnv)
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
// $dotenv->load();

use Core\Router;
use App\Controllers\HomeController;

// Simple Routing Logic (Untuk Tes Hello World)
// buat instance Router sederhana
$router = new Router();

// Daftarkan route '/' ke HomeController
$router->get('/', [HomeController::class, 'index']);

// Jalankan Router
$router->run();