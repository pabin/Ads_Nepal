<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/database.php";
session_start();
{
    $user=mysql_real_escape_string($_POST['username']);
    $pass=mysql_real_escape_string($_POST['password']);
    $fetch=mysql_query("SELECT id FROM `site_members` WHERE username='$user' and password='$pass'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
    //session_register("sessionusername");
    $_SESSION['login_username']=$user;
    header("Location:profile.php");
    }
    else
    {
       header("Location:index.php");
    }

}
?>  
