<?php

$router->get('', 'PagesControllers@home');
$router->get('about', 'PagesControllers@about');
$router->get('contact', 'PagesControllers@contact');

$router->get('users', 'UsersControllers@index');
$router->post('users', 'UsersControllers@store')
