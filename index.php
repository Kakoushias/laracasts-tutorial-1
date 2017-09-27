<?php

$database = require 'core/bootstrap.php';

$router = Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

if ($router) {
    require $router;
}


