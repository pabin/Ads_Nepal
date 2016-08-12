<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/js/javascript.js";
?>

<div class="body-main">

<body onload="ShowBanners()">
<center>
     <a href="javascript: ShowLinks()">
      <img src="ad1.png" width="300" height="300" name="ChangeBanner" id="add"/></a>
</center>
</div>


<script type="text/javascript">
document.getElementById('add').onclick = function click(){
    var ad_id=101;
    window.location.href = "http://localhost/php/ads/ad.php?ad_id=" + ad_id;
}
</script>

<div id="chat-bar" class="col-sm-12">
  <a href="<?php echo $domain_name.'/chatbot/signin.php'; ?>">
    <img src="<?php echo $domain_name.'/images/'; ?>/chat_bar.png"></a>
</div>
