<?php
	
	
	
	require("connexionBDD.php");
	global $dbConn;



	if (!$dbConn) {
	   die("Database Connection Error");
	}

	$num = $_POST['id'];

	$stid = oci_parse($dbConn, 'DELETE FROM CLIENT WHERE ID_CLIENT = :num ');

	oci_bind_by_name($stid, ':num', $num);

	if ( !   oci_execute($stid)){
		  $err = oci_error($stid);
		  trigger_error('Insertion failed: '. $err['message'], E_USER_ERROR);

		};

	header('Location: clients.php');
	exit();

?>