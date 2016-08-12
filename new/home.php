<div id="main">


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

</br></br></br></br>


<?php
//include $site_root."chatbot/index.php";

 ?>


<div id="chat-window">
  <a href="<?php echo $domain_name.'/chatbot/chatbot.php'; ?>"><img src="chatbot/online.png"></a>

</div>




<?php
//loghit($selected_page);
?>
       </div>
