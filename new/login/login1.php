
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";

 if(empty($_POST)===false){
   $username=$_POST['username'];
   $password=$_POST['password'];

   if(empty($username)===true  || empty($password)===true){
     $errors[]='You need to enter Username and Password';
   }else if(user_exists($username)===false){
     $errors[]=' Enter Correct username!!! Have you registered?';
   }else if(user_active($username)===false){
     $errors[]='You have not activated your account';
   }else{
     $login=login($username,$password);
     if($login===false){
        $errors[]=' That Username/Password Combination is incorrect!!!';
     }else{
       $_SESSION['login_username']=$login;
        header("Location: profile.php");
        exit();
     }
}

 }else{
   $errors[]='No Data Received';
 }

 include $site_root."layouts/header.php";
 ?>
 <div id="main">
<?php    output_errors($errors);
 ?>
 <form method="post" name="signup" action="index.php">
   <input type="submit" name="submit" id="submit"  value="Fill Up Again" />
 </form>
 </div>
 <?php
 include $site_root."layouts/footer.php";

 ?>
