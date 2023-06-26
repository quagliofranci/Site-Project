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
        <script src="./chi-siamo.js"></script>
    </head>

    <body style="background-color: #11009E;">
        <div class="container">
            <?php include("../Homepage/header.php"); ?>

            <h1>Benvenuti su Sorrisi d'Argento</h1></br>

            <div class="row1" id="descrizione-chi-siamo">
                <p>
                    Siamo un gruppo di volontari appassionati e impegnati nel fornire <strong><u>assistenza</u></strong> e <strong><u>supporto</u></strong> agli anziani e alle loro famiglie durante le fasi cruciali della vita.
                    La nostra missione &egrave migliorare la qualit&agrave della vita degli anziani, offrendo servizi di consulenza personalizzati e specializzati. Comprendiamo che ogni individuo ha esigenze e desideri unici, pertanto ci impegniamo a creare soluzioni su misura per soddisfare le specifiche esigenze di ogni cliente.
                </p>
            </div>

            <div class="row2">
                <h2>I nostri operatori</h2>

                <div class="foto-operatori">
                    <div class="operatore">
                        <img src="../images/chi-siamo-matteo.jpg" style="width: 250px; height: 250px; border: none; border-radius: 50%;"/>
                        <p>Matteo</p>
                    </div>

                    <div class="operatore">
                        <img src="../images/chi-siamo-riccardo.jpg" style="width: 250px; height: 250px; border: none; border-radius: 50%;"/>
                        <p>Riccardo</p>
                    </div>

                    <div class="operatore">
                        <img src="../images/chi-siamo-emo.jpg" style="width: 250px; height: 250px; border: none; border-radius: 50%;"/>
                        <p>Emanuele</p>
                    </div>

                    <div class="operatore">
                        <img src="../images/chi-siamo-quaglio.jpg" style="width: 250px; height: 250px; border: none; border-radius: 50%;"/>
                        <p>Francesco</p>
                    </div>
                </div>
            </div>

            <div class="row3">
                <h2>Vuoi unirti a noi?</br>Compila il form!</h2>

                <form id="candidati-form" onsubmit="return validateForm();">
                    <div class="form-fieldset">
                        <!-- Nome -->
                        <input type="text" class="fieldset" id="nome" placeholder="Il tuo nome" required></br></br>
                            
                        <!-- Cognome -->
                        <input type="text" class="fieldset" id="cognome" placeholder="Il tuo cognome" required></br></br>
                            
                        <!-- Età -->
                        <input type="number" min="0" class="fieldset" id="eta" placeholder="La tua età" required></br></br>
                            
                        <!-- Indirizzo email -->
                        <input type="email" class="fieldset" id="email" placeholder="Il tuo indirizzo email" required></br></br>
                            
                        <!-- Città -->
                        <input type="text" class="fieldset" id="citta" placeholder="La tua città" required></br></br>
                            
                        <!-- Cellulare -->
                        <!-- Il pattern inserito impedisce di inserire numeri che siano diversi dal formato scelto -->
                        <input type="tel" class="fieldset" id="cell" pattern="[0-9]{10}" placeholder="Il tuo numero di cellulare" required></br></br>
                            
                        <!-- Disponibiltà-->
                        <p for="descr">Disponibilit&agrave giorni:</p></br>
                        
                        <div class="giorni" required>
                            <input type="checkbox" id="lunedi">
                            <label for="lunedi">Lun</label> &nbsp

                            <input type="checkbox" id="martedi">
                            <label for="martedi">Mar</label> &nbsp

                            <input type="checkbox" id="mercoledi">
                            <label for="mercoledi">Mer</label> &nbsp

                            <input type="checkbox" id="giovedi">
                            <label for="giovedi">Gio</label> &nbsp

                            <input type="checkbox" id="venerdi">
                            <label for="venerdi">Ven</label> &nbsp

                            <input type="checkbox" id="sabato">
                            <label for="sabato">Sab</label> &nbsp

                            <input type="checkbox" id="domenica">
                            <label for="domenica">Dom</label>
                        </div>

                        <!-- Note sul servizio -->
                        <p for="descr">Descrizione delle tue competenze:</p></br>
                        <input type="text" class="fieldset" id="descr"></br></br>
                    </div>

                    <input type="submit" class="candidati-btn" name="CandidatiButton" value="Candidati">
                </form>
            </div>

            <?php include("../Homepage/footer.php"); ?>
        </div>
    </body>
</html>