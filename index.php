<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToBd();

$tasks = fetchAllTasks($pdo);


require 'index.view.php';
