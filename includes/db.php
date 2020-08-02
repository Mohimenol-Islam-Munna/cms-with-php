<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "php_cms";


    // db connection 

    $conn = mysqli_connect($server, $user, $password, $database);

    if(!$conn)
    {
        echo "Database connection faild";
    }

?>