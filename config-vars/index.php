<?php
require 'vendor/autoload.php';

Flight::route('/', function(){
    echo 'Welcome to ' . getenv('PROJECT_NAME');
});

Flight::start();
