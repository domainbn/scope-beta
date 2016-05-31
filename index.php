<?php
//    $host = "ec2-50-17-255-6.compute-1.amazonaws.com";
//    $username = "pmhppusmuzyuqu";
//    $password = "9JzIAdE8ZTJa8MCRTYYZ6_XXVC";
//    $database = "df0h35apt2cc0q";
//
//    $con = mysqli_connect($servername,$username,$password,$database);
//
//// Check connection
//if (mysqli_connect_errno())
//  {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//  }

    $host        = "host=ec2-50-17-255-6.compute-1.amazonaws.com";
    $port        = "port=5432";
   $dbname      = "dbname=df0h35apt2cc0q";
   $credentials = "user=pmhppusmuzyuqu password=9JzIAdE8ZTJa8MCRTYYZ6_XXVC";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

    echo 'test';
?>