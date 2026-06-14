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

## Vue parent/child examples

The repository also includes two minimal Vue examples that demonstrate parent-to-child data flow with props and child-to-parent updates with emitted events.

### Legacy CDN version

Open the standalone file in a browser:

```bash
xdg-open examples/vue-legacy/index.html
```

This version keeps everything in one HTML file and registers the child component from a regular script tag.

### Structured `.vue` version

Run the Vite example with single-file components:

```bash
cd examples/vue-structured
npm install
npm run dev
```

The parent component lives in `src/App.vue`, while the child component lives in `src/components/ChildMessage.vue`.
