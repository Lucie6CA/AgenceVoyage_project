<?php
require("connexionBDD.php");
global $dbConn;

if (isset($_POST)){
  $idClient=$_POST['idClient'];
  $nomClient=$_POST['nomClient'];
  $prenomClient = $_POST['prenomClient'];
  $email = $_POST['email'];
  $telephone = $_POST['telephone'];





  $sql = 'INSERT INTO CLIENT (ID_CLIENT,NOMCLIENT,PRENOMCLIENT,EMAILCLIENT,TELCLIENT) '.
         'VALUES(:id, :nom, :prenom, :email, :tel)';

  $compiled = oci_parse($dbConn, $sql);

  oci_bind_by_name($compiled, ':id', $idClient);
  oci_bind_by_name($compiled, ':nom', $nomClient);
  oci_bind_by_name($compiled, ':prenom', $prenomClient);
  oci_bind_by_name($compiled, ':email', $email);
  oci_bind_by_name($compiled, ':tel', $telephone);
 


  if ( !oci_execute($compiled)){
	  
   $err = oci_error($compiled);
    trigger_error('Insertion failed: '. $err['message'], E_USER_ERROR);

  };



  header('Location:clients.php');
  exit();
}
  ?>