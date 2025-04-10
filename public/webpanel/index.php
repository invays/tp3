<?php
// Version
define('VERSION', '4.1.0.3');

// Configuration
if (is_file(__DIR__ . '/config.php')) {
    require_once(__DIR__ .'/config.php');
}

// Installs
if (!defined('DIR_APPLICATION')) {
	header('Location: ../install/index.php');
	exit();
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

// Framework
require_once(DIR_SYSTEM . 'framework.php');
