<?php

$tasks = $app['database']->selectAll('todos');

require 'index.view.php';