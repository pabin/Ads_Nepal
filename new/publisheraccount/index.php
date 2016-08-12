<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";

session_start();
?>
<?php
include $site_root."layouts/header.php";

?>
<div id="main">
<div id="login_location">
  <h3> Login to Your Publisher Account: </h3>
<form method="post" name="login" action="publisherlogin.php">
<label for="name" class="labelname"> Username: </label>
<input type="text" name="username" id="userid" required="required" /><br />
<label for="name" class="labelname"> Password :</label>
<input type="password" name="password" id="passid" required="required"  /><br />
<input type="submit" name="submit" id="submit"  value="Login" />
</form>
<br/>
<h3 align="center"> No Publisher account? Submit Application Here: <h3>
<form method="post" name="signup" action="publishersignup.php">
  <input type="submit" name="submit" id="submit"  value="Submit Application" />
</form>
</div>
</div>


<?php
         include $site_root."layouts/footer.php";
?>
