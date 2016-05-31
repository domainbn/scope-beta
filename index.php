<?php
    $servername = "ec2-50-17-255-6.compute-1.amazonaws.com";
    $username = "pmhppusmuzyuqu";
    $password = "9JzIAdE8ZTJa8MCRTYYZ6_XXVC";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";


    echo 'Website works';
//    echo $conn;
//    echo $servername;
    
?>