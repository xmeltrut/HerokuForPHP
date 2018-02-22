<?php

require 'vendor/autoload.php';

Flight::set('flight.handle_errors', false);

Flight::route('/', function(){
    throw new Exception('This app is broken');
});

Flight::start();
