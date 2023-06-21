<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Sorrisi d'Argento</title>
        <meta charset="utf-8">
        <meta name="author" content="Gruppo 53"/>
        <meta name="description" content="Un sito dedicato al volontariato verso gli anziani."/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="keywords" content="Volontariato anziani assistenza"/>
        <link rel="icon" href="../images/icon.jpg" type="image/jpg"/>
        <link rel="stylesheet" type="text/css" href="./log.css"/>
        <!-- link per scaricare i font necessari per le icone -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="container">
            <!--  Header -->
            <?php include("../Homepage/header.php"); ?>

            <!-- Form -->
            <div class="row">
				<div class="column">
                    <!-- opzioni per la checkbox -->
					<h6>
                        <span id="accedi">Accedi</span>
                        <span id="registrati">Registrati</span>
                    </h6>
			          	
                    <!-- checkbox per switchare tra login e registrazione -->
                    <input class="checkbox" type="checkbox" id="reg-log"/>
                    <label for="reg-log"></label>
						
                    <!-- corpo del form -->
					<div class="form">
						<div class="form-divider">
							<div class="login-form">
								<div class="form-wrapper">
									<h4>Accedi</h4></br></br>

									<div class="form-fieldset">
										<input type="email" class="fieldset-style" id="log-email" placeholder="La tua email"></br>
										<input type="password" class="fieldset-style" id="log-psw" placeholder="La tua password"></br></br></br>
									</div>

									<a href="#" class="login-button">Accedi</a></br></br>

                        			<p><a href="#" class="forgot-psw">Password dimenticata?</a></p>
			      				</div>
			      			</div>

							<div class="register-form">
								<div class="form-wrapper">
									<h4>Registrati</h4></br>

									<div class="form-fieldset">
										<input type="text" class="fieldset-style" id="log-name" placeholder="Il tuo nome"></br></br>
										<input type="email" class="fieldset-style" id="log-email" placeholder="La tua email"></br>
										<input type="password" class="fieldset-style" id="logpass" placeholder="La tua password"></br></br>
									</div>

									<a href="#" class="register-button">Registrati</a>
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