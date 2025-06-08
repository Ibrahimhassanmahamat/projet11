<!DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<body>
		<?php
			$serveur="localhost";
			$login="root";
			$pass="";

			try{
				$connexion= new PDO("mysql:host=$serveur;dbname=voyage",$login,$pass);
				$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

				$codesql="CREATE TABLE salle(
					Numero_salle INT UNSIGNED  AUTO_INCREMENT PRIMARY KEY,
					nom VARCHAR(30),
					id_client FOREIGN KEY)";
				$connexion->exec($codesql);
				echo "le table et bien inseret";
			}

			catch(PDOException $e){
				echo'echec de la connexion:' .$e->getmessage();
			}


			?>

	
	</body>
	</html>