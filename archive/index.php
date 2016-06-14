<?php
//
//    function dbConn() {
//        $scp_server = "ec2-50-17-255-6.compute-1.amazonaws.com";
//        $scp_username = "pmhppusmuzyuqu";
//        $scp_password = "9JzIAdE8ZTJa8MCRTYYZ6_XXVC";
//        $scp_database = "df0h35apt2cc0q";
//        $scp_port = "5432";
//
//        $host = "host=$scp_server";
//        $port = "port=$scp_port";
//        $dbname = "dbname=$scp_database";
//        $credentials = "user=$scp_username password=$scp_password";
//
//        $db = pg_connect( "$host $port $dbname $credentials"  );
//
//        return $db;
//    }
//    //Try Connection
//    function Conn() {
//    $db = dbConn();
//
//        if (!$db) {
//            echo "Error : Unable to open database\n";
//        } else {
//            echo "<p>Connection success</p>";        
//        }
//        return $db;
//    }
//
//    $sql = "SELECT * from SCP_USER";
//
//    $ret = pg_query($db, $sql);
//    if (!$ret) {
//        echo pg_last_error($db);
//        exit;
//    } 
//
//    echo "<table>";
//    echo "<th>
//        <td>1</td>
//        <td>2</td>
//        <td>3</td>
//    </th>";
//    while ($row = pg_fetch_row($ret)) {
//        echo "<tr>
//            <td>. $row[0] .</td>
//            <td>. $row[1] .</td>
//            <td>. $row[2] .</td>
//        </tr>";
//    }
//
//    echo "</table>";
//
//  
//   pg_close($db);
//    

 include_once("placeholder.html");
?>