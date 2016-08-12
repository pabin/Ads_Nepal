<?php
 require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/session.php";
 require_once $_SERVER['DOCUMENT_ROOT']."/php"."/includes/global.php";
 require_once $_SERVER['DOCUMENT_ROOT']."/php"."/publisheraccount/publisherfunctions.php";

 include $site_root."publisheraccount/publisherheader.php";
?>



<div id="publishermain">
<div id="earnings">

 <div class="publisher_reports">
   <form action="" method="post">
    <select name="select1">
        <option value="1">Today's Report</option>
        <option value="2">Yesterday's Report</option>
        <option value="3">Last 7 Days Report</option>
        <option value="4">This Month's Report</option>
        <option value="5">Last Month's Report</option>
        <option value="6">All Time Report</option>

    </select>
    <input type="submit" name="submit" value="Go"/>
</form>
 </div>


<?php
if(isset($_POST['select1'])){
    $select1 = $_POST['select1'];
    switch ($select1) {
        case '1':
        performance_today();
            break;
        case '2':
          performance_yesterday();
            break;
            case '3':
              performance_last_7_days();
                  break;
                case '4':
                    performance_this_month();
                    break;
                    case '5':
                        performance_last_month();
                        break;
                        case '6':
                            performance_all_time();
                            break;
        default:
            # code...
            break;
    }
}
?>

</div>
</div>
<?php
include $site_root."publisheraccount/publisherfooter.php";
 ?>
