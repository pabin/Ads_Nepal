<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";

session_start();
?>
<?php
include $site_root."layouts/header.php";

?>
<div id="main">
<div id="login_location">
  <h3> Enter Username and Password to Login: </h3>
<form method="post" name="login" action="login1.php">
<label for="name" class="labelname"> Username: </label>
<input type="text" name="username" id="userid"  /><br />
<label for="name" class="labelname"> Password :</label>
<input type="password" name="password" id="passid"  /><br />
<input type="submit" name="submit" id="submit"  value="Login" />
</form>
<br/>
<h3 align="center"> No User account? SignUp Here: <h3>
<form method="post" name="signup" action="signup.php">
  <input type="submit" name="submit" id="submit"  value="SignUp" />
</form>
</div>
</div>


<?php
         include $site_root."layouts/footer.php";
?>
