
<head>
    <title>Bereken je BMI</title>

</head>
<script>
    function calculateBMI() {
        var wtStr =document.form.weight.value;
        if (!wtStr)
            wtStr = '0';
        var htStr = document.form.height.value;
        if (!htStr)
            htStr = '1';
        var heightcm = (htStr / 100) * (htStr /100);
        var weight = parseFloat(wtStr);
        document.form.BodyMassIndex.value = weight / heightcm;
    }
</script>
<body>
<div id="header">
    <?php
    if (isset($_SESSION["loggedin"])) {
        include "header_logged_in.php";
    } else {
        include "header.php";
    }
    ?>
</div>
<div id="body">
    <div id="content">
        <div id="berekenbmi">
            <form  name="form" id="form">
                <input type="Text" name="height" size="4" onkeyup="calculateBMI()" placeholder="Height">
                <input type="Text" name="weight" size="4" onkeyup="calculateBMI()" placeholder="Weight">
                <input type="Text" name="BodyMassIndex" id="BodyMassIndex" size="4" placeholder="BMI">
            </form>
        </div>
    </div>
</div>
<div id="footer">
    <?php
    include 'footer.php';
    ?>
</div>
</body>