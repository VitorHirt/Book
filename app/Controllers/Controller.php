<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\View\View;

abstract class Controller {
    protected function view(string $view, array $data = []): void {
        extract($data);

        $viewPath = __DIR__ . "/../../views/{$view}.php";

        if (!file_exists($viewPath)) {
            die("Erro: A view '{$view}' não foi encontrada em: {$viewPath}");
        }

        require_once $viewPath;
    }

    protected function layout(string $layout, array $data = []): void {
        extract($data);
        $layoutPath = __DIR__ . "/../../views/layouts/{$layout}.php";

        if (file_exists($layoutPath)) {
            require_once $layoutPath;
        }
    }

    protected function json(array $data, int $code = 200): void {
        header('Content-Type: application/json');
        http_response_code($code);
        echo json_encode($data);
    }
}