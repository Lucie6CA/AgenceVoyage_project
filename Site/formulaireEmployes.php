
<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="bootstrap-dist/css/bootstrap.css" />
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<title>
			Formulaire employés Maison Nomade
		</title>
		
		<link rel="stylesheet" href="styleFormulaires.css" media="screen" type="text/css" />
		
	</head>
	
	<body>
	<header id="haut">
	
	
	</header>
	
	
	<nav class="navbar" navbar-default role=navigatio>
			
			
			<a class="nav-link active" href="accueil.php">Accueil</a>
			
			<a class="nav-link" href="employes.php">Employés</a>
			<a class="nav-link" href="circuits.php">Circuits</a>
			<a class="nav-link" href="clients.php">Clients</a>
			<a class="nav-link" href="reservations.php">Réservations</a>
			
			
			
			
			
			
		
		</nav>
		
		<section id="bas">
		<form method="post" action="addEmployes.php">
		
		
		<table class="table">
        <thead>
          <tr>
			
            <th>Formulaire pour ajouter un employé :</th>
        
          </tr>
        </thead>
        <tbody>
		<tr>
            <td><label for="idEmploye" > Identifiant : </label></td>
            <td><input type="text" name="idEmploye"/></td>
            
		   </tr>
          <tr>
            <td><label for="nomEmploye" > Nom : </label></td>
            <td><input type="text" name="nomEmploye"/></td>
            
		   </tr>
		   <tr>
            <td><label for="prenomEmploye" > Prénom : </label></td>
            <td><input type="text" name="prenomEmploye"/></td>
            
		   </tr>
		   <tr>
            <td><label for="email" > Email : </label></td>
            <td><input type="text" name="email"/></td>
            
		   </tr>
		   <tr>
            <td><label for="Telephone" > Téléphone : </label></td>
            <td><input type="text" name="Telephone"/></td>
            
		   </tr>
		   <tr>
            <td><label for="Salaire" > Salaire : </label></td>
            <td><input type="text" name="Salaire"/></td>
            
		   </tr>
		   <tr>
            <td><label for="password" > Mot de passe : </label></td>
            <td><input type="password" name="password" /></td>
            
		   </tr>
          
        </tbody>
      </table>
			
			
			<input type="submit" value="Valider" onclick=window.location.href='addEmployes.php'/>
		</form>
			
		
		
		</section>
		
	</body>

</html>
	