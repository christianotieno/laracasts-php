<?php

$person = [
  'age' => '25',
  'name' => 'Christian',
  'color' => 'dark-brown'
];

$person['another_name'] = 'John';

unset($person['another_name']);

die(var_dump($person));

require 'index.view.php';