<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Sorrisi d'Argento - Chi siamo</title>
        <meta charset="utf-8"/>
        <meta name="author" content="Gruppo 53"/>
        <meta name="description" content="Pagina dedicata alla descrizione del nostro personale 'Sorrisi d'Argento'"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="keywords" content="Volontariato anziani assistenza"/>
        <link rel="icon" href="../images/icon.jpg" type="image/jpg"/>
        <link rel="stylesheet" type="text/css" href="./chi-siamo.css"/>
        <script src="./servizi.js"></script>
    </head>

    <body style ="background-color: #11009E;">
        <div class = "container">
            <?php include("../Homepage/header.php"); ?>

            <h1>Benvenuti su Sorrisi d'Argento</h1></br>

            <div class="row1">
                <p>
                    Siamo un gruppo di professionisti appassionati e impegnati nel fornire assistenza e supporto agli anziani e alle loro famiglie durante le fasi cruciali della vita.
                    La nostra missione è migliorare la qualità della vita degli anziani, offrendo servizi di consulenza personalizzati e specializzati. Comprendiamo che ogni individuo ha esigenze e desideri unici, pertanto ci impegniamo a creare soluzioni su misura per soddisfare le specifiche esigenze di ogni cliente.
                </p>
            </div>

            <div class = "row2">
                <h2>I nostri operatori</h2> 
            </div>

            <?php include("../Homepage/footer.php"); ?>
        </div>    
    </body>
</html>    