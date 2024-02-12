<?php

require_once(dirname(__FILE__, 2) . "/src/config/config.php");

$uri = urldecode($_SERVER['REQUEST_URI']);

if ($uri === '/DEV/public/' || $uri === '') {
    $uri = 'login_controller.php';
}

require_once(CONTROLLER_PATH . "/{$uri}");