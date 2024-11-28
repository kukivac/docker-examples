<?php

declare(strict_types=1);

use App\Helpers\Router;
use Dotenv\Dotenv;
use MongoDB\Client;

require 'vendor/autoload.php'; // Include Composer's autoloader
require 'helpers.php';         // Include the helpers file

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Define environment constants
define('APP_ENV', $_ENV['APP_ENV'] ?? 'production');
define('DEBUG', filter_var($_ENV['DEBUG'] ?? false, FILTER_VALIDATE_BOOLEAN));
define('DB_HOST', $_ENV['DB_HOST'] ?? 'localhost');
define('DB_PORT', $_ENV['DB_PORT'] ?? '27017');
define('DB_DATABASE', $_ENV['DB_DATABASE'] ?? 'example');
define('DB_USERNAME', $_ENV['DB_USERNAME'] ?? 'root');
define('DB_PASSWORD', $_ENV['DB_PASSWORD'] ?? 'password');

// Error display based on environment
if (APP_ENV === 'local') {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
    error_reporting(0);
}

// Initialize MongoDB client
$connection_string = sprintf(
    "mongodb://%s:%s@%s:%s/%s?authSource=admin",
    DB_USERNAME,
    DB_PASSWORD,
    DB_HOST,
    DB_PORT,
    DB_DATABASE
);
$mongo_client = new Client($connection_string);

print_r($mongo_client->listDatabaseNames());