<?php

$users = App::get('database')->selectAll('users');

require 'index.view.php';