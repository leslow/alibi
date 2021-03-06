<!DOCTYPE HTML>
<html>
	<head>
		<title>Navigation Alibi</title>
		<meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
		<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
        <link href='http://fonts.googleapis.com/css?family=Coustard' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
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
    

        <div id="wrap">
            
    <div id="content_ligne_bloc">
        <h2>Le top de la semaine !</h2>
        <div class="espace1"></div>
            <div id="content_bloc">
                <div class="bloc1">
                    <div class="content_semaine">
                        <h4> <span class="kurva">“</span> loremp ipsum dolor sit amet <span class="kurva">"</span></h4>
                    </div>
                    <div class="meta_semaine">
                    </div>
                </div>
                <div class="bloc2">
                    <div class="content_semaine">
                        <h4> <span class="kurva">“</span> loremp ipsum dolor sit amet <span class="kurva">"</span></h4>
                    </div>
                    <div class="meta_semaine">
                    </div>
                </div>
                <div class="bloc3">
                    <div class="content_semaine">
                        <h4> <span class="kurva">“</span> loremp ipsum dolor sit amet <span class="kurva">"</span></h4>
                    </div>
                    <div class="meta_semaine">
                    </div>
                </div>
            </div>
    </div>
            
    <div id="content_vertical_bloc">
        <div class="espace0"></div>
        <h2>Les + recents !</h2>
        <div class="espace1"></div>
            <div id="content_bloc_vertical">
                <div class="bloc_vertical_1">
                    <div class="content_recent">
                        <h3> loremp ipsum dolor sit amet </h3>
                    </div>
                    <div class="meta_recent">
                        <div class="comment"><p>100 <span class="fa fa-comments-o fa-lg"></span></p></div>
                        <div class="like"><p>1500 <span class="fa fa-thumbs-up fa-lg"></span></p></div>
                        <div class="new-comment">
                        <p><a href="#">+1</a></p>
                        <div class="rond"></div>
                        </div>
                    </div>
                </div>
                <div class="bloc_vertical_2">
                    <div class="content_recent">
                        <h3> loremp ipsum dolor sit amet </h3>
                    </div>
                    <div class="meta_recent">
                        <div class="comment"><p>100 <span class="fa fa-comments-o fa-lg"></span></p></div>
                        <div class="like"><p>1500 <span class="fa fa-thumbs-up fa-lg"></span></p></div>
                        <div class="new-comment">
                        <p><a href="#">+1</a></p>
                        <div class="rond"></div>
                        </div>
                    </div>
                </div>
                <div class="bloc_vertical_3">
                    <div class="content_recent">
                        <h3> loremp ipsum dolor sit amet </h3>
                    </div>
                    <div class="meta_recent">
                        <div class="comment"><p>100 <span class="fa fa-comments-o fa-lg"></span></p></div>
                        <div class="like"><p>1500 <span class="fa fa-thumbs-up fa-lg"></span></p></div>
                        <div class="new-comment">
                        <p><a href="#">+1</a></p>
                        <div class="rond"></div>
                        </div>
                    </div>
                </div>
                <div class="bloc_vertical_4">
                    <div class="content_recent">
                        <h3> loremp ipsum dolor sit amet </h3>
                    </div>
                    <div class="meta_recent">
                        <div class="comment"><p>100 <span class="fa fa-comments-o fa-lg"></span></p></div>
                        <div class="like"><p>1500 <span class="fa fa-thumbs-up fa-lg"></span></p></div>
                        <div class="new-comment">
                        <p><a href="#">+1</a></p>
                        <div class="rond"></div>
                        </div>
                    </div>
                </div>
            </div>  
     </div>       
        <div class="content-proposition">
            <div class="espace0"></div>
            <h2>Une idée d’alibi ? Postez la !</h2>
            <div class="espace1"></div>
            <div id="post_proposition">
                <h3>Envie de montrez votre créativité au service de la communauté ?</h3> <h3>Envoyez nous vos meilleurs phrases d’excuse et partagez la !</h3>
                <div class="espace1"></div>
                <form action="index.php" method="post" name="formPost" class="form_post_proposition">
                    <textarea placeholder="Qu'elle est votre phrase ?" id="message" name="message"></textarea><br/>
                    <input type="submit" value="Envoyer" style="width:50%">
                </form>
            </div>
        </div>
        
    </div>

	</body>
</html>