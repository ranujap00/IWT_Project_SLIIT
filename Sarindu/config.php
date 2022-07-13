<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "final";

    $con = new mysqli($serverName, $userName, $password, $dbName);

    //check the connection
    if($con->connect_error)
        echo "Connection Failed";
    else
        echo "Connection Successfull";
?>