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
    
?>