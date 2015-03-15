<?php
/* cette facon marche pas
	include "config/dbconfig.php";

	$link = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

	if ($link->connect_errno)
	{
		die("Echec lors de la connexion à MySQL : (" . $link->connect_errno . ") " . $link->connect_error);
	}
	mysql_query("set names utf8");
*/

//
include "config/dbconfig.php";

$link = mysql_connect($DBHOST,$DBUSER,$DBPASSWORD);
mysql_select_db($DBNAME);
mysql_query("set names utf8");

?>
