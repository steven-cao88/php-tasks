<?php
$router->get('', 'controllers/index.php');
$router->get('about', 'conttrolers/about.php');

$router->post('tasks', 'controllers/add-task.php');
