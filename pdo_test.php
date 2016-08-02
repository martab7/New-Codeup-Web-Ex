<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'employees');
define('DB_USER', 'anthony_m');
define('DB_PASS', 'Aqswdef12');

require ('db_connect.php');
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
