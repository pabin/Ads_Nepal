<?php
 require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/session.php";
 require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";
 require_once $_SERVER['DOCUMENT_ROOT']."/php"."/js/javascript.js";
 require_once $_SERVER['DOCUMENT_ROOT']."/php"."/publisheraccount/publisherfunctions.php";
 include $site_root."publisheraccount/publisherheader.php";
?>
<?php
//foreach (fetch_todays() as $to_stat){
//  $todays=$to_stat[clicks]*1.17;
//  $c_date=$stat[date];
//    $cur_date=date("Y-m-d");
  //  $yes_date=date('d.m.Y',strtotime("-1 days"));
  //  $last_seven_days=date('d.m.Y',strtotime("-7 days"));
?>


<div class="container" style="padding-left:120px;">
                                <div class="row">
                                  <h4><b>Estimated earnings</b></h4>

                          <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
                              <?php
                             home_todays();
                             ?>
                        </div>

                    <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
                      <?php
                        home_yesterdays();
                        ?>
                  </div>

                    <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
                        <?php
                            home_last_7();
                           ?>
                    </div>

                    <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
                      Last 28 Days
                       <?php
                    //   home_last_28_days();
                        ?>
                    </div>

          </div>
  </div>


</br></br></br>

<div class="container" style="padding-left:120px;">

  <div class="row">
    <h4><b>Finalized earnings</b></h4>

              <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
                  <h5><b>Current Balance</b></h5>
                    <h2>$0.00 </h2>


        </div>
        <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
          <h5><b>Most Recent Payment</b></h5>
            <h2>$0.00 </h2>
        </div>

    </div>
</div>


</br></br></br>



<div class="container" style="padding-left:120px;">

<div class="row">

            <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
              <h5 id='footer-header'> Android App </h3>

                <p><a href="<?php echo $domain_name; ?>">
                  <img src="<?php echo $domain_name.'/images/'; ?>/android.png"></a></p>

      </div>
      <div class="col-sm-3" style="padding: 0px 0px 0px 0px">
        <h5 id='footer-header'>iOS App </h3>
        <p><a href="<?php echo $domain_name; ?>">
          <img src="<?php echo $domain_name.'/images/'; ?>/ios.png"></a></p>

      </div>

  </div>
</div>

</br></br>






</br>

<?php
include $site_root."publisheraccount/publisherfooter.php";

 ?>
