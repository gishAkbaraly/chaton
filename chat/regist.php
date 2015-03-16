<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>web chat_Créer un compte</title>
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
			<td class="td1">Type :</td>
			<td><input type="radio" value='C' name="CouV" checked="checked" />Client  <input type="radio" value='V' name="CouV" />Vendeur</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value=" enregistrer " id="submit" /></td>
		</tr>
	</table>
</form>
