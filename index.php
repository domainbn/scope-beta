<?php

    function dbConn() {
        $scp_server = "ec2-50-17-255-6.compute-1.amazonaws.com";
        $scp_username = "pmhppusmuzyuqu";
        $scp_password = "9JzIAdE8ZTJa8MCRTYYZ6_XXVC";
        $scp_database = "df0h35apt2cc0q";
        $scp_port = "5432";

        $host = "host=$scp_server";
        $port = "port=$scp_port";
        $dbname = "dbname=$scp_database";
        $credentials = "user=$scp_username password=$scp_password";

        $db = pg_connect( "$host $port $dbname $credentials"  );

        return $db;
    }
    //Try Connection
    
    $db = dbConn();

    if (!$db) {
        echo "Error : Unable to open database\n";
    } else {
        echo "Connection success";
    }

    //Additionals
//    $sql =<<<EOF
//      SELECT * from SCP_USER;
//EOF;

    $sql = "SELECT * from SCP_USER";

   $ret = pg_query($db, $sql);
   if (!$ret) {
      echo pg_last_error($db);
      exit;
   } 

   while($row = pg_fetch_row($ret)){
      echo "ID = ". $row[0] . "<br>";
      echo "USERNAME = ". $row[1] ."<br>";
      echo "EMAIL = ". $row[2] ."";
   }
   echo "Operation done successfully\n";
   pg_close($db);
    
?>