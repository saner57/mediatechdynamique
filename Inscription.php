
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

	<title>Mediatechdynamique</title>
		<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h3><span style="float: right;"> <a href="Connexion.php">Connexion</a></span></h3>

	<nav class="menu">


		<ul> 



			<li class="menu-Inscription"><a href="#">Inscription</a>

       <form id="contact_form" action="Inscription.php" method="POST" enctype="multipart/form-data">


		<div class="row">

			<label for="First name">Your name:</label><br />
							<input id="name" class="input" name="name" type="text" value="" size="30" /><br />

						   </div>

       <div class="row">

		<label for="email">Your email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />

	      </div>

	          <div class="row">

		<label for="email"> Your password:</label><br />
		<input id="email" class="input" name="password" type="text" value="" size="30" /><br />

	      </div>


	      <div class="row">

		<label for="email"> Confirmation:</label><br />
		<input id="email" class="input" name="password2" type="text" value="" size="30" /><br />

	      </div>

            <input type="submit" value="S'inscrire" name="sinscrire"></>
           </form>	


              


            </ul>


				
	      </nav>



              




<?php
include 'test.php';
if(isset($_POST['sinscrire'])){
	try {
		extract($_POST);
		$result=$conn->query("INSERT INTO users(name,email,password) values('$name','$email','$password')");
		echo  "Inscription réussie";
		 
		
	} catch (Exception $e) {
		echo "ko";
	}
}

?>      
</body>
</html>