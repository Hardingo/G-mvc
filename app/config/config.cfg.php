<?php 
// App root

// App folder root
//str_replace('\\' , '/', $aproot)
//$aproot = ;
define ("APROOT", dirname(dirname(__FILE__)));

// Server HOST, where the application is hosted
define ("HOST", $_SERVER["HTTP_HOST"]);

// sitename 
define("SITENAME", "People Evidence");

// URL ROOT modify for http or https EDIT FOR APP NAME ASWELL!
define("URLROOT", "http://" . HOST . "/personal/MVC/first-mvc/" );


// Database PARAMS

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "TESTMVC");
