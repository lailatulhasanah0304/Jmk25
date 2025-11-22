<?php
namespace Jmk25\Controllers;

class PostController
{

    // Menampilkan halaman create
    public function create()
    {
        // Pastikan path view ini benar sesuai struktur folder Anda
        // Mengarah ke: app/Views/pages/post/create.php
        require_once __DIR__ . '/../Views/pages/post/create.php';
    }

    // Proses simpan data (Sementara)
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "Berhasil masuk ke controller store!";
            // Nanti kita isi logika database di sini
            var_dump($_POST);
        }
    }
    
    public function notifications()
    {
        require_once __DIR__ . '/../Views/pages/notification/index.php';
    }
}

