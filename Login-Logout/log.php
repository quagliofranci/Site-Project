<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Sorrisi d'Argento - Auth</title>
        <meta charset="utf-8">
        <meta name="author" content="Gruppo 53"/>
        <meta name="description" content="Pagina di autenticazione relativa al sito 'Sorrisi d'Argento'"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="keywords" content="Volontariato anziani assistenza"/>
        <link rel="icon" href="../images/icon.jpg" type="image/jpg"/>
        <link rel="stylesheet" type="text/css" href="./log.css"/>
        <!-- link per scaricare i font necessari per le icone -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="./log.js"></script>
    </head>

    <body>
        <div class="container">
            <!--  Header -->
            <?php include("../Homepage/header.php"); ?>

            <!-- Form -->
            <div class="row">
				<div class="column">
                    <!-- pulsanti per switchare tra i form -->
					<h6>
                        <button class="login-btn" id="accedi">Accedi</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="reg-btn" id="registrati">Registrati</button>
                    </h6>
					
					<div class="form">
						<div class="form-divider">
                            <!-- corpo del form di login -->
							<div class="login-form">
								<div class="form-wrapper">
                                    <form id="AccediForm">
                                        <div class="form-fieldset">
                                            <input type="email" class="fieldset-style" id="log-email" placeholder="La tua email"></br>
                                            <input type="password" class="fieldset-style" id="log-psw" placeholder="La tua password"></br></br></br>
                                        </div>

									    <input type="submit" class="login-button" name="AccediButton" value="Accedi"></br></br>
                                    </form>
                                </div>
			      			</div>

                            <!-- corpo del form di registrazione -->
							<div class="register-form">
								<div class="form-wrapper">
                                    <form id="RegisterForm" onsubmit="return validateForm();">
                                        <div class="form-fieldset">
                                            <input type="text" class="fieldset-style" id="reg-name" placeholder="Il tuo nome" required></br></br>
                                            <input type="text" class="fieldset-style" id="reg-surname" placeholder="Il tuo cognome" required></br></br>
                                            
                                            <p style="font-size: bolder; font-weight: 500; margin-bottom: 15px;">Data di nascita</p>
                                            <input type="date" class="fieldset-style" id="reg-date" required></br></br>
                                            
                                            <input type="radio" class="radio-btn" id="radiobtn" name="sex" style="vertical-align: middle" required/>
                                            <label class="radio-btn" for="reg-male">M</label>

                                            <input type="radio" class="radio-btn" id="radiobtn" name="sex" style="vertical-align: middle" required/>
                                            <label class="radio-btn" for="reg-female">F</label>

                                            <input type="radio" class="radio-btn" id="radiobtn" name="sex" style="vertical-align: middle" required/>
                                            <label class="radio-btn" for="reg-neutral">Altro</label></br></br>
                                            
                                            <input type="email" class="fieldset-style" id="reg-email" placeholder="La tua email" required></br>
                                            <input type="password" class="fieldset-style" id="reg-pass" placeholder="La tua password" required></br></br>
                                        </div>

									    <input type="submit" class="register-button" name="RegistratiButton" value="Registrati">
                                    </form>
				      			</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>

            <!-- Footer -->
            <?php include("../Homepage/footer.php"); ?>
        </div>
    </body>
</html>