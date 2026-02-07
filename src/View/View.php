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
        self::$stacks[$stack][] = $content;
    }

    public static function stack(string $stack): void {
        if (isset(self::$stacks[$stack])) {
            echo implode("\n", self::$stacks[$stack]);
        }
    }

    public static function partial(string $path, array $data = []): void {
        extract($data);
        
        $filePath = __DIR__ . "/../../views/{$path}.php";

        if (file_exists($filePath)) {
            require $filePath;
        } else {
            echo "";
        }
    }
}