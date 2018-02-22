<?php

require 'vendor/autoload.php';

Rollbar\Rollbar::init([
    'access_token' => getenv('ROLLBAR_ACCESS_TOKEN'),
    'environment' => 'development'
]);

Flight::set('flight.handle_errors', false);

Flight::route('/', function(){
    throw new Exception('This app is broken');
});

Flight::start();
