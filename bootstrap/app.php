<?php
//if(!isset($_SESSION))
//session_start();

/**
 * load environment variable
 */
require_once __DIR__.'/../config/database.php';

/**
 * this instance for router
 */
new \App\Providers\BaseRoute($router);