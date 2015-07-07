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
			  $('.login-popup').toggle();
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
					<!-- <img title="My photo" alt="My Photo" src="#"> -->
				</div>

				<div class="menu">
					<p class="sous-menu">Catégories</p>
				</div>

				<div class="login-popup">
					<div class="login-box">
						<p class="login-titre">Identifiants</p>
						<input class="login-identifiant" type="text" name="Identifiant" placeholder="Identifiant" title="Identifiant">
						<input class="login-password" type="password" name="Mot de passe" placeholder="Mot de passe" title="Mot de passe">
						<input class="login-submit" type="submit" name="se connecter" value="se connecter" title="se connecter">					
					</div>
				</div>
			</nav>
		</div>
	</body>
</html>