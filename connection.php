<?php 
    $host = "localhost";
    $username = "id21181537_root";
    $password = "Alture_hosting1";
    $db_name = "id21181537_alture";  
    $conn = new mysqli($host, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    
    ?>