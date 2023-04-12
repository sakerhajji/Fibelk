<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon " type="x-icon" href="img/icon.png" >
    <!-- My CSS -->
	<link rel="stylesheet" href="login.css">
    <title>Fibelk</title>
</head>
<body>
    
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<h1>Create Account</h1>
			<img src="./img/ll1.png" alt="logo">
			<input type="text" placeholder="Nom"  name="nom" />
			<input type="text" placeholder="Prenom" name="prenom" />
			<input type="email" placeholder="Email" name="email" />
            <input type="date" placeholder="Date de naissance" name="date" />
			<input type="password" placeholder="Mot de passe  " name="pass"  />
			<input type="password" placeholder="confirmer le Mot de passe" name=""  />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<img src="./img/ll1.png" alt="logo">
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Mot de passe" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

</body>
<script src="login.js"></script>
</html>
<?php
include '../Controller/userc.php';
$pc = new Userc();
  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $c = new User ($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['date'] ,$_POST['pass'] );
    
        $pc->addUser($c);

        header('Location:index.php');
        
    
}

?>