<?php 

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','development');

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

// Database settings
//define('DB_HOST','localhost');
//define('DB_NAME','phpro_auth');
//define('DB_USERNAME','root');
//define('DB_PASSWORD','');

define('DB_HOST','localhost');
define('DB_NAME','19940_test');
define('DB_USERNAME','volendam');
define('DB_PASSWORD','volendam');


define('NR_ITEMS_PER_PAGE',4);
?>
