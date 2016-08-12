<?php
require("constants.php");
//1.Createa a database connection
$connection=mysql_connect("localhost","root","9090");
if(!$connection){
	die("Database connection failed:". mysql_error());
}

//2.Select a database to use
$database_select=mysql_select_db("sample_project",$connection);
if(!$database_select){
	die("Database selection failed:".mysql_error());
}
?>
