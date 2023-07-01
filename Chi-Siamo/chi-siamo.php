<?php
    session_start();
    include("../elimina-cookie.php");
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

                <form id="candidati-form" method="post" action="<?php echo $_SERVER['PHP_SELF']?>" onsubmit="return validateForm();">
                    <div class="form-fieldset">
                        <!-- Nome -->
                        <input type="text" class="fieldset" id="nome" name="nome" placeholder="Il tuo nome" required></br></br>
                            
                        <!-- Cognome -->
                        <input type="text" class="fieldset" id="cognome" name="cognome" placeholder="Il tuo cognome" required></br></br>
                            
                        <!-- Età -->
                        <input type="number" min="0" class="fieldset" id="eta" name="eta" placeholder="La tua età" required></br></br>
                            
                        <!-- Indirizzo email -->
                        <input type="email" class="fieldset" id="email" name="email" placeholder="Il tuo indirizzo email" required></br></br>
                            
                        <!-- Città -->
                        <input type="text" class="fieldset" id="citta" name="citta" placeholder="La tua città" required></br></br>
                            
                        <!-- Cellulare -->
                        <!-- Il pattern inserito impedisce di inserire numeri che siano diversi dal formato scelto -->
                        <input type="tel" class="fieldset" id="cell" name="cell" pattern="[0-9]{10}" placeholder="Il tuo numero di cellulare" required></br></br>
                            
                        <!-- Disponibiltà-->
                        <p for="descr">Disponibilit&agrave giorni:</p></br>
                        
                        <div class="giorni" required>
                            <input type="radio" name="giorni" id="lunedi" value="lunedì">
                            <label for="lunedi" style="font-size: 16px; padding-left: 5px;">Lun</label> &nbsp

                            <input type="radio" name="giorni" id="martedi" value="martedi">
                            <label for="martedi" style="font-size: 16px; padding-left: 5px;">Mar</label> &nbsp

                            <input type="radio" name="giorni" id="mercoledi" value="mercoledi">
                            <label for="mercoledi" style="font-size: 16px; padding-left: 5px;">Mer</label> &nbsp

                            <input type="radio" name="giorni" id="giovedi" value="giovedi">
                            <label for="giovedi" style="font-size: 16px; padding-left: 5px;">Gio</label> &nbsp

                            <input type="radio" name="giorni" id="venerdi" value="venerdi">
                            <label for="venerdi" style="font-size: 16px; padding-left: 5px;">Ven</label> &nbsp

                            <input type="radio" name="giorni" id="sabato" value="sabato">
                            <label for="sabato" style="font-size: 16px; padding-left: 5px;">Sab</label> &nbsp

                            <input type="radio" name="giorni" id="domenica" value="domenica">
                            <label for="domenica" style="font-size: 16px; padding-left: 5px;">Dom</label>
                        </div>

                        <!-- Note sul servizio -->
                        <p for="descr">Descrizione delle tue competenze:</p></br>
                        <input type="text" class="fieldset" id="descr" name="desc"></br></br>
                    </div>

                    <input type="submit" class="candidati-btn" name="CandidatiButton" value="Candidati">
                </form>
            </div>

            <?php 
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(isset($_POST["CandidatiButton"])) {
                        include("../Login-Logout/logdb.php");

                        $name = trim($_POST["nome"]);
                        $surname = trim($_POST["cognome"]);
                        $eta = $_POST["eta"];
                        $email = trim($_POST["email"]);
                        $citta = trim($_POST["citta"]);
                        $cell = trim($_POST["cell"]);
                        $giorni = $_POST["giorni"];
                        $desc = trim($_POST["desc"]);
                        
                        // Prepared statement per evitare SQL-Injection
                        $query = "INSERT INTO volontari (nome, cognome, età, email, città, telefono, disponibilità, descrizione)
                        VALUES ($1, $2, $3, $4, $5, $6, $7, $8)";

                        $result = pg_query_params($db, $query, array($name, $surname, $eta, $email, $citta, $cell, $giorni, $desc));
                        
                        if($result) {
                            echo '<script type="text/javascript">';
                            echo 'alert("Candidatura presentata con successo!");';
                            echo '</script>';
                            pg_close($db);
                        } else {
                            echo '<script type="text/javascript">';
                            echo 'alert("Candidatura già effettuata!");';
                            echo '</script>';
                            pg_close($db);
                        }
                    }
                }
            ?>

            <?php include("../Homepage/footer.php"); ?>
        </div>
    </body>
</html>