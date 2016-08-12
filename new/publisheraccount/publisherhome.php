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

<body onload="clickcount()">
<div id="earnings">
  <h4><b>Estimated earnings:</b></h4><br/>
  <ul class="nav navbar-nav">

    <li id="block">
  <?php
  home_todays();
  ?>
</li>

<li id="block">
  <?php
  home_yesterdays();
  ?>
</li>

<li id="block">
<?php
  home_last_7();
 ?>
</li>

</br></br></br>

<li id="block">
<h4><b>Finalized Earnings</b></h4>
<h5><b>Current Balance</b></br></h5>
  $0.00
</li>

<li id="block"></br>
<h5><b>Most Recent Payment</b></br></h5>
  $0.00
</li>

  </ul>
  </div>
