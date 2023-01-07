<?php
    $servername="localhost";
    $username="root";
    $Password="";
    $dbname="querybuilder";

    $conn=mysqli_connect($servername,$username,$Password,$dbname);
    if(!$conn){
        die(mysqli_error($conn));
    }
?>