
<?php 

	$dbHost = '144.21.67.201';
	$dbHostPort ="1521";
	$dbServiceName ="pdbest21.631174089.oraclecloud.internal";
	$usr= 'CARON2B20';
	$pswd= 'CARON2B2001';
	$dbConnStr = "(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)
	(HOST =".$dbHost.")(PORT = ".$dbHostPort."))
	(CONNECT_DATA = (SERVICE_NAME = ".$dbServiceName.")))";

	$dbConn= oci_connect($usr,$pswd,$dbConnStr);
	if(!$dbConn){
		$err=oci_error();
		trigger_error("Connexion non établie : " .$err ['message'], E_USER_ERROR);
	}
?>