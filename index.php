<?php
  require_once(__DIR__ . "/routing.php");
  
  $match = routing();
  if( $match && is_callable( $match['target'] ) ) {
      call_user_func_array( $match['target'], $match['params'] ); 
  } else {
      header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
  }

