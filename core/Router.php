<?php

namespace Core;

class Router {
    private $routes = [];

    public function get($path, $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    public function run() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        if (isset($this->routes[$method][$uri])) {
            $controller = new $this->routes[$method][$uri][0];
            $action = $this->routes[$method][$uri][1];
            
            // Panggil method di controller
            $controller->$action();
        } else {
            http_response_code(404);
            echo "404 - Halaman tidak ditemukan. Cek Router dulu, Bro.";
        }
    }
}