<?php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'employees');
define('DB_USER', 'anthony_m');
define('DB_PASS', 'Aqswdef12');

require ('db_connect.php');
// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
var_dump($dbc->query('SELECT * FROM employees LIMIT 3 offset 3')->fetchAll(PDO::FETCH_ASSOC));

// $stmt = $dbc->query('SELECT * FROM employees limit 10');
// // echo "Columns: " . $stmt->columnCount() . PHP_EOL;
// $employee = array();
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     $row['emp_no'])
//     $row['birth_date'])
// }
