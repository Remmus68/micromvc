<?php

require_once 'vendor/autoload.php';
require_once 'app/components/File.php';
require_once 'app/controllers/Controller.php';

define('PROJECT_NAME', 'SkillUp');

$query = $_GET;
$method = null;
if (isset($query['act'])) {
    $method = $query['act'].'Action';
}

$controller = new Controller();
if ($method && method_exists($controller, $method)) {
    $controller->{$method}();
}else{
    $controller->homeAction();
}


