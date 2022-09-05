<?php 

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "travelbd";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    if (!$conn) {
        
        die("Connection Failed : ". mysqli_connect_error());

    }
    else{
        //echo "<script>alert('Connected Successful')</script>";
    }
    

?>