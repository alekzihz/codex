<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Infrastructure\Config\EnvConfig;

class EnvConfigTest extends TestCase
{
    private string $envFile;

    protected function setUp(): void
    {
        $this->envFile = __DIR__ . '/.env';
        copy(__DIR__ . '/../.env.example', $this->envFile);
    }

    protected function tearDown(): void
    {
        if (file_exists($this->envFile)) {
            unlink($this->envFile);
        }
        unset($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
    }

    public function testLoadsEnvVariables(): void
    {
        $config = new EnvConfig(__DIR__);
        $this->assertSame('localhost', $config->get('DB_HOST'));
        $this->assertSame('user', $config->get('DB_USER'));
        $this->assertSame('secret', $config->get('DB_PASS'));
    }
}
