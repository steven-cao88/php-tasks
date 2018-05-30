<?php

require 'models/Task.php';

$database = $app['database'];

$tasks = $database->selectAll('todos', 'Task');

$tasks[0]->setComplete(true);

require 'views/index.view.php';
