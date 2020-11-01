<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="bootstrap-dist/css/bootstrap.css" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<title>
			Réservations Maison Nomade
		</title>
		
		<link rel="stylesheet" href="styleAccueil.css" media="screen" type="text/css" />
		
	</head>
	
	<body>
	<header id="haut">
	
	
	</header>
	
	
	<nav class="navbar" navbar-default role=navigatio>
			
			
			<a id="inactive" class="nav-link" href="accueil.php">Accueil</a>
			
			<a id="inactive" class="nav-link" href="employes.php">Employés</a>
			<a id="inactive" class="nav-link" href="circuits.php">Circuits</a>
			<a id="inactive" class="nav-link" href="clients.php">Clients</a>
			<a class="nav-link active" href="reservations.php">Réservations</a>
			
			
			
			<form class="form-inline mr-auto">
				<input class="form-control" type="text" placeholder="" aria-label="">
				<button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">Rechercher</button>
			</form>
			
			<a id="inactive" class="nav-link" href="deconnexion.php">Déconnexion</a>
			
		
		</nav>
		
		<?php

			require("connexionBDD.php");
			global $dbConn;

			
			$stid = oci_parse($dbConn, 'SELECT * from RESERVATION');
				oci_execute($stid);
				echo '<table class="table">';
				echo "<thead>";
				echo "<tr>";
														
				echo "<th>"."Nom Client - id"."</th>";
				echo "<th>"."Ref circuit - id"."</th>";
				echo "<th>"."Date de départ"."</th>";
				echo "<th>"."date de fin"."</th>";
				echo "<th>"."Nombre de passager"."</th>";

				//echo "<th>"."</th>";
				echo "<th>"."</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				while (($emp = oci_fetch_array($stid, OCI_BOTH)) != false) {
				 echo "<tr>";    
				 echo "<td>".$emp['ID_CLIENT']."</td>";
				 echo "<td>".$emp['ID_PROGCIRCUIT']."</td>";
				 echo "<td>".$emp['DATE_DEBUT']."</td>";
				 echo "<td>".$emp['DATE_FIN']."</td>";
				 echo "<td>".$emp['NBPASSAGER']."</td>";
				 echo '<td>'.'<button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">'.'Modifier'.'</button>'.'</td>';
				 //echo '<td>'.'<button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2" type="submit">'.'Supprimer'.'</button>'.'</td>';
				 echo "</tr>";
             }
				echo "</tbody>"          ;
				echo "</table>";

			?>
			
			
		
		
		</section>
		<section id="footer">
			<td><input id="rose" type=button class="btn btn-light" title= "Détails de la réservation" onclick=window.location.href='detailResa.php' value= Détails /></td>
		    <input id="button" type=button class="btn btn-light" title= "Supprimer une réservation" onclick=window.location.href='formulaireSupprResa.php' value= Supprimer />

		</section>
			
	</body>

</html>
	
