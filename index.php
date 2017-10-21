<?php
  require 'vendor/autoload.php';
  $router = new AltoRouter();
  $router->map( 'GET', '/', function() {
      require __DIR__ . '/page/home/index.html';
  });
  $match = $router->match();
  if( $match && is_callable( $match['target'] ) ) {
      call_user_func_array( $match['target'], $match['params'] ); 
  } else {
      header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
  }

