<?php

function isValidUserToAdd ($username, $connection){
        $qry = "SELECT id,username from site_members";
        $result = mysqli_query($connection,$qry) or
        die('Connection broken with database signup[isValidUserToAdd]');

        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            if(strcmp($row['Username'],$username) == 0){
                return false;
            }
        }
        return true;
    }


 
?>
