

	<?php 
	//include '../config.php' ;
	include 'session.php' ;

	include "../core/UserController.php";
	$error = "";
	$userController= new UserController();
	session_start();
	if(Session::getUserSession()) {
		//header('Location: profile/index.php');
	}

	if(isset($_POST["email"])){

		$email = $_POST["email"];
		$password = $_POST["password"];

		$result = $userController->findUser($email,$password);
		if($result == null)
			$error ="Email et/ou mot de passe est incorrect";
		else{
			if($result instanceof  User){
				Session::setUserSession($result);
                if ($result->getRole() != "admin")
			    	header('Location:  ../views/index.php');
                else
			    	header('Location: ../copymusic/view/index.html'); 
			}

		}
	}
?>

	<style type="text/css">
		.login-container{
		    margin-top: 5%;
		    margin-bottom: 5%;
		}
		.form-login{
			padding-top:20px; padding-right: 20%;padding-left: 20%;
		}
	</style>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
<link href="css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
    <script src="js/star-rating.min.js" type="text/javascript"></script>
    

    <!-- Title -->
    <title>Gaboudia-music</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

</head>

<body>
   

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="musica-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="musicaNav">

                        <!-- Nav brand -->
              

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    
                                   
                                </ul>

                                <!-- Social Button -->
                                <div class="top-social-info">
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->


<div class="container login-container">
	<div class="row">
		<div class="col-md-12" style="text-align: center">
			<h3>Connexion</h3>
			<p style="color:red"><?php echo $error ?></p>
			<form class="form-login" action="login.php"  method="post">
				<div class="form-group">
					<input name="email" type="text" class="form-control" placeholder="Your Email *" value="" />
				</div>
				<div class="form-group">
					<input name="password" type="password" class="form-control" placeholder="Your Password *" value="" />
				</div>
				<div class="form-group">
					<input type="submit" class="btnSubmit" value="Login" />
				</div>
				<div class="form-group">
					<a href="#" class="ForgetPwd">Mot de passe Oublié?</a>
				</div>
			</form>
		</div>
	</div>
</div>

</body>
</html>
