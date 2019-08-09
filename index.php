<html>
<head>
    <title>Home</title>
</head>
<body>
<div id="content>">
    <div id="header">
        <?php
        session_start(); //starts the session
        if (isset($_SESSION["loggedin"])) {
            include "header_logged_in.php";
        } else {
            include "header.php";
        }
        ?>
    </div>
    <div id="body">
        <div id="content>">
            <div id="innercontent">
                <h1>Dit is h1.</h1>
                <h2>Dit is h2.</h2>
                <h3>Dit is h3.</h3>
                <h4>Dit is h4.</h4>
                <h5>Dit is h5.</h5>
                <h6>Dit is h6.</h6>
                <p>Dit is een paragraph.</p>
                <a href="#">Dit is een linkje.</a>
            </div>
        </div>
    </div>
    <div id="footer">
        <?php
        include 'footer.php';
        ?>
    </div>
</div>
</body>
</html>