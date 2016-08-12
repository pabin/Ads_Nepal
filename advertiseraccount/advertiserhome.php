<?php
 require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/session.php";
 require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";
 require_once $_SERVER['DOCUMENT_ROOT']."/php"."/js/javascript.js";
 include $site_root."advertiseraccount/advertiserheader.php";

?>




<div class="container" style="padding-left:120px;">
                                <div class="row">
                                  <h4><b>Budget Used</b></h4>

                          <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
                            Today
                            <h2>$19.80 </h2> <?php
                          //   home_todays();
                             ?>
                        </div>

                    <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
                      Yesterday
                      <h2>$23.80 </h2><?php
                      //  home_yesterdays();
                        ?>
                  </div>
                    <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
                    Last 7 Days<?php
                        //    home_last_7();
                           ?>
                    </div>

                    <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
                    This Month <?php
                    //   home_last_28_days();
                        ?>
                    </div>

          </div>
  </div>


</br></br>

<div class="container" style="padding-left:120px;">

  <div class="row">
    <h4><b>Total Ads Click</b></h4>

              <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
                  <h5>Today</h5>
                    <h2>23 </h2>


        </div>
        <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
          <h5>Yesterday</h5>
            <h2>41 </h2>
        </div>

        <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
          <h5>Last 7 Days<h5>
            <h2>26 </h2>
        </div>

        <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
          <h5>This Month</h5>
            <h2>44 </h2>
        </div>

    </div>
</div>


</br></br>

<div class="container" style="padding-left:120px;">

<div class="row">

            <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
              <h5 id='footer-header'> Remaining Budget</h3>
                <h2>$659.80 </h2>


      </div>


  </div>
</div>

<br/></br>

<div class="container" style="padding-left:120px;">

<div class="row">

            <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
              <h5 id='footer-header'> Download Android App </h3>

                <p><a href="<?php echo $domain_name; ?>">
                  <img src="<?php echo $domain_name.'/images/'; ?>/android.png"></a></p>

      </div>
      <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
        <h5 id='footer-header'>Download iOS App </h3>
        <p><a href="<?php echo $domain_name; ?>">
          <img src="<?php echo $domain_name.'/images/'; ?>/ios.png"></a></p>

      </div>

  </div>
</div>


</br>



<?php
include $site_root."advertiseraccount/advertiserfooter.php";
 ?>
