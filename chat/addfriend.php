<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>web chat_Ajouter des amis</title>
</head>

<body>
<P><a href="index.php">Accueil</a></P>
<hr />
<form action="addfriend1.php" method="get">
ID：<input type="text" name="f_nickname" />
<input type="submit" value=" Ajouter " name="sub" />
</form>
<hr />
<p>Dernier membre</p>
<?php

	include "include/dbconn.php";
	//TODO sql marche plus parce que y a pas de reg_time
	//$sql = "select nickname from user order by reg_time desc limit 0,10;";
	$sql = "select nickname from user;";//just for a test
	$res = mysql_query($sql,$link);
	
	while($row = mysql_fetch_array($res)){
		echo "<li>".$row['nickname']."&nbsp;|&nbsp;<a href='addfriend1.php?f_nickname=".$row['nickname']."'>Ajouter des amis</a></li>";
	}
	mysql_free_result($res);

?>
</body>
</html>
