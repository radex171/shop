<?php
declare(strict_types=1);

$projectName = 'shop';
$basePath = __DIR__ . DIRECTORY_SEPARATOR . $projectName;

$directories = [
    'public',
    'src/Controller',
    'views',
    
];

function createDirectory(string $path): void
{
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
        echo "📁 Created directory: $path\n";
    }
}

function createFile(string $path, string $content): void
{
    if (!file_exists($path)) {
        file_put_contents($path, $content);
        echo "📄 Created file: $path\n";
    }
}

// Create base project directory
createDirectory($basePath);

// Create directories
foreach ($directories as $dir) {
    createDirectory($basePath . DIRECTORY_SEPARATOR . $dir);
}

// index.php
$indexPhp = <<<PHP
<?php
declare(strict_types=1);

echo 'Shop bootstrap OK';
PHP;

createFile($basePath . '/public/index.php', $indexPhp);

// composer.json
$composerJson = <<<JSON
{
    "name": "radek/shop",
    "description": "Simple PHP shop project for learn",
    "type": "project",
    "autoload": {
        "psr-4": {
            "Radek\\\\Shop\\\\": "src/"
        }
    },
    "require": {}
}
JSON;

createFile($basePath . '/composer.json', $composerJson);

echo "\n✅ Project structure generated successfully.\n";
