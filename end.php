<html>
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
$type_lichaam = $_POST['type'];
?>
<body>
<div>
    <h2>Dit word de eindpagina:</h2>
    <div>
        <h4>Naam:
            <?php
            echo($_POST['naam']);
            ?></h4>
        <h4>Dit is je geslacht:
            <?php
            echo($_POST['gender']);
            ?></h4>
        <h4>Dit is je leeftijd:
            <?php
            echo($_POST['leeftijd']);
            ?></h4>
        <h4>Dit is je lengte:
            <?php
            echo($_POST['lengte']);
            ?></h4>
        <h4>Dit is je gewicht:
            <?php
            echo($_POST['gewicht']);
            ?></h4>
        <h4>Dit is je beweging:
            <?php
            echo($_POST['beroep']);
            ?></h4>
        <h4>Dit is je beroep:
            <?php
            echo($_POST['beweging']);
            ?></h4>
        <h4>Dit is je lichaamstype:
            <?php
            echo($_POST['type']);
            ?></h4>
    </div>
    <div>
        <h4>
            <?php

            if ($geslacht == 'man' && $type_lichaam == 'type_a_man') {
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
                echo " x BMR= " . $behoefteman;
                echo " eindebehoefte man: " . round($behoefteman, 0);
                $behoefteman = round($behoefteman, 0);
                echo "TYPE A MAN";
                echo $behoefteman . " ";
                $eiwitmana = (($behoefteman / 100) * 30) / 4;
                echo  " eiwit= " . round($eiwitmana,0);
                $vetmana = (($behoefteman / 100) * 20) / 9;
                echo  " vet= " . round($vetmana,0);
                $koolhydratenmana = (($behoefteman / 100) * 50) / 4;
                echo  " koolhydraten= " . round($koolhydratenmana,0);
            }
            if ($geslacht == 'man' && $type_lichaam == 'type_b_man') {
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
                echo " x BMR= " . $behoefteman;
                echo " eindebehoefte man: " . round($behoefteman, 0);
                $behoefteman = round($behoefteman, 0);
                echo "TYPE B MAN";
                echo $behoefteman . " ";
                $eiwitmanb = (($behoefteman / 100) * 30) / 4;
                echo  " eiwit= " . round($eiwitmanb,0);
                $vetmanb = (($behoefteman / 100) * 30) / 9;
                echo  " vet= " . round($vetmanb,0);
                $koolhydratenmanb = (($behoefteman / 100) * 40) / 4;
                echo  " koolhydraten= " . round($koolhydratenmanb,0);

                // $eiwitingram = $gewicht * 1.8;
                //$calorien =  $eiwitingram * 4;
                //$kcalmineiwit = $behoefteman - $calorien;


                //echo "<br> nieuwe berekening: <br>";
                //echo $kcalmineiwit;

            }
            if ($geslacht == 'man' && $type_lichaam == 'type_c_man') {
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
                echo " x BMR= " . $behoefteman;
                echo " eindebehoefte man: " . round($behoefteman, 0);
                $behoefteman = round($behoefteman, 0);
                echo "TYPE C MAN";
                echo $eindbehoefteman . " ";
                $eiwitmanc = (($eindbehoefteman / 100) * 30) / 4;
                echo  " eiwit= " . round($eiwitmanc,0);
                $vetmanc = (($eindbehoefteman / 100) * 40) / 9;
                echo  " vet= " . round($vetmanc,0);
                $koolhydratenmanc = (($eindbehoefteman / 100) * 30) / 4;
                echo  " koolhydraten= " . round($koolhydratenmanc,0);
            }
            if ($geslacht == 'vrouw' && $type_lichaam == 'type_a_vrouw') {
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
                echo "TYPE A VROUW";
                $eiwitvrouwa = (($behoeftevrouw / 100) * 30) / 4;
                echo  " eiwit= " . round($eiwitvrouwa,0);
                $vetvrouwa = (($behoeftevrouw / 100) * 20) / 9;
                echo  " vet= " . round($vetvrouwa,0);
                $koolhydratenvrouwa = (($behoeftevrouw / 100) * 50) / 4;
                echo  " koolhydraten= " . round($koolhydratenvrouwa,0);
            }
            if ($geslacht == 'vrouw' && $type_lichaam == 'type_b_vrouw') {
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
                echo "TYPE B VROUW";
                $eiwitvrouwb = (($behoeftevrouw / 100) * 30) / 4;
                echo  " eiwit= " . round($eiwitvrouwb,0);
                $vetvrouwb = (($behoeftevrouw / 100) * 30) / 9;
                echo  " vet= " . round($vetvrouwb,0);
                $koolhydratenvrouwb = (($behoeftevrouw / 100) * 40) / 4;
                echo  " koolhydraten= " . round($koolhydratenvrouwb,0);
            }
            if ($geslacht == 'vrouw' && $type_lichaam == 'type_c_vrouw') {
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
                echo "TYPE C VROUW";
                $eiwitvrouwc = (($behoeftevrouw / 100) * 30) / 4;
                echo  " eiwit= " . round($eiwitvrouwc,0 );
                $vetvrouwc = (($behoeftevrouw / 100) * 40) / 9;
                echo  " vet= " . round($vetvrouwc, 0);
                $koolhydratenvrouwc = (($behoeftevrouw / 100) * 30) / 4;
                echo  " koolhydraten= " . round($koolhydratenvrouwc,0);
            }

            ?>
        </h4>
    </div>
</div>
</body>
</html>