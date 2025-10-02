<?php
namespace App\Infrastructure\Config;

use Dotenv\Dotenv;

class EnvConfig
{
    public function __construct(string $projectRoot)
    {
        $dotenv = Dotenv::createImmutable($projectRoot);
        $dotenv->load();
    }

    public function get(string $key, ?string $default = null): ?string
    {
        return $_ENV[$key] ?? $default;
    }
}
