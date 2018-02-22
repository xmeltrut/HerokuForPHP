<?php
require 'vendor/autoload.php';

Flight::route('/', function(){
    $var = 'mysql://u28mdphsne2bh36l:f1mu40dm1zisw4um@ol5tz0yvwp930510.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/eucl4tds8rjyh8vc';
    $db = parse_url($var);

    $mysqli = new mysqli(
        $db['host'],
        $db['user'],
        $db['pass'],
        str_replace('/', '', $db['path'])
    );

    echo $mysqli->get_client_info();
});

Flight::start();
