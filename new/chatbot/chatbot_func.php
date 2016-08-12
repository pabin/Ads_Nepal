

<?php
function msg_sent($id){
?>

<div class="row msg_container base_sent">
    <div class="col-xs-10 col-md-10">
        <div class="messages msg_sent">
            <p>

              <?php

             foreach (chatbot_keywords_fetch() as $stat){


               echo $stat[keywords];

              $message=$_POST['message'];              
                echo $message;
}


              ?>
             </p>
            <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
        </div>
    </div>
    <div class="col-md-2 col-xs-2 avatar">
        <img src="avatar1.png" class=" img-responsive ">
    </div>
</div>
<?php
}
 ?>



  <?php
  function msg_received(){
  ?>
  <div class="row msg_container base_receive">
      <div class="col-md-2 col-xs-2 avatar">
          <img src="avatar2.png" class=" img-responsive ">
      </div>
      <div class="col-md-10 col-xs-10">
          <div class="messages msg_receive">

      <p>Hi, How can i Help you today?</p>
              <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
          </div>
      </div>
  </div>
<?php
}
 ?>


 <?php
function chatbot_footer($message){
  ?>
  <div class="panel-footer">

      <form method="post" name="login" action="chatbot.php">

      <div class="input-group">
          <input id="btn-input" name=message type="text"
          class="form-control input-sm chat_input" placeholder="Write your message here...  "
          autocomplete=""/>
          <span class="input-group-btn">
          <button class="btn btn-primary btn-sm" id="btn-chat">Send</button></span>
      </div>
      </form>

 <?php

 $message=$_POST['message'];
 chatbot_keywords_record($message);
 ?>
  </div>
  <?php
  return $message;
} ?>
