<?php
    require_once __DIR__ . '/../../vendor/autoload.php';

    use Steampixel\Route;

    define('VIEWS_PATH', __DIR__ . '/../Views');

    Route::add('/', function () {
        require VIEWS_PATH . '/index.php';
        exit;
    }, ['get', 'post']);

    Route::run('/');
?>
