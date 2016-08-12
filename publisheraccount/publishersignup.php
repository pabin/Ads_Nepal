<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";

session_start();
?>
<?php
include $site_root."layouts/header.php";

?>

      <div class=login-form style="padding-left:0px" >

    <div class="container" style="padding-top:70px" >
    <div class="row">
      <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
        <div class="panel panel-default">

          <div class="panel-body">



            <form role="form" action="publisherlogin.php" method="POST" name="login">
              <fieldset>
                <div class="row">
                  <div class="center-block"> <img class="profile-img" src="" class="img-responsive" alt=""> </div>
                  <h5 align="center"><b>Fill Up following Details: </b></h5>

                  <hr>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                    <div class="form-group">
                    <label>Payee Name</label>
                      <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                        <input class="form-control"
                                  name="username" type="text" required="required" id="userid" autofocus>
                      </div>
                    </div>

                    <div class="form-group">
                    <label>Mobile Number</label>
                      <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                        <input class="form-control"
                                  name="username" type="text" required="required" id="userid" autofocus>
                      </div>
                    </div>

                    <div class="form-group">
                    <label>Webiste URL</label>
                      <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                        <input class="form-control"
                                  name="username" type="text" required="required" id="userid" autofocus>
                      </div>
                    </div>


                    <div class="form-group">
                    <label>Address Line 1</label>
                      <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                        <input class="form-control"
                                  name="username" type="text" required="required" id="userid" autofocus>
                      </div>
                    </div>

                    <div class="form-group">
                    <label>Address Line 2</label>
                      <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                        <input class="form-control"
                                  name="username" type="text" required="required" id="userid" autofocus>
                      </div>
                    </div>

                    <div class="form-group">
                    <label>Email </label>
                      <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                        <input class="form-control"
                                  name="username" type="text" required="required" id="userid" autofocus>
                      </div>
                    </div>

                    <div class="form-group">
                     <label>Password:</label>
                      <div class="input-group"> <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
                        <input class="form-control"
                                    name="password" type="password" id="passid" required="required" value="">
                      </div>
                    </div>




                  </div>
                </div>

              </fieldset>
            </form>

            <h5 align="center"><b>Submit Application</b><h5>
              <form method="post" name="signup" action="message.php">
                <input type="submit" class="btn btn-success  btn-block"
                            name="submit" id="submit"  value="SIGN UP" >
              </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>





</div>

<div id="chat-bar" class="col-sm-12">
  <a href="<?php echo $domain_name.'/chatbot/signin.php'; ?>">
    <img src="<?php echo $domain_name.'/images/'; ?>/chat_bar.png"></a>
</div>

<?php
         include $site_root."layouts/footer.php";
?>
