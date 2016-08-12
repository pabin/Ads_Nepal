<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";

session_start();
?>
<?php
include $site_root."layouts/header.php";

?>
<div id="main">
<div id="login_location">
  <h3> Login to Your Advertiser Account: </h3>
<form method="post" name="login" action="advertiserlogin.php">
<label for="name" class="labelname"> Username: </label>
<input type="text" name="username" id="userid" required="required" /><br />
<label for="name" class="labelname"> Password :</label>
<input type="password" name="password" id="passid" required="required"  /><br />
<input type="submit" name="submit" id="submit"  value="Login" />
</form>
<br/>
<h3 align="center"> Not Started to Grow your Business? Start Here: <h3>
<form method="post" name="signup" action="advertisersignup.php">
  <input type="submit" name="submit" id="submit"  value="Start Investing" />
</form>
</div>
</div>


<?php
         include $site_root."layouts/footer.php";
?>
