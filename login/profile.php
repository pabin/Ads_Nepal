<?php
 require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/session.php";
 require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";

?>
<?php
include $site_root."layouts/header.php";
 ?>
 <div id="main">

<h3 align="center"> Hellow <?php echo $login_session; ?></h3>
<h2 align="center" >Welcome to login system</h2>

<h4 align="center">  click here to <a href="logout.php">LogOut</a> </h4>

</div>


<?php
         include $site_root."layouts/footer.php";
?>
