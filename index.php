<?php
  require 'vendor/autoload.php';
  $router = new AltoRouter();
  $router->setBasePath('/');
  $router->map('GET', '/', './page/home');
  $match = $router->match();

