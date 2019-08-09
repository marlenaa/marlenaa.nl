<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'marlenaa_Mar');
    define('DB_PASSWORD', 'Doosen17!');
    define('DB_NAME', 'marlenaa_login');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>