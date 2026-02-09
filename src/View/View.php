<?php

declare(strict_types=1);

namespace Framework\View;

class View {
    protected static array $sections = [];
    protected static ?string $currentSection = null;
    protected static array $stacks = [];

    public static function start(string $name): void {
        self::$currentSection = $name;
        ob_start();
    }

    public static function end(): void {
        if (self::$currentSection) {
            self::$sections[self::$currentSection] = ob_get_clean();
            self::$currentSection = null;
        }
    }

    public static function yield(string $name, string $default = ''): void {
        echo self::$sections[$name] ?? $default;
    }

    public static function push(string $stack, string $content): void {
        // Evita empurrar o mesmo conteúdo (como o link de CSS) repetidamente
        if (!isset(self::$stacks[$stack]) || !in_array($content, self::$stacks[$stack])) {
            self::$stacks[$stack][] = $content;
        }
    }

    public static function stack(string $stack): void {
        if (isset(self::$stacks[$stack])) {
            echo implode("\n", self::$stacks[$stack]);
            // Limpa após renderizar para evitar vazamento de memória ou duplicidade
            unset(self::$stacks[$stack]);
        }
    }

    public static function partial(string $path, array $data = []): void {
        extract($data);
        
        // Usando o caminho absoluto a partir da raiz do projeto (ajuste o nível conforme necessário)
        // __DIR__ . /../.. costuma apontar para a pasta src ou raiz.
        $basePath = realpath(__DIR__ . '/../../views');
        $filePath = $basePath . DIRECTORY_SEPARATOR . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path) . '.php';

        if (file_exists($filePath)) {
            require $filePath;
        } else {
            error_log("Erro: Partial [{$path}] não encontrado em: {$filePath}");
        }
    }
}