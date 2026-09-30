<?php
    $db_local = mysqli_connect("localhost","root","");
    if(!$db_local)
        {
            die("could not connect".mysqli_connect_error());
        }

    $db_select = mysqli_select_db($db_local,"degree");
    if(!$db_select){
        die("could not connect".mysqli_error($db_local));
    }
    echo"<h1>Connected to Database successfully</h1>";
?>