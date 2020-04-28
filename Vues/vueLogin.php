<?php
        require_once('../Controleurs/controleurLogin.php');
        require_once('../Modeles/connexion.php');

        
        $bd = bdd();
        $log = new ControleurLogin($bd);
    if (isset($_POST['mailconnect']) AND $_POST['mdpconnect']) 
    {
        $log = new controleurLogin($bd);
        $log->administrateurs();
    }
    
?>

<!DOCTYPE html>
<html>
<head>
<?php include('include/head.php'); ?>
</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4" id="content">
					<form method="POST" action="" class="fh5co-form animate-box" data-animate-effect="fadeIn">
						<h2>Se Connecter</h2>
						<div class="form-group">
							<label for="username" class="sr-only">Username</label>
                            <input type="email" name="mailconnect" id="username" placeholder="Veillez saisir votre mail">
                        </div>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
                            <input type="password" name="mdpconnect" id="password" placeholder="Veillez saisir votre mot de passe">
                        </div>
						<div class="form-group">
							<label for="remember"><input type="checkbox" id="remember"> Se souvenir de moi </label>
						</div>
						<div class="form-group">
							<p><a href="#">Mot de passe oublié?</a></p>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="formconnexion"> Se Connecter</button>
						</div>
					</form>

				</div>
			</div>
			<div class="row" style="padding-top: 60px; clear: both;">
				<div class="col-md-12 text-center"><p><small class="copy">&copy; EDIFWPM All Rights Reserved.</small></p></div>
			</div>
		</div>

        <?php
            if (isset($msg)) {
                header('location: ../Controleurs/controleurLogin.php');
                echo '<font color=red>'.$msg.'</font>';
            }
        ?>
	
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>