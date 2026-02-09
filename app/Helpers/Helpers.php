<?php

declare(strict_types=1);

if (!function_exists('asset')) {
    function asset(string $path): string {
        $baseUrl = rtrim($_ENV['APP_URL'] ?? '', '/');
        $cleanPath = ltrim($path, '/');
        $url = "{$baseUrl}/{$cleanPath}";

        $docRoot = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
        $fileSystemPath = $docRoot . '/' . $cleanPath;

        if (!file_exists($fileSystemPath)) {
            error_log("Asset not found no disco: {$fileSystemPath}");
        }

        return $url;
    }
}

if (!function_exists('partial')) {
    function partial(string $path, array $data = []) {
        \Framework\View\View::partial($path, $data);
    }
}