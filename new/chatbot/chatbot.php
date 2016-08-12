=<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/php"."/chatbot/chatbot_func.php";

    $selected_page = 'home_page';

        include $site_root."layouts/header.php";
?>

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

<div id="container">
 <div class="container">
     <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-left:10px;">
         <div class="col-xs-12 col-md-12">
         	<div class="panel panel-default">
                 <div class="panel-heading top-bar">

                     <div class="col-md-8 col-xs-8">
<div id="close_bar"> <a href="<?php echo $domain_name.'/index.php'; ?>"><img src="close.png" ></a></div>
            <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Ads Nepal Live Chat</h3>
                     </div>
                 </div>
                 <div class="panel-body msg_container_base">



                    <?php

                      if(empty($_POST)===false){
                        msg_sent();
                        msg_received();

                      }

                      foreach (chatbot_keywords_fetch() as $stat){
                        $id=$stat[id];


                     switch ($id) {
                           case "139":
                           msg_sent();
                               break;
                           case "140":
                           msg_sent();
                           msg_sent();
                               break;
                           case "141":
                           msg_sent();
                           msg_sent();
                           msg_sent();
                               break;
                               case "142":
                               msg_sent();
                               msg_sent();
                               msg_sent();
                               msg_sent();
                                   break;
                                   case "143":
                                   msg_sent();
                                   msg_sent();
                                   msg_sent();
                                   msg_sent();
                                   msg_sent();
                                       break;
                           default:

                       }
                     }


                     ?>






                  </div>
                  <?php   chatbot_footer();  ?>
</div>
</div>
</div>
</div>
</div>
</div>


<?php
include $site_root."layouts/footer.php";
 ?>
