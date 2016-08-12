<?php


// Database Constants
defined('DB_SERVER') ? null : define("DB_SERVER", "localhost");
defined('DB_USER')   ? null : define("DB_USER", "root");
defined('DB_PASS')   ? null : define("DB_PASS", "9090");
defined('DB_NAME')   ? null : define("DB_NAME", "adnepal");

//1.Createa a database connection
$connection=mysql_connect("localhost","root","9090");
if(!$connection){
	die("Database connection failed:". mysql_error());
}

//2.Select a database to use
$database_select=mysql_select_db("adnepal",$connection);
if(!$database_select){
	die("Database selection failed:".mysql_error());
}
?>
