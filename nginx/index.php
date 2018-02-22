<?php

require 'vendor/autoload.php';

Rollbar\Rollbar::init([
    'access_token' => getenv('ROLLBAR_ACCESS_TOKEN'),
    'environment' => 'development'
]);

Flight::route('/', function(){
    echo $_SERVER['SERVER_SOFTWARE'];
});

Flight::start();
