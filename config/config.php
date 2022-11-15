<?php 
session_start();

define('URLROOT', 'http://localhost/webapp');
define('APPROOT', dirname(dirname(__FILE__)));
define('APPNAME', 'My Web App'); 

// Database Configuration
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "webapp"); 

?>