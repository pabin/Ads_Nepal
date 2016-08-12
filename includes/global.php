
<?php
session_start();
error_reporting(0);
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/functions.php";
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/database.php";
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/general.php";






if (logged_in()===true){
    $session_username=$_SESSION['login_username'];
    $user_data=user_data($session_username,'id', 'username', 'password', 'first_name', 'last_name', 'user_email', 'mobile_no');
  //  echo $user_data['username'];
}

       $errors=array();
      $pages=array("home_page","contact_page","about_page","advertiser_page","publisher_page","login_page");
      $selected_page = "home_page";
      $domain_name = 'http://'.$_SERVER['SERVER_NAME'].'/php';

      $site_root = $_SERVER['DOCUMENT_ROOT']."/php/";
      $css_path = "/styles/styles.css";
      $bootstrap_path="/bootstrap/css/bootstrap.min.css";
      $img_root= $_SERVER['DOCUMENT_ROOT']."/php/images/";

      /*
      $Login_User_ID = 1;
      $Login_User_Name = 'raj';
      $loged_in = false;

      $_SESSION['Login_User_ID'] = $Login_User_ID;
      $_SESSION['Login_User_Name'] = $Login_User_Name;
      $_SESSION['loged_in'] = $loged_in;
*/
?>
<div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>

</div>
