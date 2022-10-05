<?php  
session_start();
include "db_conn.php";
if (isset($_POST['email']) && isset($_POST['mdp']) ) {
	function validation($data)

	{
		$data = htmlspecialchars($data);
		return $data;
	}


$email = $_POST['email'];
$mdp = $_POST['mdp'];

$sql="SELECT * FROM `membres` WHERE `email`='$email'AND `mot_de_passe`='$mdp'";
$rs=mysqli_query($conn,$sql);
if (mysqli_num_rows($rs) === 1) {
	$row = mysqli_fetch_assoc($rs);
	if ($row['email'] === $email &&  $row['mot_de_passe'] === $mdp) {
		echo "logged in ";
		$_session['email'] = $row['email'];
		$_session['mot_de_passe'] = $row['mot_de_passe'];
	     	header("Location: home.php");
	     	exit();
	}else{	header("Location: conn.php?inconnu email or mdp");}
}else { header("Location: conn.php?user not found");exit();}

 
}




?>