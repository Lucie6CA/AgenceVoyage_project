
<?php 

session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{

	$dbHost = '144.21.67.201';
	$dbHostPort ="1521";
	$dbServiceName ="pdbest21.631174089.oraclecloud.internal";
	$usr= 'CARON2B20';
	$pswd= 'CARON2B2001';
	$dbConnStr = "(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)
	(HOST =".$dbHost.")(PORT = ".$dbHostPort."))
	(CONNECT_DATA = (SERVICE_NAME = ".$dbServiceName.")))";

	$dbConn=oci_connect($usr,$pswd, $dbConnStr);
	
	if(!$dbConn){
		$err=oci_error();
		trigger_error("Connexion non établie : " .$err ['message'], E_USER_ERROR);
	}
	else
	{
		echo "Connecté(e)";
	}

	if($_POST['email'] !== "" && $_POST['password'] !== "")
    {
		$mailE = $_POST['email'];
		$mdpE = $_POST['password'];
		echo $mailE;
		echo $mdpE;
        $requete = "SELECT EMAILEMPLOYE, MDP FROM EMPLOYES
					WHERE EMAILEMPLOYE ='".$mailE."'";
		
		echo $requete;
		
			  
        $exec_requete = oci_parse($dbConn,$requete);
		//$info = $infos = array();
		
		if (! oci_execute($exec_requete)){
			$err = oci_error($exec_requete);
			trigger_error('Query Failed'. $err['message'], E_USER_ERROR);
		}
		
		while (oci_fetch($exec_requete)){
			$passwordCheck = oci_result($exec_requete, 'MDP');
			
			if( $mdpE == $passwordCheck) //  mot de passe correctes
			{
				session_start();
				$_SESSION['email'] = $email;
				header('Location: accueil.php');
				exit();
			}
			else
			{
				header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
			}
			//$infos[]=$info;
		}
		
		
        
    }
    else
    {
       header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: login.php');
}
?>
