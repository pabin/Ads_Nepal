<?php

function logged_in(){
  return (isset($_SESSION['login_username'])) ? true: false;
}


function user_exists($username){
    $user=mysql_real_escape_string($username);
    $fetch=mysql_query("SELECT id FROM `site_members` WHERE username='$user'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
       return true;
     }
    else
    {
       return false;
         }
}

function user_active($username){
    $user=mysql_real_escape_string($username);
    $fetch=mysql_query("SELECT id FROM `site_members` WHERE username='$user'");
    $count=mysql_num_rows($fetch);
    if($count!="")
    {
       return true;
     }
    else
    {
       return false;
         }
}

function id_from_username($username){
  $user=mysql_real_escape_string($username);
  $fetch=mysql_query("SELECT 'id' FROM `site_members` WHERE username='$user'");
  $count=mysql_num_rows($fetch);
  if($count!="")
  {
     return $user;
   }else{
     return false;
   }
  }


function login($username,$password){
  $user=mysql_real_escape_string($username);
  $pass=mysql_real_escape_string($password);

  $id=id_from_username($username);

  $fetch=mysql_query("SELECT id FROM `site_members` WHERE username='$user' AND password=$pass");
  $count=mysql_num_rows($fetch);
  if($count!="")
  {
     return $id;
   }else{
     return false;
   }
}


 ?>
