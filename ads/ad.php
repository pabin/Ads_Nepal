<?php
require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";
$selected_page = 'advertiser_page';

$ad_id=$_GET['ad_id'];

clickcount($ad_id);

 switch ($ad_id) {
     case "101":
     header("Location:https://www.ncell.com.np/");
         break;
     case "102":
     header("Location:http://exam.ioe.edu.np");
         break;
     case "103":
     header("Location:https://www.ntc.net.np/");
         break;
     default:
     header("Location:http://exam.ioe.edu.np");
 }
 ?>
