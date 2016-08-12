<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/js/javascript.js";
?>

<div class="body-main">

<body onload="ShowBanners()">
<center>
     <a href="javascript: ShowLinks()">
      <img src="ad1.png" width="300" height="300" name="ChangeBanner" id="add"/></a>
</center>


<script type="text/javascript">
document.getElementById('add').onclick = function click(){
    var ad_id=103;
    window.location.href = "http://localhost/php/ads/ad.php?ad_id=" + ad_id;
}
</script>


<?php
$name= user_data('first_name');
echo $name;

?>
<table border='11' style="width:400px">
  <tr>
    <th> Id </th>
    <th> Page Name </th>
    <th> Total Hits </th>
  </tr>
  <?php
  foreach (fetch_stats() as $stat){
    ?>
  <tr>
    <td> <?php echo $stat[id]; ?>  </td>

    <td> <?php echo $stat[page_name]; ?>  </td>
    <td> <?php echo $stat[hits]; ?>      </td>

  </tr>

  <?php
}
?>
</table>


<div id="chat-bar" class="col-sm-12">
  <a href="<?php echo $domain_name.'/chatbot/signin.php'; ?>">
    <img src="<?php echo $domain_name.'/images/'; ?>/chat_bar.png"></a>
</div>

</div>
