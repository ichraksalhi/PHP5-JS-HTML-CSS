	<?php 
    include '../base.php' ;

	session_start();
	if(Config::getUserSession()) {
		header('Location: profile/index.php');
	}

	if(isset( $_POST["email"]) && isset($_POST["password"])){

		$email = $_POST["email"];
		$password = $_POST["password"];
		$pwd = $_POST["password_confirm"];
		$name = $_POST["name"];
		$surname = $_POST["surname"];
		$username = $_POST["username"];
		$number = $_POST["number"];
		$error = "";
		$user = new User();
		$user->setEmail($email);
		$user->setRole("user");
		$user->setName($name);
		$user->setSurname($surname);
		$user->setUsername($username);
		$user->setEmail($email);
		$user->setPassword($password);
		$user->setNumber($number);

		$result = $userController->addUser($user);
		if($result == null)
			$error ="Email et/ou mot de passe est incorrect";
		else{
			Config::setUserSession($user);
			header('Location: profile/index.php');
		}
	}
?>
<?php startblock('stylesheet') ?>
	<style type="text/css">
		.login-container{
		    margin-top: 5%;
		    margin-bottom: 5%;
		}
		.form-login{
			padding-top:20px; padding-right: 20%;padding-left: 20%;
		}
	</style>
<?php endblock() ?>

<?php startblock('content') ?>
<div class="container login-container">
	<div class="row">
		<div class="col-md-12" style="text-align: center">
			<h3>Connexion</h3>
			<p style="color:red"><?php echo $error ?></p>
			<form class="form-login" action="signup.php"  method="post">
                <div class="form-group">
                    <label for="name">Pseudo</label>
                    <input  required="required" name="username" type="text" class="form-control" placeholder="Your Username *" value="" />
                </div>
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input  required="required" name="name" type="text" class="form-control" placeholder="Your Name *" value="" />
                </div>
                <div class="form-group">
                    <label for="email">Prénom</label>
                    <input required="required" name="surname" type="text" class="form-control" placeholder="Your Surname *" value="" />
                </div>
				<div class="form-group">
                    <label for="email">Email</label>
                    <input  required="required" name="email" type="text" class="form-control" placeholder="Your Email *" value="" />
				</div>
				<div class="form-group">
                    <label for="password">mot de passe</label>
                    <input name="password" type="password" required="required"  id="password" class="form-control" placeholder="Your Password *" value="" />
				</div>
                <div class="form-group">
                    <input name="password_confirm" required="required" type="password" oninput="check(this)" class="form-control" placeholder="Repeat Your Password *" value="" />
                </div>
                <div class="form-group">
                    <label for="number">Numéro tel</label>
                    <input  required="required" name="number" type="number" class="form-control" placeholder="Your phone number *" value="" />
                </div>
				<div class="form-group">
					<input type="submit" class="btnSubmit" value="Inscrire" />
				</div>
				<div class="form-group">
					<a href="#" class="ForgetPwd">Connectez ?</a>
				</div>
			</form>
		</div>
	</div>
</div>

<?php endblock() ?>
<?php startblock("javascripts")  ?>
    <script language='javascript' type='text/javascript'>
        function check(input) {
            if (input.value != document.getElementById('password').value) {
                input.setCustomValidity('Password Must be Matching.');
                console.log("unmatch");
            } else {
                // input is valid -- reset the error message
                input.setCustomValidity('');
            }
        }
    </script>
<?php endblock() ?>


