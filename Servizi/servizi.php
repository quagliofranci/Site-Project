<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Sorrisi d'Argento - Servizi</title>
        <meta charset="utf-8">
        <meta name="author" content="Gruppo 53"/>
        <meta name="description" content="Pagina dedicata aai servizi offerti dai volontari di 'Sorrisi d'Argento'"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="keywords" content="Volontariato anziani assistenza"/>
        <link rel="icon" href="../images/icon.jpg" type="image/jpg"/>
        <link rel="stylesheet" type="text/css" href="./servizi.css"/>
        <script src="./servizi.js"></script>
    </head>

    <body style="background-color: #174DB1;">
        <div class="container">
            <?php include("../Homepage/header.php"); ?>

            <h1>I nostri servizi</h1>

            <div class="slideshow-container">

                <div class="slide fade">
                    <img src="../images/servizi.jpg" style="width:100%">
                </div>

                <div class="slide fade">
                    <img src="../images/servizi2.jpg" style="width:100%">
                </div>

                <div class="slide fade">
                    <img src="../images/homepage2.jpg" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>

            <div class="descrizione-servizi">
                <div class="row">
                    <div class="left-column">
                        <h2>Compagnia</h2>

                        <p>
                            Offriamo una compagnia a chiunque, che si tratti di scambiare una chiacchierata o fare una passeggiata
                        </p>
                    </div>

                    <div class="center-column">
                        <h2>Commissioni</h2>

                        <p>
                            Possiamo effettuare commissioni per voi, come la spesa o il pagamento di una bolletta o simili
                        </p>
                    </div>

                    <div class="right-column">
                        <h2>Assistenza sanitaria</h2>

                        <p>
                            Offriamo anche aiuti specializzati nell'ambito medico per tutti coloro che necessitano un'assistenza medica
                        </p>
                    </div>
                </div>
            </div>

            <?php include("../Homepage/footer.php"); ?>
        </div>
    </body>
</html>