<?php 
$sname= "localhost";
$uname="root";
$pass="";
$bd="bib";
$conn = mysqli_connect($sname,$uname,$pass,$bd);


if (!$conn) {
	echo "connection failed";
} 


 ?>