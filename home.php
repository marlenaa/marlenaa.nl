<?php
    session_start(); //starts the session
    if($_SESSION["loggedin"]){ //checks if user is logged in
    }
    else{
        header("location:index.php"); // redirects if user is not logged in
    }
    $user = $_SESSION["username"] //assigns user value
?>
<head>
    <title>home</title>
</head>
    <body>
        <div id="header">
            <?php
            if(isset($_SESSION["loggedin"])){
                include "header_logged_in.php";
            }
            else{
                include "header.php";
            }
            ?>
        </div>
        <div id="body">
            <div id="content">
                <div id="innercontent">
                    <h2>Alleen bij ingelogd: </h2>
                    <p>Hoi,  <?php Print "$user"?>!</p>
                </div>
            </div>
        </div>
        <div id="footer">
            <?php
            include 'footer.php';
            ?>
        </div>
    </body>
</html>