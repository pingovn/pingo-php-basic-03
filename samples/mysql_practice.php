<?php

    //
    $server_name = "localhost";
    $uid = "root";
    $pass = "bkit4u_";
    $dbname = "PingoDB08";
    //mysql_connect($server_name, $uid, $pass) or die(mysql_error());
    $conn = mysqli_connect($server_name, $uid, $pass);
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_select_db($conn, $dbname) or die(mysqli_error($conn));
    

    $strQuery = "SELECT firstname, lastname FROM users";

    $result = mysqli_query($conn, $strQuery) or die(mysqli_error($conn));   
    
    if ($result != null) {
        while($row=mysqli_fetch_array($result))
        {              
            echo "user_name:" . $row['firstname']." ".$row['lastname'];
				//."\t\t; email:".$row['email'];
            echo "<br />";              
        }
    }
    else        
    {
        echo "KHONG CO DU LIEU TRONG BANG USERS";
    }
    mysqli_free_result($result);    
    mysqli_close($conn);
?>
