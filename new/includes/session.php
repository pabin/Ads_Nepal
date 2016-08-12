<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/database.php";
session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("SELECT username FROM `site_members` WHERE username='$check' ");
$row=mysql_fetch_array($session);
$login_session=$row['username'];
if(!isset($login_session))
{
header("Location:index.php");
}
?>
