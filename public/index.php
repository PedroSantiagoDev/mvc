<?php

require "../bootstrap.php";

use core\Controller;

try {
    $controller = new Controller;
    $controller = $controller->load();
} catch (Exception $e) {
    dd($e->getMessage());
}


dd($controller);
