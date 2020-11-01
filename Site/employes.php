<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="bootstrap-dist/css/bootstrap.css" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<title>
			Employés Maison Nomade
		</title>
		
		<link rel="stylesheet" href="styleAccueil.css" media="screen" type="text/css" />
		
	</head>
	
	<body>
	
	
	
	<nav class="navbar" navbar-default role=navigatio>
			
			
			<a id="inactive" class="nav-link" href="accueil.php">Accueil</a>
			
			<a class="nav-link active" href="employes.php">Employés</a>
			<a id="inactive" class="nav-link" href="circuits.php">Circuits</a>
			<a id="inactive" class="nav-link" href="clients.php">Clients</a>
			<a id="inactive" class="nav-link" href="reservations.php">Réservations</a>
			
			
			
			<form class="form-inline mr-auto">
				<input class="form-control" type="text" placeholder="" aria-label="">
				<button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Rechercher</button>
			</form>
			
			<a id="inactive" class="nav-link" href="deconnexion.php">Déconnexion</a>
			
		
		</nav>
		
		<section id="bas">
			
			
			
			<?php

			require("connexionBDD.php");
			global $dbConn;

			
			$stid = oci_parse($dbConn, 'SELECT * from EMPLOYES');
				oci_execute($stid);
				echo '<table class="table">';
				echo "<thead>";
				echo "<tr>";
														
				echo "<th>"."Nom"."</th>";
				echo "<th>"."Prénom"."</th>";
				echo "<th>"."Email"."</th>";
				echo "<th>"."Téléphone"."</th>";
				echo "<th>"."Salaire"."</th>";
				//echo "<th>"."</th>";
				echo "<th>"."</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while (($emp = oci_fetch_array($stid, OCI_BOTH)) != false) {
				 echo "<tr>";    
				 echo "<td>".$emp['NOMEMPLOYE']."</td>";
				 echo "<td>".$emp['PRENOMEMPLOYE']."</td>";
				 echo "<td>".$emp['EMAILEMPLOYE']."</td>";
				 echo "<td>".$emp['TELEMPLOYE']."</td>";
				 echo "<td>".$emp['SALAIRE']."</td>";
				 echo '<td>'.'<button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">'.'Modifier'.'</button>'.'</td>';
				 //echo '<td>'.'<button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">'.'Supprimer'.'</button>'.'</td>';
				 echo "</tr>";
             }
				echo "</tbody>"          ;
				echo "</table>";

			?>
			
			
				
		
		
		</section>
		
		<section id="footer">
		
			  <input id="button" type=button class="btn btn-light" title= "Ajouter un employé" onclick=window.location.href='formulaireEmployes.php' value= Ajouter />
			  <input id="button" type=button class="btn btn-light" title= "Supprimer un employé" onclick=window.location.href='formulaireSuppr.php' value= Supprimer />

		</section>
		
		

		
	</body>

</html>
	
