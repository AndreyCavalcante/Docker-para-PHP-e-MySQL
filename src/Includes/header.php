<?php
    $title;

    if($_SERVER['REQUEST_URI'] == '/'){
        $title = 'Home';
    }else if($_SERVER['REQUEST_URI'] == '/About'){
        $title = 'About';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title?></title>

        <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">