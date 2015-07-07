<!DOCTYPE HTML>
<html>
	<head>
		<title>Navigation Alibi</title>
		<meta charset="utf-8">
		<link href="css/nav.css" rel="stylesheet" type="text/css" media="screen">
		<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript">

		function init() {

			$('.member').click(function(){
			  $('.login-popup1').toggle();
			});

			$('.newmember').click(function(){
			  $('.login-popup2').toggle();
			});

		}

		</script>
	</head>
	<body onload="init()">
		<div class="nav-wrap">
			
			<nav>
				<!-- <div id="logo" alt="Alibi Logo" title="Alibi"><img src="#"></div> -->
				
				<div class="seconnecter">
					<p><span class="bonjour-login">Bonjour</span>, <span class="name-login">Jordan</span></p>					

					<a href="#"><p class="newmember">Je m'inscris</p></a>	
					<a href="#"><p class="member">J'ai déjà un compte</p></a>	
				</div>				

				<div class="avatar">
					<img title="Ma photo de profil" alt="Avatar" src="assets/jordan-venant.jpg">
				</div>

				<div class="menu">
					<p class="sous-menu">Catégories</p>
				</div>

				<div class="login-popup1">
					<div class="login-box1">
						<p class="login-titre">Identifiants</p>
						<input class="login-identifiant" type="text" name="Identifiant" placeholder="Identifiant" title="Identifiant">
						<input class="login-password" type="password" name="Mot de passe" placeholder="Mot de passe" title="Mot de passe">
						<input class="login-submit1" type="submit" name="se connecter" value="se connecter" title="se connecter">					
					</div>
				</div>

				<div class="login-popup2">
					<div class="login-box2">
						<p class="login-titre">Je m'inscris</p>
						<input class="login-identifiant" type="text" name="Identifiant" placeholder="Choisir mon identifiant" title="Identifiant">
						<input class="login-password1" type="password" name="Mot de passe" placeholder="Choisir mon mot-de-passe" title="Mot de passe">
						<input class="login-password2" type="password" name="Confirmation du mot de passe" placeholder="Confirmer mon mot-de-passe" title="Confirmation du mot de passe">
						<input class="login-submit2" type="submit" name="se connecter" value="c'est partit !" title="se connecter">					
						<input class="login-fb" type="se connecter via Facebook" name="se connecter via Facebook" value="se connecter avec Facebook" title="se connecter via Facebook">					
					</div>
				</div>
			</nav>
		</div>
	</body>
</html>