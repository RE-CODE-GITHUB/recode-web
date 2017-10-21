<?php
require 'vendor/autoload.php';

function routing()
{
    $router = new AltoRouter();

    //  トップページ
    $router->map('GET', '/', function() {
        require __DIR__ . '/page/home/index.html';
    });

    // メール送信
    $router->map('POST', '/api/mail', function() {
        require __DIR__ . '/api/mail/index.php';
    });

    return $router->match();
}

