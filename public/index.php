<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Infrastructure\Config\EnvConfig;

$config = new EnvConfig(__DIR__ . '/..');

$dbHost = $config->get('DB_HOST', 'localhost');
$dbUser = $config->get('DB_USER', 'root');
$dbPass = $config->get('DB_PASS', 'secret');

echo "Host: $dbHost\n";
echo "User: $dbUser\n";
echo "Pass: $dbPass\n";
