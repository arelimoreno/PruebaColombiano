<?php 
$DB = new mysqli(
  'localhost',
  'root',
  'root',
  'db_colombiano'
);

if ($DB->connect_error) {
    die("Connection failed: " . $DB->connect_error);
}

?>