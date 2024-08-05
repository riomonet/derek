<?php 

function showErrors() {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}

/* showErrors(); */

function format($variable) {
  echo "<pre>";
  echo "<code>";
  echo print_r( $variable );
  echo "</code>";
  echo "</pre>";
}

/* format( $_POST ); */


function dd($variable) {
  echo "<pre>";
  var_dump($variable);
  echo "</pre>";
  die();
}


function isUri($uri) {
  
  return $_SERVER['REQUEST_URI'] === $uri;

}

?>
