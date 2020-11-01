<?php
require("connexionBDD.php");
global $dbConn;

if (isset($_POST)){
  $idEmploye=$_POST['idEmploye'];
  $nomEmploye=$_POST['nomEmploye'];
  $prenomEmploye = $_POST['prenomEmploye'];
  $telephone = $_POST['Telephone'];
  $email = $_POST['email'];
  $salaire = $_POST['Salaire'];
  $mdp = $_POST['password'];





  $sql = 'INSERT INTO EMPLOYES (ID_EMPLOYE,NOMEMPLOYE,PRENOMEMPLOYE,TELEMPLOYE,EMAILEMPLOYE,SALAIRE,MDP) '.
         'VALUES(:id, :nom, :prenom, :tel, :email, :salaire, :mdp)';

  $compiled = oci_parse($dbConn, $sql);

  oci_bind_by_name($compiled, ':id', $idEmploye);
  oci_bind_by_name($compiled, ':nom', $nomEmploye);
  oci_bind_by_name($compiled, ':prenom', $prenomEmploye);
  oci_bind_by_name($compiled, ':tel', $telephone);
  oci_bind_by_name($compiled, ':email', $email);
  oci_bind_by_name($compiled, ':salaire', $salaire);
  oci_bind_by_name($compiled, ':mdp', $mdp);


  if ( !   oci_execute($compiled)){
    echo $dateDebut;
    $err = oci_error($compiled);
    trigger_error('Insertion failed: '. $err['message'], E_USER_ERROR);

  };



  header('Location: employes.php');
  exit();
}
  ?>