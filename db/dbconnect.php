<?php
function getDataFromDB($sql){
    $newdb = mysqli_connect('localhost','root','','new_project');
    $result = mysqli_query($newdb,$sql) or die(mysql_error($newdb));
    $container = array();
    
    while($a = mysqli_fetch_assoc($result)){
        $container[] = $a;
    }
    return $container;
}


?>