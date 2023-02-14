<?php


require 'Routing.php';
session_start();
$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('events', 'EventController');
Routing::get('myEvents', 'EventController');
Routing::post('login', 'SecurityController');
Routing::post('register', 'SecurityController');
Routing::post('addEvent', 'EventController');
Routing::get('like', 'EventController');
Routing::get('uncertain', 'EventController');
Routing::get('dislike', 'EventController');
Routing::post('search', 'EventController');
Routing::post('admin', 'EventController');
Routing::post('logout', 'SecurityController');
Routing::post('deleteEvent', 'EventController');
Routing::post('settings', 'SecurityController');
Routing::post('checkEvents', 'EventController');

Routing::run($path);