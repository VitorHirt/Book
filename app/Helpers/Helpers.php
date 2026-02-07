<?php

declare(strict_types=1);

if (!function_exists('asset')) {
    function asset(string $path): string {
        $baseUrl = rtrim($_ENV['APP_URL'] ?? '', '/');
        $path = ltrim($path, '/');
        return "{$baseUrl}/{$path}";
    }
}

if (!function_exists('partial')) {
    function partial(string $path, array $data = []) {
        \Framework\View\View::partial($path, $data);
    }
}