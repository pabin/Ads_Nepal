<?php
function performance_today(){
?>
<?php $cur_date=date("Y-m-d");  ?>

  <h6>  Performace Report Of: <?php echo $cur_date ?> </h6>
    <table border='1' style="width:800px">
    <tr>
      <th> Total Clicks </th>
      <th> CPC </th>
      <th> Total Earnings </th>
      <th> Total Page Views </th>

    </tr>
    <?php
    foreach (fetch_todays() as $to_stat){
      $todays=$to_stat[t_clicks]*1.13;
        $ad_id=$to_stat[ad_id];
      ?>
    <tr>
      <td> <?php echo $to_stat[t_clicks]; ?>      </td>
      <td> <?php echo "$1.13"; ?>  </td>
      <td> $<?php echo $todays ?>      </td>
      <td> <?php echo "1522" ?>      </td>
    </tr>
    <?php
  }
  ?>
  </table>
  <?php
}
 ?>


 <?php
 function performance_yesterday(){
 ?>
<?php  $yes_date=date('Y-m-d',strtotime("-1 days"));  ?>
 <h6>  Performace Report Of: <?php echo $yes_date ?> </h6>

     <table border='1' style="width:800px">
     <tr>
       <th> Total Clicks </th>
       <th> CPC </th>
       <th> Total Earnings </th>
       <th> Total Page Views </th>

     </tr>
     <?php
     foreach (fetch_yesterdays() as $yes_stat){
       $yesterdays=$yes_stat[t_clicks]*1.13;
         $ad_id=$yes_stat[ad_id];
       ?>
     <tr>
       <td> <?php echo $yes_stat[t_clicks]; ?>      </td>
       <td> <?php echo "$1.13"; ?>  </td>
       <td> $<?php echo $yesterdays ?>      </td>
       <td> <?php echo "1202" ?>      </td>
     </tr>
     <?php
   }
   ?>
   </table>
   <?php
 }
  ?>



  <?php
  function performance_last_7_days(){
  ?>
  <?php
$previous_week = strtotime("-1 week +1 day");
$start_week = strtotime("last sunday midnight",$previous_week);
$end_week = strtotime("next saturday",$start_week);
$start_week = date("Y-m-d",$start_week);
$end_week = date("Y-m-d",$end_week);
  ?>
  <h6>  Performace Report From: <?php echo $start_week.' To '.$end_week ; ?> </h6>

      <table border='1' style="width:800px">
      <tr>
        <th> Total Clicks </th>
        <th> CPC </th>
        <th> Total Earnings </th>
        <th> Total Page Views </th>

      </tr>
      <?php
      foreach (fetch_last_7_days() as $last_7_stat){
        $last_7=$last_7_stat[total_clicks]*1.13;
        $ad_id=$last_7_stat[ad_id];
          ?>
      <tr>
        <td> <?php echo $last_7_stat[total_clicks]; ?>      </td>
        <td> <?php echo "$1.13"; ?>  </td>
        <td> $<?php echo $last_7 ?>      </td>
        <td> <?php echo "5498" ?>      </td>
      </tr>
      <?php
    }
    ?>
    </table>
    <?php
  }
   ?>



   <?php
   function performance_this_month(){
   ?>
       <table border='1' style="width:800px">
       <tr>
         <th> Total Clicks </th>
         <th> CPC </th>
         <th> Total Earnings </th>
         <th> Total Page Views </th>

       </tr>
       <?php
       foreach (fetch_this_month() as $to_stat){
         $this_month=$to_stat[t_clicks]*1.13;
           $ad_id=$to_stat[ad_id];
         ?>
       <tr>
         <td> <?php echo $to_stat[t_clicks]; ?>      </td>
         <td> <?php echo "$1.13"; ?>  </td>
         <td> $<?php echo $this_month ?>      </td>
         <td> <?php echo "1522" ?>      </td>
       </tr>
       <?php
     }
     ?>
     </table>
     <?php
   }
    ?>



    <?php
    function performance_last_month(){
    ?>
        <table border='1' style="width:800px">
        <tr>
          <th> Total Clicks </th>
          <th> CPC </th>
          <th> Total Earnings </th>
          <th> Total Page Views </th>

        </tr>
        <?php
        foreach (fetch_last_month() as $to_stat){
          $todays=$to_stat[t_clicks]*1.13;
            $ad_id=$to_stat[ad_id];
          ?>
        <tr>
          <td> <?php echo $to_stat[t_clicks]; ?>      </td>
          <td> <?php echo "$1.13"; ?>  </td>
          <td> $<?php echo $todays ?>      </td>
          <td> <?php echo "1522" ?>      </td>
        </tr>
        <?php
      }
      ?>
      </table>
      <?php
    }
     ?>



     <?php
     function performance_all_time(){
     ?>
         <table border='1' style="width:800px">
         <tr>
           <th> Total Clicks </th>
           <th> CPC </th>
           <th> Total Earnings </th>
           <th> Total Page Views </th>

         </tr>
         <?php
         foreach (fetch_all_time() as $to_stat){
           $todays=$to_stat[t_clicks]*1.13;
             $ad_id=$to_stat[ad_id];
           ?>
         <tr>
           <td> <?php echo $to_stat[t_clicks]; ?>      </td>
           <td> <?php echo "$1.13"; ?>  </td>
           <td> $<?php echo $todays ?>      </td>
           <td> <?php echo "1522" ?>      </td>
         </tr>
         <?php
       }
       ?>
       </table>
       <?php
     }
      ?>


<?php
function home_todays(){
?>
<?php
foreach (fetch_todays() as $to_stat){
  $todays=$to_stat[t_clicks]*1.13;
  ?>

Today so far </P>
$<?php echo $todays; ?>

<?php
}
?>

<?php
}
 ?>

 <?php
function home_yesterdays(){
  ?>
  <?php
 foreach (fetch_yesterdays() as $yes_stat){
   $yesterdays=$yes_stat[t_clicks]*1.13;
   ?>
   Yesterday</P>

 $<?php echo $yesterdays; ?>

 <?php
 }
 ?>
<?php
}
  ?>


  <?php
  function home_last_7(){
?>
<?php
foreach (fetch_last_7_days() as $last_7_stat){
  $last_7=$last_7_stat[total_clicks]*1.13;
  ?>
</li>
Last 7 Days </P>
$<?php echo $last_7; ?>

<?php
}
 ?>
<?php
  }
  ?>
