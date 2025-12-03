<?php
// app/Controllers/HomeController.php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->view('home/index', [
            'titulo'   => 'Minha primeira página MVC',
            'mensagem' => 'Se você está vendo isso, seu MVC está vivo 😄'
        ]);
    }

    public function sobre(string $nome = 'convidado'): void
    {
        $this->view('home/sobre', [
            'nome' => $nome
        ]);
    }
}
