<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themelize.me/demos/appstrap2.0/theme/index.htm by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Sep 2013 11:57:33 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>AppStrap Bootstrap Theme by Themelize.me</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- @todo: fill with your company info or remove -->
	<meta name="description" content="">
	<meta name="author" content="Themelize.html">

	<!-- Bootstrap CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="/css/font-awesome.min.css" rel="stylesheet">

	<!-- Plugins -->
	<link href="/plugins/animate/animate.css" rel="stylesheet">
	<link href="/plugins/flexslider/flexslider.css" rel="stylesheet">
	<link href="/plugins/clingify/clingify.css" rel="stylesheet">

	<!-- Theme style -->
	<link href="/css/theme-style.css" rel="stylesheet">

	<!--Your custom colour override-->
	<link href="#" id="colour-scheme" rel="stylesheet">

	<!-- Your custom override -->
	<link href="/css/custom-style.css" rel="stylesheet">

	<!-- Le fav and touch icons - @todo: fill with your icons or remove -->
	<link rel="shortcut icon" href="/img/icons/favicon.html">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/icons/114x114.html">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/icons/72x72.html">
	<link rel="apple-touch-icon-precomposed" href="/img/icons/default.html">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Rambla|Calligraffitti' rel='stylesheet' type='text/css'>

	<!--Retina.js plugin - @see: http://retinajs.com/-->
	<script src="/plugins/retina/js/retina-1.1.0.min.js"></script>
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
							<p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
							<a href="about.htm" class="btn btn-sm btn-primary">Find out more</a> </div>
							<div class="col-sm-4 col-md-4"> 
								<!--@todo: replace with company contact details-->
								<h3>Contact Us</h3>
								<address>
									<p><abbr title="Phone"><i class="icon-phone"></i></abbr> 019223 8092344</p>
									<p><abbr title="Email"><i class="icon-envelope"></i></abbr> info@themelize.me</p>
								</address>
							</div>
							<div class="col-sm-4 col-md-4"> 
								<!--Colour Switch for demo - @todo: remove in production-->
								<div class="colour-switcher">
									<h3>Couleurs du thème</h3>
									<a href="#green" class="green active" data-toggle="tooltip" data-placement="bottom" data-original-title="Green (Default)">Green</a> <a href="#red" class="red" data-toggle="tooltip" data-placement="bottom" data-original-title="Red">Red</a> <a href="#blue" class="blue" data-toggle="tooltip" data-placement="bottom" data-original-title="Blue">Blue</a>
									<p>Cookies are NOT enabled so colour selection is not persistent.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
    
				<!--Header & Branding region-->
				<div class="header">
					<div class="header-inner container">
						<div class="row">
							<div class="col-md-8"> 
								<!--branding/logo--> 
								<a class="navbar-brand" href="index.htm" title="Home">
									<h1><span>Coach</span>Me<span>.</span></h1>
								</a>
								<div class="slogan">Le coaching à portée de main</div>
							</div>
          
							<!--header rightside-->
							<div class="col-md-4"> 
								<!--social media icons-->
								<div class="social-media"> 
									<!--@todo: replace with company social media details--> 
									<a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-facebook"></i></a> <a href="#"><i class="icon-linkedin"></i></a> <a href="#"><i class="icon-google-plus"></i></a> </div>
								</div>
							</div>
							<div id="header-hidden-link"> <a href="#" title="Click me you'll get a surprise" class="show-hide" data-toggle="show-hide" data-target=".header-hidden"><i></i>Open</a> </div>
						</div>
					</div>
					<div class="container" data-toggle="clingify">
						<div class="navbar">
							<a class="navbar-btn" data-toggle="jpanel-menu" data-target=".navbar-collapse"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </a> 
        
							<!--user menu-->
							<div class="btn-group user-menu pull-right"> <a href="#signup-modal" class="btn btn-primary signup" data-toggle="modal">Sign Up</a> <a href="#login-modal" class="btn btn-primary dropdown-toggle login" data-toggle="modal">Login</a> </div>
        
							<!--everything within this div is collapsed on mobile-->
							<div class="navbar-collapse collapse"> 
          
								<!--main navigation-->
								<ul class="nav" id="main-menu">
									<li class="home-link"><a href="index.htm"><i class="icon-home"></i><span class="hidden">Home</span></a></li>
									<li class="dropdown"><a href="features.htm" class="dropdown-toggle menu-item" id="features-drop" data-toggle="dropdown">Features +</a> 
										<!-- Dropdown Menu - Mega Menu -->
										<ul class="dropdown-menu mega-menu" role="menu" aria-labelledby="features-drop">
											<li class="mega-menu-wrapper" role="menuitem"> <span class="menu-title">Mega Menu with links & text items</span>
												<ul class="row list-unstyled" role="menu">
													<li class="col-md-4" role="menuitem"> <a href="features.htm" class="img-link"><img src="img/features/feature-1.png" alt="Feature 1" /></a> <a href="features.htm" tabindex="-1" class="menu-item">Mobile Friendly</a> <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> </li>
													<li class="col-md-4" role="menuitem"> <a href="features.htm" class="img-link"><img src="img/features/feature-2.png" alt="Feature 2" /></a> <a href="features.htm" tabindex="-1" class="menu-item">24/7 Support</a> <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> </li>
													<li class="col-md-4" role="menuitem"> <a href="features.htm" class="img-link"><img src="img/features/feature-3.png" alt="Feature 2" /></a> <a href="features.htm" tabindex="-1" class="menu-item">99% Uptime</a> <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> </li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="pricing.htm" class="menu-item">Pricing</a></li>
									<li><a href="customers.htm" class="menu-item">Customers</a></li>
									<li class="dropdown"> <a href="about.htm" class="dropdown-toggle" id="about-drop" data-toggle="dropdown">About +</a> 
										<!-- Dropdown Menu -->
										<ul class="dropdown-menu" role="menu" aria-labelledby="about-drop">
											<li role="menuitem"><a href="about.htm" tabindex="-1" class="menu-item">About Us</a></li>
											<li role="menuitem"><a href="team.htm" tabindex="-1" class="menu-item">Our Team</a></li>
											<li role="menuitem"><a href="contact.htm" tabindex="-1" class="menu-item">Contact</a></li>
										</ul>
									</li>
									<li class="dropdown"> <a href="blog.htm" class="dropdown-toggle" id="blog-drop" data-toggle="dropdown">Blog +</a> 
										<!-- Dropdown Menu -->
										<ul class="dropdown-menu pull-left" role="menu" aria-labelledby="blog-drop">
											<li role="menuitem"><a href="blog.htm" tabindex="-1" class="menu-item">Right Sidebar</a></li>
											<li role="menuitem"><a href="blog-leftbar.htm" tabindex="-1" class="menu-item">Left Sidebar</a></li>
											<li role="menuitem"><a href="blog-post.htm" tabindex="-1" class="menu-item">Blog Post</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="pages.htm" class="dropdown-toggle" id="pages-drop" data-toggle="dropdown">More +</a> 
										<!-- Dropdown Menu -->
										<ul class="dropdown-menu pull-left" role="menu" aria-labelledby="pages-drop">
											<li role="menuitem"><a href="login.htm" tabindex="-1" class="menu-item">Login</a></li>
											<li role="menuitem"><a href="signup.htm" tabindex="-1" class="menu-item">Sign Up</a></li>
											<li role="menuitem"><a href="starter.htm" tabindex="-1" class="menu-item">Starter Snippets</a></li>
											<li role="menuitem"><a href="index-static.htm" tabindex="-1" class="menu-item">Homepage Static Banner</a></li>
											<li role="menuitem"><a href="colours.htm" tabindex="-1" class="menu-item">Theme Colours</a></li>
											<li role="menuitem"><a href="elements.htm" tabindex="-1" class="menu-item">Theme Elements</a></li>
											<li role="menuitem"><a href="bs-mobile-menu.htm" tabindex="-1" class="menu-item">Bootstrap Mobile Menu</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<!--/.navbar-collapse --> 
						</div>
					</div>
				</div>
			</div>
		</div>
				
		<!--=== Start content  ===-->
				
				
		<br/>
				
				
		<!--=== End content  ===-->
	</div>

	<!-- FOOTER -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col">
					<div class="block contact-block"> 
						<!--@todo: replace with company contact details-->
						<h3>Contact Us</h3>
						<address>
							<p><abbr title="Phone"><i class="icon-phone"></i></abbr> 019223 8092344</p>
							<p><abbr title="Email"><i class="icon-envelope"></i></abbr> info@appstrap.me</p>
							<p><abbr title="Address"><i class="icon-home"></i></abbr> Sunshine House, Sunville. SUN12 8LU.</p>
						</address>
					</div>
				</div>
				<div class="col-md-5 col">
					<div class="block">
						<h3>About Us</h3>
						<p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
					</div>
				</div>
				<div class="col-md-4 col">
					<div class="block newsletter">
						<h3>Newsletter</h3>
						<p>Stay up to date with our latest news and product releases by signing up to our newsletter.</p>
						<!--@todo: replace with mailchimp code-->
						<form role="form">
							<div class="input-group input-group-sm">
								<label class="sr-only" for="email-field">Email</label>
								<input type="text" class="form-control" id="email-field" placeholder="Email">
								<span class="input-group-btn">
									<button class="btn btn-primary" type="button">Go!</button>
								</span> </div>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="toplink"><a href="#top" class="top-link" title="Back to top">Back To Top <i class="icon-chevron-up"></i></a></div>
					<!--@todo: replace with company copyright details-->
					<div class="subfooter">
						<div class="col-md-6">
							<p>Site template by <a href="#">AppStrap</a> | Copyright 2012 &copy; AppStrap</p>
						</div>
						<div class="col-md-6">
							<ul class="list-inline footer-menu">
								<li><a href="#">Terms</a></li>
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Contact Us</a></li>
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
							<form action="http://themelize.me/demos/appstrap2.0/theme/signup.htm" role="form">
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
										I agree with the Terms and Conditions. </label>
									</div>
									<button class="btn btn-primary" type="submit">Sign up</button>
								</form>
							</div>
							<div class="modal-footer"> <small>Already signed up? <a href="login.htm">Login here</a>.</small> </div>
						</div>
						<!-- /.modal-content --> 
					</div>
					<!-- /.modal-dialog --> 
				</div>
			</div>
			<!-- /.modal --> 
  
			<!--@modal - login modal-->
			<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Connexion</h4>
						</div>
						<div class="modal-body">
							<form action="/connexion/login" role="form">
								<div class="form-group">
									<label class="sr-only" for="login-email">Identifiant</label>
									<input type="email" id="login-email" class="form-control email" placeholder="Identifiant">
								</div>
								<div class="form-group">
									<label class="sr-only" for="login-password">Mot de passe</label>
									<input type="password" id="login-password" class="form-control password" placeholder="Password">
								</div>
								<button type="button" class="btn btn-primary">Connexion</button>
							</form>
						</div>
						<div class="modal-footer"> <small>Pas encore membre ? <a href="#" class="signup">Enregistrez-vous maintenant!</a></small><br />
							<small>
								<a href="#">
									Mot de passe oublié ?
								</a>
							</small>
						</div>
					</div>
					<!-- /.modal-content --> 
				</div>
				<!-- /.modal-dialog --> 
			</div>
			<!-- /.modal --> 
		</div>
	</footer>
						

	<!--Scripts --> 
	<script src="/js/jquery.js"></script> 
	<script src="../../../../code.jquery.com/jquery-migrate-1.2.1.min.js"></script> <!--Legacy jQuery support for quicksand plugin--> 

	<!-- Bootstrap JS --> 
	<script src="/js/bootstrap.min.js"></script> 

	<!--JS plugins--> 
	<script src="/plugins/flexslider/jquery.flexslider-min.js"></script> 
	<script src="/plugins/clingify/jquery.clingify.min.js"></script> 
	<script src="/plugins/jPanelMenu/jquery.jpanelmenu.min.js"></script> 
	<script src="/plugins/jRespond/js/jRespond.js"></script> 
	<script src="/plugins/quicksand/jquery.quicksand.js"></script> 

	<!--Custom scripts mainly used to trigger libraries --> 
	<script src="/js/script.js"></script>
</body>
</html>