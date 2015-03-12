<?php

	include "config/dbconfig.php";

	$mysqli = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

	if ($mysqli->connect_errno)
	{
		die("Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
	}
	mysql_query("set names utf8");
?>
