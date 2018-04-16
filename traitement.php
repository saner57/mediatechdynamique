<?php 
include'test.php';

if ( isset($_POST["sinscrire"])) {
	$name=mysql_real_escape_string($_POST["name"]);
	$email=mysql_real_escape_string($_POST["email"]); );
	$password2=mysql_real_escape_string($_POST["password2"]);
	if ($password==$password2){
     // insertion du nom dutilisateur
     $password=md5($password);
     
     
		session_start();
		     $sql="INSERT INTO users(name,email,password) VALUES ($name,$email,$password)";
		     mysql_query($sql, $conn);
		     $_SESSION["message"]="vous etes connectez";
		     $_SESSION["name"]=$name;
		     header("location:inscription.php");
		}else{
			$_SESSION["message"]="mot de passe incorrect";


		}
}



	
 ?>
