<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/js/javascript.js";
?>

<div id="main">

<body onload="ShowBanners()">
<center>
     <a href="javascript: ShowLinks()">
      <img src="ad1.png" width="400" height="250" name="ChangeBanner" id="add"/></a>

</center>
</div>


<script type="text/javascript">
document.getElementById('add').onclick = function click(){
    var ad_id=102;
    window.location.href = "http://localhost/php/ads/ad.php?ad_id=" + ad_id;
}
</script>
