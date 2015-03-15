<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>web聊天_用户注册</title>
</head>

<body>

<form action="regist1.php" method="post">
	<table id="table1">
		<tr>
			<td class="td1">ID :</td>
			<td><input type="text"  name="nickname" /> *</td>
		</tr>

		<tr>
			<td class="td1">Mot de passe :</td>
			<td><input type="password" name="password" /> *</td>
		</tr>

		<tr>
			<td class="td1">Confirmer le mot de passe :</td>
			<td><input type="password" name="password2" /> *</td>
		</tr>
		<tr>
			<td class="td1">Sexe :</td>
			<td><input type="radio" value='H' name="sex" checked="checked" />Homme  <input type="radio" value='F' name="sex" />Femme</td>
		</tr>
		<tr>
			<td class="td1">Date de naissance :</td>
			<td>
				<select name="yyyy">
					<?php
					for($i=2012;$i>1912;$i--){
						echo "<option value='{$i}'>$i</option>";
					}
					?>
				</select>Année
				<select name="mm">
					<?php
					for($i=1;$i<=12;$i++){
						echo "<option value='{$i}'>$i</option>";
					}
					?>
				</select>Mois
				<select name="dd">
					<?php
					for($i=1;$i<=31;$i++){
						echo "<option value='{$i}'>$i</option>";
					}
					?>
				</select>Jour
			</td>
		</tr>
		<tr>
			<td class="td1">Lieu d’habitation :</td>
			<td><input type="text" name="address" /></td>
		</tr>
		<tr>
			<td class="td1">Question :</td>
			<td><input type="text" name="question" /></td>
		</tr>
		<tr>
			<td class="td1">Réponse :</td>
			<td><input type="text" name="answer" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value=" enregistrer " id="submit" /></td>
		</tr>
	</table>
</form>
