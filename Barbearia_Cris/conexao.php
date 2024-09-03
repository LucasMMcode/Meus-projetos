<?php 
    $servername = "localhost";
    $user = "root";
    //$pass = "";
    $pass = "Lucas_01lo";
    $db_name = "bd_barbearia";  
    $conn = new mysqli($servername, $user, $pass, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }else{
    echo "";}
?>