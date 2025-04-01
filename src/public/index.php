<?php

    #Arquivo principal do projeto
    #Onde ficam as rotas do projeto
    #Adicione mais rotas caso for preciso

    require_once __DIR__ . '/../../vendor/autoload.php';

    use Steampixel\Route;

    define('VIEWS_PATH', __DIR__ . '/../Views');
    define('INC_PATH', __DIR__ . '/../Includes');

    Route::add('/', function () {
        require VIEWS_PATH . '/index.php';
        exit;
    }, ['get', 'post']);

    Route::add('/About', function () {
        require VIEWS_PATH . '/about.php';
        exit;
    }, ['get', 'post']);

    Route::run('/');
?>
