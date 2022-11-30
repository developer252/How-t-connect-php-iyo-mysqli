<?php
    $db = mysqli_connect('localhost','root','','somali_tutorial');
    if($db){
        echo "Database seccess";
    }else{
        echo "Database Error";
    }

?>