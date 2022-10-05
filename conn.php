<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="lg.css">
	<link rel="stylesheet" type="text/css" href="script.js">
	<style type="text/css">
		body{
	  background:url("15.jpg") no-repeat;
    background-size: cover;
text-align: left;
}
input{ 
 width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #C689C6;
    border-top: none;
    border-right: none;
    border-left: none;
    color: black;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
 }
 h1{text-align: left;}
</style>
	<title>Sign in</title>
</head>
<body>
	<h1 class="h">Sign in</h1>
	<br>
	<form  action="conn1.php" method="POST">

<label>Email : </label><br><br><input type="text" name="email" id="email" required><br><br><br>
<label>Password :</label><br><br><input type="Password" name="mdp" id="mdp" required><br><br><br><br><br>
&nbsp;<span class="sp"><input type="SUBMIT" name="SUBMIT" value="Log in"></span>&nbsp;
<span class="sp"><input type="reset" name="Annuler" value="Reset"></span>
</form>
</body>
</html>