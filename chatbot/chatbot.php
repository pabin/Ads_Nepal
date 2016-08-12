<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";
    require_once $_SERVER['DOCUMENT_ROOT']."/php"."/chatbot/chatbot_func.php";

    $selected_page = 'home_page';

        include $site_root."layouts/header.php";
?>

<div class="body-main">
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





<?php
  if(empty($_POST)===false){
  //  msg_sent();
  //  msg_received();
  }
  foreach (chatbot_keywords_fetch() as $stat){
    $id=$stat[id];
 switch ($id) {
       case "139":
      // msg_sent();
           break;

       default:
   }
 }
 ?>



<?php
if(isset($_POST['send'])){
  if(send_msg($_POST['message'])){
  //  echo 'Message Sent.';
  } else{
  //  echo 'Message Failed to sent.';
  }
}
?>

 <!-- Messages -->


</div>


<div class="container">
    <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-left:895px; width:380px;">
        <div class="col-xs-12 col-md-12">
        	<div class="panel panel-default">
                <div class="panel-heading top-bar">

                    <div class="col-md-8 col-xs-8">
                      <h5 ><b>LIVE  Customer Support<b></h5>

                    </div>

                    <div class="col-md-4 col-xs-4" style="text-align: right;">
                        <a href="<?php echo $domain_name.'/index.php'; ?>"><span id="minim_chat_window"
                                            class="glyphicon glyphicon-minus icon_minim"></span></a>
                        <a href="<?php echo $domain_name.'/index.php'; ?>"><span
                                      class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>

                    </div>
                </div>
                <div class="panel-body msg_container_base" onscroll="myFunction()">



                  <?php
                  foreach (get_msg() as $message){
                   $msg_id= $message['msg_id'];
                    $msg=$message['message'];
                  }

                  //  for ($i=1;$i<=3;$i++){
                  //      for($j=1;$j<=$i;$j++){
                          msg_sent($msg_id);
                          msg_received($msg);
                    //    }
                  //    }

                   ?>
                </div>



                </div>

                <?php
                //if(empty($_POST)===false){
                // chatbot_footer_one();

               //}else{
                 chatbot_footer_one();
               //}
                  ?>

    		</div>
        </div>
    </div>


</div>


<?php
include $site_root."layouts/footer.php";
 ?>