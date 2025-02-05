<?php

/**
 * Redirect function
 *
 * @param [string] $url
 * @return void
 */
function redirect($url) {
    header("Location: {$url}");
    exit();
}

function inspect($value) {
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
}