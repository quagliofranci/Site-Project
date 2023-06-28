<?php
	$host = 'localhost';
	$db = 'TSW';
	$port='5432';
	$username = 'postgres';
	$password = 'Ciao';
	$connection_string = "host=$host port=$port dbname=$db user=$username password=$password";

	$db= pg_connect($connection_string) or die('Impossibile connettersi al database:'.pg_last_error());
    

?>



