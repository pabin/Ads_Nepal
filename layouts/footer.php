
<footer class="site-footer">

        <div class="container">


          <div class="row">
                          <div class="col-sm-3">

                                <div class="col-sm-3" style="padding: 0px 0px 0px 60px">
                                  <h5 id='footer-header'> DOWNLOAD </h3>
                                    <p><a href="<?php echo $domain_name; ?>">
                                      <img src="<?php echo $domain_name.'/images/'; ?>/android.png"></a></p>

                                    <p><a href="<?php echo $domain_name; ?>">
                                      <img src="<?php echo $domain_name.'/images/'; ?>/ios.png"></a></p>


                                </div>
                          </div>
                          <div class="col-sm-3" style="padding: 0px 0px 0px 100px">
                              <h5 id='footer-header'> NEWS </h3>
                              <p>Contact</p>
                              <p>FAQ</p>
                              <p>Privacy Policy</p>
                          </div>

                          <div class="col-sm-3" style="padding: 0px 0px 0 70px">
                              <h5 id='footer-header' > ABOUT </h3>
                              <p>About us</p>
                              <p>How it Works</p>
                              <p>Security</p>
                          </div>

                          <div class="col-sm-3" style="padding: 0 0 0 70px">
                              <h5 id='footer-header'>PRESS </h3>
                              <p>Press Release</p>
                              <p>Awards</p>
                              <p>Testimonials</p>

                          </div>
                      </div>
                    </br></br>

                      <p class="text-center" >
                              &copy; Copyright <?php echo date("Y",time());?>
                                Ads Nepal Pvt Ltd.   All rights reserved.   </br>
                                Home | About | Publishers | Advertisers | Privacy | Terms & Conditions | FAQ | Contact

                      </p>


        </div>
</footer>

</body>
</html>


<?php
//5. Close connection
if (isset($connection)){
mysql_close($connection);
}
 ?>
