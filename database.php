<?php

    //connect to mysql
    $con = mysqli_connect("localhost", "root", "eshanmatz", "shoutit");
    $error = mysqli_connect_error();
    //Test connection
    if(mysqli_connect_errno()) {
        echo "Failed to connect to database: ".$error;
    }