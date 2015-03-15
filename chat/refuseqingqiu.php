<?php
	session_start();
	
	if(empty($_SESSION['password'])){
		echo "<a href='login.php'>Se connecter</a> <a href='regist.php' target='_blank'>Créer un compte</a>";
		exit();
	}
	header("Content-type:text/html; charset=utf-8");
	include "include/dbconn.php";
	
	$id = $_GET['id'];
	
	$sql = "delete from friend where id='{$id}';";
	$res = mysql_query($sql,$link);
	if($res){
		echo "<script type='text/javascript'> alert('Vous avez refusé d\\'invitation); location.href='qingqiu.php'; </script>";
		exit();
	}

?>
