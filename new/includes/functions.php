<?php

function register_user($register_data){
  array_walk($register_data, 'array_sanitize');
  $register_data['password']=md5($register_data['password']);
  print_r($register_user);

  $fields=implode(',', array_keys($register_data));
  $data= '\''.implode('\',\'', $register_data).'\'';

  //echo "INSERT INTO site_members ($fields) VALUES ($data)";

  mysql_query("INSERT INTO site_members ($fields) VALUES ($data)");
//  echo $fields;

}




function user_data($login_username){
  $data=array();
  $func_num_args=func_num_args();
  $func_get_args=func_get_args();

  //print_r($func_get_args);

  if($func_num_args > 1){
    unset($func_get_args[0]);
    $fields= '`'.implode('`,`',$func_get_args).'`';

$data = mysqli_fetch_array(mysqli_query("SELECT $fields FROM 'site_members' WHERE username=$login_username "));

//  if (!$data) {
  //     echo "Could not successfully run query from DB: " . mysql_error();
    //   exit;
   //}
    return $data;
  }
  }



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


function email_exists($user_email){
    $user=mysql_real_escape_string($user_email);
    $fetch=mysql_query("SELECT id FROM `site_members` WHERE user_email='$user'");
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

function loghit($page){
//  $page=mysql_real_escape_string(basename($_SERVER['SCRIPT_NAME']));
  mysql_query("INSERT INTO counter (page_name,hits) VALUES ('{$page}',1)
  ON DUPLICATE KEY UPDATE hits=hits+1 ");
  echo mysql_error();
}
/*
function fetch_stats(){
$stats=array();
$fetch=mysql_query("SELECT id, page_name,hits FROM `counter`");
$result=mysql_fetch_assoc($fetch);
echo mysql_error();

while($result !==  false){
  $stats[]=$result;
  return $stats;
}
}
*/

function fetch_stats(){
$fetch=mysql_query("SELECT id, page_name,hits FROM `counter`");
$stats=array();
while (($row=mysql_fetch_assoc($fetch))!==false){
  $stats[]=$row;

}

  return $stats;
}


function clickcount($ad_id){
//  echo "Hello bro";
//echo "hello dear";
//  $page=mysql_real_escape_string(basename($_SERVER['SCRIPT_NAME']));
  mysql_query("INSERT INTO clicks (ad_id,clicks,date) VALUES ('{$ad_id}',1,DATE(NOW()) )
  ON DUPLICATE KEY UPDATE clicks=clicks+1");
  echo mysql_error();
}

/*
 function fetch_clicks(){
 $stats=array();
 $fetch=mysql_query("SELECT id, ad_name,clicks FROM `clickrecord`");
 $result=mysql_fetch_assoc($fetch);
 echo mysql_error();

 while($result !==  false){
   $stats[]=$result;
   return $stats;
 }
}
*/

function fetch_clicks(){
$fetch=mysql_query("SELECT id, ad_id,clicks,date FROM `clicks`");
$stats=array();

while (($row=mysql_fetch_assoc($fetch))!==false){
  $stats[]=$row;

}
  return $stats;
}


function fetch_todays(){
  $fetch=mysql_query("SELECT id, ad_id,SUM(clicks) AS t_clicks,date FROM `clicks` WHERE date=date(now())");

  $stats=array();

  while (($row=mysql_fetch_assoc($fetch))!==false){
    $stats[]=$row;

  }
    return $stats;
}

function fetch_yesterdays(){
  //$yes_date=date('Y-m-d',strtotime("-1 days"));
  $fetch=mysql_query("SELECT id, ad_id,SUM(clicks) AS t_clicks,date FROM `clicks` WHERE date=DATE_SUB(CURRENT_DATE(),INTERVAL 1 DAY)");

  $stats=array();

  while (($row=mysql_fetch_assoc($fetch))!==false){
    $stats[]=$row;

  }
    return $stats;
}
function fetch_last_7_days(){
  $fetch=mysql_query("SELECT id, ad_id,SUM(clicks) AS total_clicks,date FROM `clicks` WHERE
                      date <CURRENT_DATE() AND date>= DATE_SUB(CURRENT_DATE(),INTERVAL 7 DAY)");
$stats=array();
  while (($row=mysql_fetch_assoc($fetch))!==false){
    $stats[]=$row;

  }
    return $stats;
}



function fetch_this_month(){
  $fetch=mysql_query("SELECT id, ad_id,SUM(clicks) AS all_total_clicks,date FROM `clicks` WHERE
                      date <=CURRENT_DATE() AND date>= DATE_SUB(CURRENT_DATE(),INTERVAL 30 DAY)");

  $stats=array();

  while (($row=mysql_fetch_assoc($fetch))!==false){
    $stats[]=$row;

  }
    return $stats;
}



function fetch_last_month(){
  $fetch=mysql_query("SELECT id, ad_id,SUM(clicks) AS all_total_clicks,date FROM `clicks` WHERE
                      date <=DATE_SUB(CURRENT_DATE(),INTERVAL 30 DAY)
                       AND date>= DATE_SUB(CURRENT_DATE(),INTERVAL 60 DAY)");

  $stats=array();

  while (($row=mysql_fetch_assoc($fetch))!==false){
    $stats[]=$row;

  }
    return $stats;
}

function fetch_all_clicks(){
  $fetch=mysql_query("SELECT id, ad_id,SUM(clicks) AS all_total_clicks,date FROM `clicks` WHERE
                      date <=CURRENT_DATE() AND date>= DATE_SUB(CURRENT_DATE(),INTERVAL 5000 DAY)");

  $stats=array();

  while (($row=mysql_fetch_assoc($fetch))!==false){
    $stats[]=$row;

  }
    return $stats;
}


function chatbot_keywords_fetch(){

//$fetch=mysql_query("SELECT id, LAST(keywords) FROM `keywords`");
$fetch=mysql_query("SELECT id, keywords FROM keywords ORDER BY id DESC LIMIT 1");


$stats=array();
while (($row=mysql_fetch_assoc($fetch))!==false){
  $stats[]=$row;

}
  return $stats;
}


function chatbot_keywords_record($message){

  mysql_query("INSERT INTO keywords (keywords) VALUES ('$message')");

  echo mysql_error();
}


  ?>
