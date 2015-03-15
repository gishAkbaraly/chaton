<?php
	session_start();
	
	if(empty($_SESSION['password'])){
		echo "<a href='login.php'>Se connecter</a> <a href='regist.php' target='_blank'>Créer un compte</a>";
		exit();
	}
	header("Content-type:text/html; charset=utf-8");
	include "include/dbconn.php";
	include "include/common.inc.php";


	$nickname = $_SESSION['nickname'];
	$f_nickname = $_GET['f_nickname'];
	
	//判断是该用户id是否存在
	$sql = "select id from user where nickname='{$f_nickname}';";
	$res = mysql_query($sql,$link);
	if(mysql_num_rows($res)<1){
		echo "<script type='text/javascript'> alert('Cet utilisateur n\\'existe pas'); location.href='addfriend.php'; </script>";
		exit();
	}
	
	//判断是否已经加过该好友
	$sql = "select nickname from friend where f_nickname='{$f_nickname}' and nickname='{$nickname}';";
	$res = mysql_query($sql,$link);
	if(mysql_num_rows($res)>0){
		echo "<script type='text/javascript'> alert('Vous avez déjà ajouté cet utilisateur'); location.href='addfriend.php'; </script>";
		exit();
	}
	
	$sql = "insert friend (nickname,f_nickname) values ('{$nickname}','{$f_nickname}');";
	$res = mysql_query($sql,$link);
	if($res){
		echo "<script type='text/javascript'> alert('Ami requête est envoyée avec succès, attendez la confirmation'); location.href='addfriend.php'; </script>";
	}

?>
