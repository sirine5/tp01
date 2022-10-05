function  verifier_nom(){
if (document.myform.nom et prenom.value==""){alert("Veuillez saisir votre nom et prénom SVP");} 
	
if (document.myform.age.value<18 || document.myform.age.value>23){alert("l'age doit etre compris entre 18 et 23");} 

if (document.myform.adresse.value==""){alert("Veuillez saisir votre adresse SVP");


if (document.myform.mdp1.value==""){alert("Veuillez saisir votre mot de passe");}
if (document.myform.mdp2.value==""){alert("Veuillez Re-saisir votre mot de passe");}
if( document.myform.mdp1.value.length!=8 && document.myform.mdp2.value.length!=8){ 
	alert("le mot de passe doit etre de 8 caractere");}
if (document.myform.mdp1.value !=document.myform.mdp2.value){ 
	alert("les mots de passes doit etre égaux");}
}