<?php


	include "include/dbconn.php";
	include "include/common.inc.php";
	header("Content-type:text/html;charset=utf-8");
	//获取数据
	$nickname = getAndJudge('nickname','ID ne peut pas être vide!');
	$password = getAndJudge('password','Mot de passe ne peut pas être vide!');
	$password2 = getAndJudge2('password2','Confirmer le mot de passe ne peut pas être vide!');
	if($password==$password2){
		$password = md5($password);
	}else{
		echo "<script type='text/javascript'> alert('Error : Confirmer le mot de passe'); history.back();</script>";
	}
	$CouV = $_POST['CouV'];

	$sql = "select * from user where nickname='".$nickname."';";
	$res = mysql_query($sql,$link);
	$row = mysql_num_rows($res);

	if ($row == 1){
		echo "<script type='text/javascript'> alert('Le nom d\\'utilisateur est déjà enregistré'); history.back();</script>";
	}

	$sql = "insert into user (nickname,password,CouV) values ('{$nickname}','{$password}','{$CouV}');";

	//echo $sql;
	$res = mysql_query($sql,$link);
	if($res){
		echo "Félicitations! Inscription réussie! !<p><a href='index.php' target='_blank'>Se connecter</a></p>";
	}else{
		echo "<script type='text/javascript'> alert('Désolé! Echec de l\\'enregistrement!');history.back(); </script>";
	}

?>
