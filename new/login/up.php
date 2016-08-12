<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";
include $site_root."layouts/header.php";
?>
<div id="main">


<?php
if(empty($_POST)==false){
//  echo "Form Submitted";
  $required_fields=array('username','password', 'password_again', 'first_name','user_email','mobile_no');
//  echo '<pre>', print_r($_POST), '</pre>';
  foreach($_POST as $key=>$value){
  //  echo $key, ' ';
    if(empty($value) && in_array($key, $required_fields)===true){
      $errors[]='Fields marked with * are required';
      break 1;
}
  }
    if(empty($errors)===true){
      if(user_exists($_POST['username'])===true){
        $errors[]='Sorry !!! The username \''. $_POST['username']. '\' is already taken ';
      }
      if (preg_match("/\\s/", $_POST['username'])==true){
        $errors[]='Your Username must not contain any spaces';
      }
      if(strlen($_POST['password']) < 6){
        $errors[]='Your Password Must be longer than 6 Characters';
      }
      if($_POST['password'] !== $_POST['password_again']){
        $errors[]='Your Passwords do not Match';
      }
      if(filter_var($_POST['user_email'],FILTER_VALIDATE_EMAIL)===false ){
        $errors[]='A Valid Email Address is Required';
      }
      if(email_exists($_POST['user_email'])===true){
        $errors[]='Sorry !!! The Email  \''. $_POST['user_email']. '\' is already registered';
      }
    }
}

if(empty($_POST)===false && empty($errors)===true){
  $register_data=array(
    'username'    => $_POST['username'],
    'password'    => $_POST['password'],
    'first_name'    => $_POST['first_name'],
    'last_name'    => $_POST['last_name'],
    'user_email'    => $_POST['user_email'],
    'mobile_no'    => $_POST['mobile_no'],

  );
  register_user($register_data);
//  header("Location: registered.php");

  //exit
 }else if(empty($errors)===false){
  echo output_errors($errors);
}
  ?>

  <form method="post" name="signup" action="signup.php">
    <input type="submit" name="submit" id="submit"  value="Fill Up Again" />
  </form>
</div>



 <?php
        include $site_root."layouts/footer.php";
 ?>
