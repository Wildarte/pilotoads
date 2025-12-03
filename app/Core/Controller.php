<?php
// app/Core/Controller.php

namespace App\Core;

class Controller
{
    protected function view(string $view, array $data = []): void
    {
        extract($data);

        $viewPath = __DIR__ . '/../Views/' . $view . '.php';

        if (!file_exists($viewPath)) {
            echo "View '{$view}' não encontrada.";
            return;
        }

        require $viewPath;
    }
}
