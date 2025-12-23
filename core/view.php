<?php

namespace Core;

class View {
    public static function render($viewPath, $data = []) {
        //Ekstrak data array menjadi variabel (misal: ['title' => 'Home'] jadi $title = 'Home')
        extract($data);

        // Validasi file view
        $viewFile = __DIR__ . '/../views/' . $viewPath . '.php';
        if (!file_exists($viewFile)) {
            die("View file not found: $viewPath");
        }

        // MAGIC: Output Buffering (Rekam konten halaman)
        ob_start();
        require $viewFile; // Ini me-load 'home.php' tapi tidak langsung ditampilkan
        $content = ob_get_clean(); // Simpan hasil rekaman ke variabel $content

        // Panggil Master Layout
        // Variabel $content otomatis akan tersedia di dalam main.php
        require __DIR__ . '/../views/layouts/main.php';
    }
}