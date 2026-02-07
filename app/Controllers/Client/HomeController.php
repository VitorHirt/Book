<?php

declare(strict_types=1);

namespace App\Controllers\Client;

use App\Controllers\Controller;

class HomeController extends Controller {
    public function index(): void {
        $this->view('client/home', ['titulo' => 'Painel do Cliente', 'descricao' => 'Bem-vindo ao seu dashboard em PHP 2026.']);
        $this->layout('client');
    }
}