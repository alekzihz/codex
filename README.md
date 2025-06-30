# codex

This repository demonstrates how to load environment variables using **phpdotenv** in a basic PHP setup.

## Setup

1. Install dependencies (requires Composer):

```bash
composer install
```

2. Copy `.env.example` to `.env` and adjust values as needed:

```bash
cp .env.example .env
```

3. Run the example script:

```bash
php public/index.php
```

You should see the values from your `.env` file printed to the console.

## Running tests

Execute the PHPUnit suite to verify the configuration loader:

```bash
vendor/bin/phpunit
```
