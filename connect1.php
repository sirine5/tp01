<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['SUBMIT'])) {
   $conn= mysqli_connect('localhost','root','','bib') or die("connection failed:".mysqli_connect_error());
   // $nom=test_input($_POST["nom"]); 
   $nom = $_POST["nom"];
    $prenom=$_POST['prenom']; 
    $num1=$_POST['num']; 
    $email=$_POST['email']; 
    $date=$_POST['date']; 
    $sexe=$_POST['sexe']; 
    $mdp=$_POST['mdp'];
     function test_input($data)
    {
       $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }

   if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['num'])  && isset($_POST['email'])  && isset($_POST['date'])  && isset($_POST['sexe'])  && isset($_POST['mdp']) ) {




 $sql= "INSERT INTO `membres`(`nom`, `prenom`, `numéro`, `email`, `date_naissance`, `sexe`, `mot_de_passe`) VALUES ('$nom','$prenom','$num1','$email','$date','$sexe','$mdp')";
   $Result=mysqli_query($conn,$sql);
   if ($Result) {header("Location: conn.php");
 echo "successful";



 }  else { echo "erreur";}



 }}
 ?>