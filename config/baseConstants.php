<?php

$documentRoot = getcwd();
// echo $documentRoot;
DEFINE ('BASE_PATH', $documentRoot);



$uri = $_SERVER['REQUEST_URI'];
// echo "<br>";
// echo $uri;

if (isset($uri) && $uri !== null) {
    $uri = substr($uri, 1);
    $uri = explode('/', $uri);
    $uri = "http://$_SERVER[HTTP_HOST]" . "/" . $uri[0];
//     echo "<br>";
// echo $uri;
} else {
    $uri = null;
}

define("BASE_URL", $uri);