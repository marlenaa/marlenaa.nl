<head>
    <title>Berekeningen</title>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
</head>
<style>
    div.case.active {
    }
    div.case{
    }
    div.case.not_active{
        display: none;
    }
    .body_type_man img{
        width: 80px;
        height: auto;
    }
    .body_type_man label{
        float: left;
    }
    .body_type_man{
        display: none;
    }
    .body_type_vrouw img{
        width: 80px;
        height: auto;
    }
    .body_type_vrouw label{
        float: left;
    }
    .body_type_vrouw {
        display: none;
    }
    .selected{
        display: block;
    }
    button.next{
        background-color: #40bd37;
        color: #fff;
        font-family: Roboto,sans-serif;
        font-weight: 700;
        font-style: normal;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        padding: 12px 20px;
        font-size: 0.76471em;
    }
    #button
    button.prev{
        background-color: #40bd37;
        color: #fff;
        font-family: Roboto,sans-serif;
        font-weight: 700;
        font-style: normal;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        padding: 12px 20px;
        font-size: 0.76471em;
    }
</style>
<?php

$lengte = $_POST["lengte"];
$gewicht = $_POST["gewicht"];
$leeftijd = $_POST['leeftijd'];
$beroep = $_POST["beroep"];
$beweging = $_POST["beweging"];

$lengtemacht = pow($lengte, 1.1);

$bmi = $gewicht / $lengtemacht;
$afgerondbmi = round($bmi, 1);

$_SESSION["bmi"] = $afgerondbmi;
$_SESSION["gewicht"] = $gewicht;
$_SESSION["lengte"] = $lengte;


$selected_val = $_POST['Beweging'];


$geslacht = $_POST['gender'];

?>
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
            <?php
            if (!isset($_POST['submit'])) {
                ?>
                <form action="end.php" method="POST" name="caloriebehoefte">
                    <div class="case active">
                        <h3>Door onze gemakkelijke GoodFoodz rekentool weet jij straks precies wat je nodig hebt om jouw ideale shape te bemachtigen!</h3>
                        <button type="button" class="next" id="">Start!</button>
                    </div>

                    <div class="case not_active">
                        <p>Gegevens:</p>
                        <input type="text" name="naam" placeholder="Naam">
                        <input name="leeftijd" type="number" id="leeftijd" value="" size="5" maxlength="3" placeholder="Leeftijd"  >
                        <input name="lengte" type="text" id="lengte" value="" size="5" maxlength="3"
                               placeholder="Lengte in cm"  >
                        <input name="gewicht" type="text" id="gewicht" value="" size="5" maxlength="3"
                               placeholder="Gewicht in kg"  >
                        <div id="button">
                        <button type="button" class="prev" id="">Terug</button>
                        <button type="button" class="next" id="">Volgende</button>
                        </div>
                    </div>
                    <div class="gender case not_active">
                        <input type="radio" name="gender" value="man" id="man" onclick="check()" > Man<br>
                        <input type="radio" name="gender" value="vrouw" id="vrouw" required> Vrouw<br>
                        <div class="body_type_man">
                            <label>
                                <input type="radio" name="type" value="type_a_man" class="type" >
                                <img src="/img/ecto_man.png">
                            </label>
                            <label>
                                <input type="radio" name="type" value="type_b_man" class="type" >
                                <img src="/img/meso_man.png">
                            </label>
                            <label>
                                <input type="radio" name="type" value="type_c_man" class="type" >
                                <img src="/img/endo_man.png">
                            </label>
                        </div>
                        <div class="body_type_vrouw">
                            <label>
                                <input type="radio" name="type" value="type_a_vrouw" class="type" >
                                <img src="/img/ecto_vrouw.png">
                            </label>
                            <label>
                                <input type="radio" name="type" value="type_b_vrouw" class="type" >
                                <img src="/img/meso_vrouw.png">
                            </label>
                            <label>
                                <input type="radio" name="type" value="type_c_vrouw" class="type" >
                                <img src="/img/endo_vrouw.png">
                            </label>
                        </div>
                        <div id="button">
                            <button type="button" class="prev" id="">Terug</button>
                            <button type="button" class="next" id="">Volgende</button>
                        </div>
                    </div>
                    <div class="case not_active">
                        <p>Hoeveel beweeg je op een dag:</p>
                        <select name="beweging"  >
                            <option value="" disabled selected>Kies een optie</option>
                            <option value="0">Niet</option>
                            <option value="0.2">Weinig</option>
                            <option value="0.3">1-3 keer</option>
                            <option value="0.5">3-5 keer</option>
                            <option value="0.7">3-5 keer</option>
                            <option value="0.8">Meer</option>
                        </select>
                        <p>Wat voor beroep doe je?</p>
                        <select name="beroep"  >
                            <option value="" disabled selected>Kies een optie</option>
                            <option value="1" >Non-Actief</option>
                            <option value="1.2">Licht-Actief</option>
                            <option value="1.4">Middel-Actief</option>
                            <option value="1.6">Zeer_actief</option
                        </select>
                        <div id="button">
                        <button type="button" class="prev" id="">Prev</button>
                        <button type="button" class="next" id="">Next</button>
                        </div>
                        <input type="submit" name="submit" value="Bekijken"/>

                    </div>

                    <div class="case not_active">

                    </div>
                </form>
                </h3>
            <?php } else {

                if($geslacht == 'man'){
                    echo "man: ";
                    echo "gewicht: " . $gewicht, " lengte: " . $lengte, " leeftijd: " . $leeftijd . " ";

                    //berekening voor een man

                    $basaalman = (88.4 + 13.4 * $gewicht) + (4.8 * $lengte) - (5.68 * $leeftijd);
                    echo " Berekening Basaal Metabolisme Man: " . $behoefteman;
                    //echo "Dit is afgerond" . round($basaalman, 0 );
                    echo " Beroep= " . $beroep;
                    echo " Beweging= " . $beweging;
                    $beroepbewegingman = $beweging + $beroep;
                    echo " Beweging + Beroep= " . $beroepbewegingman;
                    $behoefteman = $beroepbewegingman * $basaalman;
                    echo " x BMR= " . $behoefteman ;
                    $procentman =  $behoefteman / 100 * 10 ;
                    echo " procent: " . $procentman;
                    $eindbehoefteman = $behoefteman - $procentman;
                    echo " eindeboefte voor dat het afgerond is: " . $eindbehoefteman;
                    echo " eindebehoefte man: " . round($eindbehoefteman, 0);


                }
                if($geslacht == 'vrouw'){
                    echo "vrouw: ";
                    echo "gewicht: " . $gewicht, " lengte: " . $lengte, " leeftijd: " . $leeftijd . " ";

                    //berekening voor een vrouw

                    $basaalvrouw = (447.6 + 9.25 * $gewicht) + (3.1 * $lengte) - (4.33 * $leeftijd);
                    echo "Berekening Basaal Metabolisme vrouw: " . round($basaalvrouw, 0);
                    echo " Beroep= " . $beroep;
                    echo " Beweging= " . $beweging;
                    $beroepbewegingvrouw = $beweging + $beroep;
                    echo " Beweging + Beroep= " . $beroepbewegingvrouw;
                    $behoeftevrouw = $beroepbewegingvrouw * $basaalvrouw;
                    echo " x BMR= " . round($behoeftevrouw, 0);



                }


            }
            ?>
        </div>
        <div>

        </div>
    </div>

    <script>
        $(function() {
            var nextBtn = $(".next"),
                prevBtn = $(".prev");

            nextBtn.on('click', function(e) {
                var active = $(".active");
                var next = active.next('.case');
                if (next.length) {
                    active.removeClass('active');
                    active.addClass('not_active');
                    next.addClass('active');
                    next.removeClass('not_active');
                }
            });

            prevBtn.on('click', function(e) {
                var active = $(".active");
                var prev = active.prev('.case');
                if (prev.length) {
                    active.removeClass('active');
                    active.addClass('not_active');
                    prev.addClass('active');
                    prev.removeClass('not_active');
                }
            });
        });

    </script>
    <script>
        $(document).ready(function(){
            $(".gender").click(function(){

                if($("#vrouw").prop("checked")) {
                    $('.body_type_man').removeClass('selected');
                    $('.body_type_vrouw').addClass('selected');
                }
                if($("#man").prop("checked")) {
                    $('.body_type_man').addClass('selected');
                    $('.body_type_vrouw').removeClass('selected');
                }
            });
        });
    </script>
</div>
<div id="footer">
    <?php
    include 'footer.php';
    ?>
</div>
</body>