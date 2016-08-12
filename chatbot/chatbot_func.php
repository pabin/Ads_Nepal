<?php
function chat_form(){
  ?>

<?php
} ?>



<?php
function msg_received($msg){
?>
<div class="row msg_container base_receive">
    <div class="col-md-2 col-xs-2 avatar">
        <img src="avatar2.png" class=" img-responsive ">
        <P align="center">Saili</p>
    </div>
    <div class="col-md-10 col-xs-10">
        <div class="messages msg_receive">
            <p>

              <?php


                      if(isset($_POST['send'])){
                        if(send_msg($_POST['message'])){

                          foreach (get_bot_message($msg) as $message){
                            echo $message['answer'];
                          }
                        //  echo 'Message Sent.';
                        } else{
                          echo 'Ask Something Please!';
                        }
                      }


               ?>

            </p>
            <time><?php echo (date("h:i:sa")); ?></time>
        </div>
    </div>
</div>

<?php
}
 ?>

 <?php
 function msg_sent($msg_id){
$m_id=$msg_id;
   ?>
   <div class="row msg_container base_sent">
       <div class="col-md-10 col-xs-10">
           <div class="messages msg_sent">

                 <?php
                     if(isset($_POST['send'])){
                         if(send_msg($_POST['message'])){
                           foreach (get_msg_by_id($m_id) as $message){
                             echo $message['message'];
                           }
                          // echo 'Message Sent.';
                         } else{
                           echo '';
                         }
                       }
                  ?>

               <time><?php echo (date("h:i:sa")); ?></time>
           </div>
       </div>
       <div class="col-md-2 col-xs-2 avatar">
           <img src="avatar1.png" class=" img-responsive ">
        <p align="center"><?php   foreach (get_msg() as $message){
            echo $message['sender']; }?> </p>
       </div>
   </div>

   <?php
 }
 ?>


<?php
function get_bot_message($message){
  $msg=$message;
  $fetch=mysql_query("SELECT ans_id,answer,k1,k2,k3,k4,k5 FROM answers WHERE k1='$msg'
   OR k2='$msg' OR k3='$msg' OR k4='$msg' OR k5='$msg'");

//$fetch=mysql_query("SELECT ans_id,answer,k1,k2,k3,k4,k5 FROM answers WHERE k1 LIKE '$msg' OR k5 LIKE '$msg' OR k2 LIKE '$msg'
//  OR k3 LIKE '$msg' OR k4 LIKE '$msg' ");


//$fetch=mysql_query("SELECT ans_id,answer,k1,k2,k3,k4,k5 FROM answers WHERE CHARINDEX('$msg',k1)>0 OR CHARINDEX('$msg',k2)>0
//   OR CHARINDEX('$msg',k3)>0  OR CHARINDEX('$msg',k4)>0 OR CHARINDEX('$msg',k5)>0 ");


//WHERE column1 LIKE 'word1'
//AND column1 LIKE 'word2'

//WHERE CHARINDEX('word1', Column1) > 0
//  AND CHARINDEX('word2', Column1) > 0

  $message=array();
  while (($row=mysql_fetch_assoc($fetch))!==false){
    $message[]=$row;

  }
    return $message;
}
?>



<?php
function get_msg(){
$fetch=mysql_query("SELECT msg_id,sender,message FROM chat ORDER BY msg_id DESC LIMIT 1");
$message=array();

while (($row=mysql_fetch_assoc($fetch))!==false){
  $message[]=$row;

}
  return $message;
}


function get_msg_by_id($id){
  $msg_id=$id;
  $fetch=mysql_query("SELECT msg_id,sender,message FROM chat WHERE msg_id='$msg_id'");
  $message=array();
  while (($row=mysql_fetch_assoc($fetch))!==false){
    $message[]=$row;

  }
    return $message;
  }




function send_msg_first($sender,$message){
    if(!empty($sender) && !empty($message)){
      $sender=mysql_real_escape_string($sender);
      $message=mysql_real_escape_string($message);
      $query="INSERT INTO chat(sender,message) VALUES ('{$sender}','{$message}')";

      if($run=mysql_query($query)){
        return true;
      }
  //    else{
    //    return false;
//      }
    else{
      return false;
    }
}
}

function send_msg($message){
    if(!empty($message)){


      foreach (get_msg() as $sender){
       $messenger= $sender['sender'];
      }
  //    $sender="Harke";
      $message=mysql_real_escape_string($message);
      $query="INSERT INTO chat(sender,message) VALUES ('{$messenger}','{$message}')";

      if($run=mysql_query($query)){
        return true;
      }
  //    else{
    //    return false;
//      }
    else{
      return false;
    }
}
}


 ?>




 <?php
 function chatbot_footer_both(){
  ?>

                  <div class="panel-footer">
                      <div class="input-group">
                        <form action="chatbot.php" method="post">



                          <input id="btn-input" type="text" type="submit" name="sender"
                          class="form-control input-sm chat_input" placeholder="Enter your name..." />

                          <input id="btn-input" type="text" type="submit" name="message"
                          class="form-control input-sm chat_input" placeholder="Start Conversation..." />
                            <input type="submit" name="send" value="Send Message "/>

                        </form>
                      </div>
                  </div>
  <?php
 } ?>


 <?php
 function chatbot_footer_one(){
  ?>

                  <div class="panel-footer">
                      <div class="input-group">
                        <form action="chatbot.php" method="post">

                          <input id="btn-input" type="text" type="submit" name="message"
                          class="form-control input-sm chat_input" placeholder="Write your message here..." />
                            <input type="submit" name="send" value="Send Message "/>

                        </form>
                      </div>
                  </div>
  <?php
 } ?>
