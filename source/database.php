<?php

define('DB_NAME', 'c10241AGSPLANNER');
define('DB_USERNAME', 'c10241aps1');
 
define('DB_PASSWORD', 'zRiQ57@MkXd');
 
define('DB_HOST', '127.0.0.1:3306');
 
function database_connect()
{
   $connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
   if ($connection->connect_errno) {
      die( 'Failed to connect to MySQL: ' . $connection->connect_error );
   }
   return $connection;
}
