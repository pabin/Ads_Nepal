<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";

session_start();
?>
<?php
include $site_root."layouts/header.php";

?>



<div class="bg-image2">



        <body role="login">
          <div class="login-form" >
        <div class="container" >
        <div class="row">
          <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
            <div class="panel panel-default">

              <div class="panel-body">



                <form role="form" action="advertiserlogin.php" method="POST" name="login">
                  <fieldset>
                    <div class="row">
                      <div class="center-block"> <img class="profile-img" src="" class="img-responsive" alt=""> </div>
                      <h5 align="center"><b> <font color="#FF4500">Login to Your Advertiser Account: </font> </b></h5>

                      <hr>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                        <div class="form-group">
                        <label>Username:</label>
                          <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                            <input class="form-control" placeholder="Username"
                                      name="username" type="text" required="required" id="userid" autofocus>
                          </div>
                        </div>
                        <div class="form-group">



                         <label>Password:</label>
                          <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
                            <input class="form-control" placeholder="Password"
                                        name="password" type="password" id="passid" required="required" value="">
                          </div>
                        </div>

                        <div class="form-group">
                         <label>
                          <input type="checkbox">
                          Keep me Logged in </label> <input type="submit" class="btn btn-danger"
                                      name="submit" id="submit"  value="Login" >

                        </div>

                      </div>
                    </div>

                  </fieldset>
                </form>

              <h5 align="center"><b>No Advertiser Account?   </b><h5>

                <form method="post" name="signup" action="advertisersignup.php">
                  <input type="submit" class="btn btn-danger  btn-block"
                              name="submit" id="submit"  value="SIGN UP" >
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        </body>




</div>



<div id="chat-bar" class="col-sm-12">
  <a href="<?php echo $domain_name.'/chatbot/signin.php'; ?>">
    <img src="<?php echo $domain_name.'/images/'; ?>/chat_bar.png"></a>
</div>


<?php
         include $site_root."layouts/footer.php";
?>
