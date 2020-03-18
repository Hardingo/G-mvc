<?php 
// App root

// App folder root
//str_replace('\\' , '/', $aproot)
//$aproot = ;
define ("APROOT", dirname(dirname(__FILE__)));

// Server HOST, where the application is hosted
define ("HOST", $_SERVER["HTTP_HOST"]);

// sitename 
define("SITENAME", "App title");

// URL ROOT modify for http or https EDIT FOR APP NAME ASWELL!
define("URLROOT", "http://" . HOST . "/G-mvc-1.0.1/" );


// Database PARAMS

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "framework_dev");