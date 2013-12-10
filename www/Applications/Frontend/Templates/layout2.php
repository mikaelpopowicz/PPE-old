<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>CoachMe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- @todo: fill with your company info or remove -->
	<meta name="description" content="CoachMe - Le coaching à portée de main, trouvez votre coach en quelques clics.">
	<meta name="author" content="CPM-WEB">

	<!-- Bootstrap CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="/css/font-awesome.min.css" rel="stylesheet">

	<!-- Plugins -->

	<link href="/plugins/animate/animate.css" rel="stylesheet">
	<link href="/plugins/flexslider/flexslider.css" rel="stylesheet">
	<link href="/plugins/clingify/clingify.css" rel="stylesheet">

	<!-- Theme style -->
	<link href="/css/theme-style.min.css" rel="stylesheet">

	<!--Your custom colour override-->
	<link href="#" id="colour-scheme" rel="stylesheet">

	<!-- Your custom override -->
	<link href="css/custom-style.css" rel="stylesheet">

	<!-- HTML5 shiv & respond.js for IE6-8 support of HTML5 elements & media queries -->
	<!--[if lt IE 9]>
	<script src="plugins/html5shiv/dist/html5shiv.js"></script>
	<script src="plugins/respond/respond.min.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons - @todo: fill with your icons or remove -->
	<link rel="shortcut icon" href="/img/icons/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/icons/114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/icons/72x72.png">
	<link rel="apple-touch-icon-precomposed" href="/img/icons/default.png">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Rambla|Calligraffitti' rel='stylesheet' type='text/css'>

	<!--Retina.js plugin - @see: http://retinajs.com/-->
	<script src="plugins/retina/js/retina-1.1.0.min.js"></script>
</head>

<body class="page page-index">
	<a href="#content" class="sr-only">Skip to content</a>
	<div id="navigation" class="wrapper">
		<div class="navbar-static-top"> 
    
			<!--Hidden Header Region-->
			<div class="header-hidden">
				<div class="header-hidden-inner container">
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<h3>A propos</h3>
							<p>Notre plateforme vous mettra en contact le plus rapidement avec des coachs de votre région</p>
							<a href="/a-propos" class="btn btn-sm btn-primary">Find out more</a>
						</div>
						<div class="col-sm-4 col-md-4"> 
							<!--@todo: replace with company contact details-->
							<h3>Contactez-nous</h3>
							<address>
								<p><abbr title="Phone"><i class="fa fa-phone"></i></abbr> 019223 8092344</p>
								<p><abbr title="Email"><i class="fa fa-envelope"></i></abbr> info@themelize.me</p>
								<p><abbr title="Address"><i class="fa fa-home"></i></abbr> Sunshine House, Sunville. SUN12 8LU.</p>
							</address>
						</div>
						<div class="col-sm-4 col-md-4"> 
							<!--Colour Switch for demo - @todo: remove in production-->
							<div class="colour-switcher">
								<h3>Choisissez votre thème</h3>
								<a href="#green" class="green active" data-toggle="tooltip" data-placement="bottom" data-original-title="Green (Default)">Green</a> <a href="#red" class="red" data-toggle="tooltip" data-placement="bottom" data-original-title="Red">Red</a> <a href="#blue" class="blue" data-toggle="tooltip" data-placement="bottom" data-original-title="Blue">Blue</a>
								<p>Cookies are NOT enabled so colour selection is not persistent.</p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- div.header-hiddent -->
    
			<!--Header & Branding region-->
			<div class="header">
				<div class="header-inner container">
					<div class="row">
						<div class="col-md-8"> 
							<!--branding/logo--> 
							<a class="navbar-brand" href="/" title="Accueil">
								<h1><span>Coach</span>Me<span>.fr</span></h1>
							</a>
							<div class="slogan">Le coaching à porté de main</div>
						</div>
          
		  				<!--header rightside-->
						<div class="col-md-4"> 
							<!--social media icons-->
							<div class="social-media"> 
								<!--@todo: replace with company social media details--> 
								<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
					<div id="header-hidden-link"> <a href="#" title="Click me you'll get a surprise" class="show-hide" data-toggle="show-hide" data-target=".header-hidden"><i></i>Open</a> </div>
				</div>
			</div>
    
			<!--Change order for full width navbar-->
			<div class="container" data-toggle="clingify">
				<div class="navbar"> 
					<!--
						mobile collapse menu button
						- data-toggle="toggle" = default BS menu
						- data-toggle="jpanel-menu" = jPanel Menu
					--> 
					<a class="navbar-btn" data-toggle="jpanel-menu" data-target=".navbar-collapse"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </a> 
        
					<!--user menu-->
					<div class="btn-group user-menu pull-right">
						<a href="/inscription/" class="btn btn-primary signup" data-toggle="modal">Créer un compte</a>
						<a href="/connexion" class="btn btn-primary dropdown-toggle login" data-toggle="modal">Connexion</a>
					</div>
        
					<!--everything within this div is collapsed on mobile-->
					<div class="navbar-collapse collapse"> 
          
		  				<!--main navigation-->
						<ul class="nav navbar-nav">
									<li class="home-link"><a href="/"><i class="fa fa-home"></i><span class="hidden">Accueil</span></a></li>
									<li><a href="/trouver-un-coach" class="menu-item">Trouver un coach</a></li>
									<li><a href="/actualites" class="menu-item">Actualités</a></li>
									<li><a href="/contact" class="menu-item">Contact</a></li>
									<li><a href="/a-propos" class="menu-item">A propos</a></li>
								</ul>
					</div><!--/.navbar-collapse --> 
				</div>
			</div>
		</div>
	</div>
	<div id="highlighted">
		<div class="inner"> 	
			<div id="content">
				<div id="content-below" class="wrapper">
					<div class="container">
						<div class="row">
							<div class="upsell"> <small class="muted">99.9% Uptime <span class="spacer">//</span> Free upgrade assistence <span class="spacer">//</span> 24/7 Support <span class="spacer">//</span> Plans from $19.99/month <span class="spacer">//</span> </small> <a href="pricing.htm" class="btn btn-primary">Start your Free Trial Today! <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- FOOTER -->
				<footer id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col">
								<div class="block contact-block"> 
									<!--@todo: replace with company contact details-->
									<h3>Nous contactez</h3>
									<address>
										<p><abbr title="Email"><i class="fa fa-envelope"></i></abbr> <a mailto:"contact@coachme.fr">contact@coachme.fr</a></p>
									</address>
								</div>
							</div>
							<div class="col-md-5 col">
								<div class="block">
									<h3>A propos</h3>
										<p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
								</div>
							</div>
							<div class="col-md-4 col">
								<div class="block newsletter">
									<h3>Newsletter</h3>
									<p>Restez informer de toutes les actualités en vous inscrivant à notre Newsletter.</p>
									<!--@todo: replace with mailchimp code-->
									<form role="form">
										<div class="input-group input-group-sm">
											<label class="sr-only" for="email-field">Email</label>
											<input type="text" class="form-control" id="email-field" placeholder="Email">
											<span class="input-group-btn">
												<button class="btn btn-primary" type="button">Go!</button>
											</span>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="row">
							<div id="toplink"><a href="#top" class="top-link" title="Back to top">Back To Top <i class="fa fa-chevron-up"></i></a>
							</div>
							<!--@todo: replace with company copyright details-->
							<div class="subfooter">
								<div class="col-md-6">
									<p>Copyright 2013 &copy; CoachMe</p>
								</div>
								<div class="col-md-6">
									<ul class="list-inline footer-menu">
										<li><a href="#">Conditions d'utilisation</a></li>
										<li><a href="#">Politique de service</a></li>
										<li><a href="#">Contactez-nous</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</footer>

				<!--Hidden elements - excluded from jPanel Menu on mobile-->
				<div class="hidden-elements jpanel-menu-exclude"> 
					<!--@modal - signup modal-->
					<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Sign Up</h4>
								</div>
								<div class="modal-body">
									<form action="signup.htm" role="form">
										<h5>Price Plan</h5>
										<select class="form-control">
											<option>Basic</option>
											<option>Pro</option>
											<option>Pro +</option>
										</select>
										<h5>Account Information</h5>
										<div class="form-group">
											<label class="sr-only" for="signup-first-name">First Name</label>
											<input type="text" class="form-control" id="signup-first-name" placeholder="First name">
										</div>
										<div class="form-group">
											<label class="sr-only" for="signup-last-name">Last Name</label>
											<input type="text" class="form-control" id="signup-last-name" placeholder="Last name">
										</div>
										<div class="form-group">
											<label class="sr-only" for="signup-username">Userame</label>
											<input type="text" class="form-control" id="signup-username" placeholder="Username">
										</div>
										<div class="form-group">
											<label class="sr-only" for="signup-email">Email address</label>
											<input type="email" class="form-control" id="signup-email" placeholder="Email address">
										</div>
										<div class="form-group">
											<label class="sr-only" for="signup-password">Password</label>
											<input type="password" class="form-control" id="signup-password" placeholder="Password">
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="term">
												I agree with the Terms and Conditions.
											</label>
										</div>
										<button class="btn btn-primary" type="submit">Sign up</button>
									</form>
								</div>
								<div class="modal-footer"> <small>Already signed up? <a href="login.htm">Login here</a>.</small>
								</div>
							</div><!-- /.modal-content --> 
						</div><!-- /.modal-dialog --> 
					</div><!-- /.modal --> 

					<!--@modal - login modal-->
					<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Login</h4>
								</div>
								<div class="modal-body">
									<form action="login.htm" role="form">
										<div class="form-group">
											<label class="sr-only" for="login-email">Email</label>
											<input type="email" id="login-email" class="form-control email" placeholder="Email">
										</div>
										<div class="form-group">
											<label class="sr-only" for="login-password">Password</label>
											<input type="password" id="login-password" class="form-control password" placeholder="Password">
										</div>
										<button type="button" class="btn btn-primary">Login</button>
									</form>
								</div>
								<div class="modal-footer"> <small>Not a member? <a href="#" class="signup">Sign up now!</a></small><br />
									<small><a href="#">Forgotten password?</a></small>
								</div>
							</div><!-- /.modal-content --> 
						</div><!-- /.modal-dialog --> 
					</div><!-- /.modal --> 
				</div>
			</div>
		</div>
	</div>
		
	<!--Scripts --> 
	<script src="/js/jquery.min.js"></script> 
	<script src="/js/jquery-migrate-1.2.1.min.js"></script> <!--Legacy jQuery support for quicksand plugin--> 

	<!-- Bootstrap JS --> 
	<script src="/js/bootstrap.min.js"></script> 

	<!--JS plugins--> 
	<script src="/plugins/flexslider/jquery.flexslider-min.js"></script> 
	<script src="/plugins/clingify/jquery.clingify.min.js"></script> 
	<script src="/plugins/jPanelMenu/jquery.jpanelmenu.min.js"></script> 
	<script src="/plugins/jRespond/js/jRespond.js"></script> 
	<script src="/plugins/quicksand/jquery.quicksand.js"></script> 

	<!--Custom scripts mainly used to trigger libraries --> 
	<script src="/js/script.min.js"></script>
</body>
</html>