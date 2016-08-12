<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";

session_start();
?>
<?php
include $site_root."layouts/header.php";

?>



<div class="body-main">

<div class="container" style="padding-top:150px; padding-left:300px;">
    <h4><b> We have received you application your application is under review.</br>
      Once Your application status changes we will notify you via Email.</b></h4>

  </div>
</div>






<div id="chat-bar" class="col-sm-12">
  <a href="<?php echo $domain_name.'/chatbot/signin.php'; ?>">
    <img src="<?php echo $domain_name.'/images/'; ?>/chat_bar.png"></a>
</div>

<?php
         include $site_root."layouts/footer.php";
?>
