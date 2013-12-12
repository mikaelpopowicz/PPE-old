<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en" dir="ltr"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en" dir="ltr"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" dir="ltr"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" dir="ltr" lang="en"><!--<![endif]-->
<head>
		<title>CoachMe.fr</title>
		
		<!-- Meta Data ================ -->
		<meta charset="UTF-8"/>
		<meta content="Fill this in with your information" name="description"/>
		
		<!--- highly suggested that you un-comment this on a live site 
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		-->

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta content="yes" name="apple-mobile-web-app-capable"/>
		
		<!-- CSS ================ -->
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="/assets/css/theme.reset.min.css" rel="stylesheet" type="text/css"/>
		<link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
		
		
		
		<link rel="stylesheet" type="text/css" media="print" href="/assets/css/print.css" />
		

		<!-- Icons ================ put your icons and favicons below -->
		<!--http://mathiasbynens.be/notes/touch-icons-->

		<!-- Open Graph for facebook http://graph.facebook.com/[UserName] replace [UserName] with yours and get your fb:admis content information where the XXXX goes.
		================================================== -->

		<meta content="" property="og:title"/>
		<meta content="" property="og:type"/>
		<meta content="" property="og:url"/>
		<meta content="" property="og:image"/>
		<meta content="" property="og:site_name"/>
		<meta content="XXXXX" property="fb:admins"/>
		<meta content="en_us" property="og:locale"/>
		<meta content=" " property="og:description"/>
		
		<!-- JS JQuery in the head you can use ajax if you want ================ -->
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/assets/js/jquery-1.9.1.min.js"><\/script>')</script>

		<!--animated slider AND loading note two different scripts one for shitty browsers and one for modern --> 
<!--[if gt IE 8]><!-->
<script src='/assets/js/sequence-greater-than-ie-8.jquery-min.js'></script>
<!--<![endif]-->
<!--[if lte IE 8]><script src='/assets/js/sequence-less-than-ie-8.jquery-min.js'></script><!--<![endif]-->
		
		<!-- Add to HEAD after style sheet http://modernizr.com/docs/#installing  ================ -->
		<script src="/assets/js/modernizr.custom.js?v=2.6.2"></script>

		
</head>
<body>
 
<!--[if lt IE 7]>
<p class="chromeframe">Your browser is over 12 years old. You are using an <strong>outdated</strong> browser. Please <a href="http://www.google.com/chrome/intl/en/landing_chrome.html">upgrade your browser</a>.</p>
<![endif]--> 

	<!-- begin accesibility skip to nav skip content -->
	<ul class="visuallyhidden" id="top">
		<li><a href="#nav" title="Skip to navigation" accesskey="n">Skip to navigation</a></li>
		<li><a href="#page" title="Skip to content" accesskey="c">Skip to content</a></li>
	</ul>
	<!-- end /.visuallyhidden accesibility--> 

	<!-- begin .header-->
	<header class="header clearfix">
 

		<!-- mobile navigation trigger-->
		<h5 class="mobile_nav"><a href="javascript:void(0)">&nbsp;<span></span> </a> </h5>

		<!--******this uses the bootstrap navbar menus but with added support for submenus (they are dropping these in 3.0 and their support in 2X was crap).
		I modified the JS, added some script, and adjusted the css.
		I commented and separeated the html so you can apply it to your site/menu system easier. Note the additional classes for this theme.
		*******-->
		<div id="nav">
			<!--accesibility-->
			<div class="navbar secondary-menu">
				<div class="container">
					<div class="navbar-inner">
						<div class="nav-collapse collapse">
							<ul class="nav accordmobile pull-right"><!--accordmobile comes in when the browser is at 979px and below, it fixes bugs with bootstrap's toggles of multiple level dropdowns which they are dropping support for and they had lousy support in 2x-->
								<li><a href="register.html">Créer un compte <i class="e-icon-pencil"></i></a></li>
										
								<!--begin .dropdown .parent -->
								<li class="dropdown parent"> <a class="dropdown-toggle" href="#" data-toggle="dropdown">Connexion <i class="e-icon-login"></i></a>
									<ul class="dropdown-menu signin"><!--begin .dropdown-menu .signin -->			
										<li><!--begin list item / everything goes inside the list item-->
											<form><!--begin form add your stuff -->
												<input type="text" placeholder="Email">
												<input type="password" placeholder="Mot de passe">
												<label class="checkbox">
													<input type="checkbox">
													Se souvenir de moi
												</label>
												<button type="submit" class="btn custom-btn btn-primary">Connexion</button>
											</form>
										</li><!--end list item-->
										<li class="divider"></li><!--divider -->		
										<li><a href="/connexion/mot-de-passe-perdu">Mot de passe oublié ?</a></li>			
									</ul><!--close .dropdown-menu .signin -->
								</li><!--close .dropdown .parent -->
										
								<!--begin .dropdown .parent -->
								<li class="dropdown parent"> <a class="dropdown-toggle" href="#" data-toggle="dropdown">Connect <i class="e-icon-comment"></i></a>
									<ul class="dropdown-menu"> <!--begin .dropdown-menu -->
										<li><a href="mailto:contact@longdomaingoeshere.com">email: contact@longdomaingoeshere.com</a></li>
										<li class="divider"></li>
										<li class="nav-header">Sign Up For News!</li>
										<li>
											<form action="yourscript.php" method="post">
												<div class="input-append custom-append">
													<input type="email" placeholder="Email Address" name="email" />
													<button class="btn btn-primary">Sign Up</button>
												</div>
											<!--close input-append-->
											</form>
										</li>
										<li class="divider"></li><!--divider -->
										<li class="nav-header">Follow Us!</li><!--nav-header -->
										<li>
											<div class="social clearfix">
												<a class="fc-webicon rss round" href="#" title="RSS"></a>
												<a class="fc-webicon facebook round" href="#" title="Facebook"></a>
												<a class="fc-webicon twitter  round" href="#" title="Twitter"></a>
												<a class="fc-webicon skype round" href="#" title="Skype"></a>
												<a class="fc-webicon dribbble round" href="#" title="dribble"></a>
												<a class="fc-webicon linkedin round" href="#" title="Skype"></a>
												<a class="fc-webicon pinterest round" href="#" title="pinterest"></a>
											</div><!-- close div .social-->
										</li>
									</ul>
								</li><!--close .dropdown .parent -->

								<!--begin .dropdown .parent -->
								<li class="dropdown parent"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mon compte <i class="e-icon-cog"></i></a>
									<ul class="dropdown-menu">
										<li class="current-user">
											<a href="#"> <img class="avatar" src="https://twimg0-a.akamaihd.net/profile_images/568222624/ILUSWEETC_normal.jpg" alt="Christina Arasmo">
												<div class="name">
													<b class="fullname">User Name Goes Here</b><br>
													<small> Edit profile </small>
												</div>
											</a>
										</li>
										<li class="divider"></li>
										<li><a href="#">Link Here</a></li>
										<li><a href="#">Line Here</a></li>
										<li class="divider"></li>
										<li><a href="#">Help</a></li>
										<li class="divider"></li>
										<li><a href="#">Settings</a></li>
										<li> <a class="js-signout-button" href="#" data-nav="logout">Déconnexion</a>
											<form class="dropdown-link-form signout-form" id="signout-form" action="/connexion/logout" method="post">
												<input type="hidden" value="" name="" class="">
												<input type="hidden" name="" class="">
												<input type="hidden" name="">
											</form>
										</li>
									</ul><!--close .dropdown-menu -->
								</li><!--close .dropdown .parent -->
												
								<li class="divider-vertical"></li>
										
								<li class="search-wrapper">
									<form action="someaction.php" method="post">
										<div id="search-trigger">
											<i class="e-icon-search"></i>
										</div>
										<input placeholder="search + enter" type="text">
									</form>
								</li>
							</ul><!-- close nav accordmobile-->
						</div>
						<!--/.nav-collapse -->
					</div>
					<!-- /.navbar-inner -->
				</div>
				<!--/.container -->
			</div>
			<!-- /.navbar -->
		
			<div class="container">
				<div class="navbar primary-menu">
					<div class="navbar-inner">
						<div class="nav-collapse collapse">
							<ul class="nav accordmobile">
								<li class="active"><a href="/">Accueil</a></li>
								<li><a href="/">Trouver un coach</a></li>
								<li><a href="/">Nous rejoindre</a></li>
								<li><a href="/">A propos</a></li>
								<li><a href="/">Contact</a></li>
								<!-- Template Stuff menu
								<li class="dropdown parent">
									<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Features <i class="e-icon-down-open-mini"></i></a>
									<ul class="dropdown-menu">
										<li><a href="simple-header.html">Simple Header</a></li>
										<li><a href="text-logo.html">Text Logo</a></li>
										<li><a href="hero-unit.html">Hero Unit</a></li>
										<li><a href="columns.html">Inner Columns</a></li>
										<li><a href="equal-height-columns.html">Equal Height Columns</a></li>
										<li><a href="toggles.html">Toggles</a></li>
										<li><a href="figures-images.html">Figures and Images</a></li>
										<li class="dropdown-submenu parent">
											<a href="javascript:void(0)">Icons <i class="e-icon-right-open-mini"></i></a>
											<ul class="dropdown-menu">
												<li><a href="font-awesome-icons.html">Font Awesome</a></li>
												<li><a href="entypo-icons.html">Entypo Icons</a></li>
												<li><a href="social-icons.html">Social Icons</a></li>
											</ul>
										</li>
										<li><a href="typography-elements.html">Typography & Elements</a></li>
										<li><a href="misc-components.html">Bootstrap Components</a></li>
										<li><a href="custom-bootstrap-form-elements.html">Custom Form Elements</a></li>
									</ul>
								</li>
								<li class="dropdown parent">
									<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Portfolio <i class="e-icon-down-open-mini"></i></a>
									<ul class="dropdown-menu">
										<li><a href="portfolio-masonry.html">Filtered Grid</a></li>
										<li><a href="portfolio-single.html">Single Item (image slider)</a></li>
										<li><a href="image-gallery.html">Simple Image Gallery</a></li>
										<li><a href="image-gallery-2.html">Simple Image Gallery 2</a></li>
									</ul>
								</li>
								<li class="dropdown parent">
									<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="e-icon-down-open-mini"></i></a>
									<ul class="dropdown-menu">
										<li><a href="blog-traditional-summary.html">Traditional Summary</a></li>
										<li><a href="blog.html">Masonry Summary</a></li>
										<li><a href="blog-single.html">Single Post</a></li>
									</ul>
								</li>
								<li class="dropdown parent">
									<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="e-icon-down-open-mini"></i></a>
									<ul class="dropdown-menu">
										<li><a href="coming-soon.html">Coming Soon</a></li>
										<li><a href="index.html">Animated Slider</a></li>
										<li><a href="full-width-flex.html">Full Width FlexSlider</a></li>
										<li><a href="variable-width-image-slider.html">Variable Width Image Slider</a></li>
										<li><a href="feature-strip-slider.html">Feature Strip Image Slider</a></li>
										<li><a href="generic-layout-1.html">Nested Row Fluid Example</a></li>
										<li class="dropdown-submenu parent">
											<a href="javascript:void(0)">Layouts <i class="e-icon-right-open-mini"></i></a>
											<ul class="dropdown-menu pull-right">
												<li><a href="two-columns-right-sidebar.html">Two Columns Right</a></li>
												<li><a href="two-columns-left-sidebar.html">Two Columns Left </a></li>
												<li><a href="holy-grail-three-columns.html">Holy Grail (3 Col)</a></li>
												<li><a href="contemporary-three-columns.html">Contemporary (3 Col)</a></li>
											</ul>
										</li>
										<li><a href="register.html">Register</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="pricing-tables.html">Pricing Tables</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="testimonials.html">Testimonials</a></li>
										<li><a href="faq.html">FAQ</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="info.html">Instructions</a></li>
								-->
							</ul>
						</div>
						<!--/.nav-collapse -->
					</div>
					<!-- /.navbar-inner -->
				</div>
				<!-- /.navbar --> 

				<div id="logo">
					<a href="/"></a>
					<object class="logo-svg" data="/assets/images/logo.svg" type="image/svg+xml">
					</object>
					<img src="/assets/images/logo.png" alt="Corporate-Elegance Responsive Retina Ready Portfolio Business"/><!--.no-svg fallback-->
				</div> 
				<!-- end #logo --> 
				<!-- ******* print stuff --><div class="print">Phone, name of company etc., for printing</div>
			</div>
			<!-- /.container --> 
		</div>
		<!--close #nav-->
 
	</header><!-- close /.header --> 

	<!-- begin #page - the container for everything but header -->
	<div id="page" class="clearfix">
		<div class="main-content">
			<div class="container">	
				<h3 class="short_headline"><span>Easy Equal Heights</span></h3>
				<div class="row-fluid equal featured-columns"> <!-- add class equal to the surrounding row-fluid class you can stick anything you want in here, this is an example with some custom css-->
					<div class="span4">
						<a href="#" class="innershadow"><img class="banner-img" src="demo/eqh/1.jpg" alt=""></a> <!-- the class innershadow can be any wrapping tag (div,span), if you want a link on the image, then use an a tag-->
						<div class="content">
							<h3 class="primary-color">Copy fitting is a pain</h3>
							<p>Copy fitting is a pain. Now you dont' have to be perfect and all the heights are equal. If all of this may seem wonderful to you, that's because it is! Our functionality is unparalleled in the industry.</p>
							<p class="text-right last"><a href="#" class="btn custom-btn btn-small btn-very-subtle">More &rarr;</a></p>
						</div>
					</div>
					<div class="span4">
						<a href="#" class="innershadow"><img class="banner-img" src="demo/eqh/2.jpg" alt=""></a>
						<div class="content">
							<h3 class="primary-color">Super Simple Lean Mark Up</h3>
							<p>We have proven we know that it is better to disintermediate intuitively than to expedite virally. The dot-com, mission-critical structuring factor can be summed up in one word: compelling.</p>
							<p class="text-right last"><a href="#" class="btn custom-btn btn-small btn-very-subtle">More &rarr;</a></p>
						</div>
					</div>
					<div class="span4">
						<a href="#" class="innershadow"><img class="banner-img" src="demo/eqh/3.jpg" alt=""></a>
						<div class="content">
							<h3 class="primary-color">Responsive Equal Heights</h3>
							<p>The accounting factor is short-term. Our functionality is unmatched, but our transparent models and user-proof configuration is constantly considered a remarkable achievement.</p>
							<p class="text-right last"><a href="#" class="btn custom-btn btn-small btn-very-subtle">More &rarr;</a></p>
						</div>
					</div>
				</div>
				<!--close row-fluid -->
			</div><!--close .container-->
			<!--this is not inside a .container div because it's not very long. You'll need to adjust the html and the css if you use this differently-->
			<section class="call-to-action">
				<h2>So what are you waiting for? This is it.</h2> <a class="btn custom-btn btn-large btn-primary" href="pricing-tables.html">Order today! <i class=" e-icon-forward"></i></a>
			</section><!--close .call-to-action-->
			<section class="strip">
				<div class="container">
					<h3 class="short_headline"><span>Portfolio</span></h3>
					<div class="row-fluid">
						<div class="span4">
							<p>Images in public domain. We will increase our aptitude to evolve without decrementing our capacity to leverage. It may seem marvelous, but it&#039;s true!</p>
							<p> We apply the proverb "Look before you leap" not only to our structuring but our power to mesh. We practically invented the term "e-businesses". We invariably revolutionize robust obfuscation. That is a remarkable achievement considering the current and previous fiscal year's financial state of things! Is it more important for something to be virally-distributed or to be user-defined? The R&amp;D factor is real-time. The CAD factor is 24/7, best-of-breed. Your budget for empowering should be at least one-tenth of your budget for reintermediating. </p>
						</div>
						<!--close span6--> 
						<!-- thumbnail layout-->
						<div class="span8">
							<div class="thumb-gallery three-columns">
								<ul class="icon-hover">
									<li><span class="innershadow"><img src="demo/fresh-work/1.jpg" alt="" /></span><!--this an example of using the innershadow on this gallery, I don't apply it site wide -->
										<div>
											<span><a href="portfolio-single.html"><i class="e-icon-link"></i></a>
												<a class="fancyme" data-fancybox-group="gallery" href="demo/portfolio/larger-image-fpo.png"><i class=" e-icon-popup"></i></a></span>
										</div>
									</li>
									<li><span class="innershadow"><img src="demo/fresh-work/2.jpg" alt="" /></span>
										<div>
											<span><a href="portfolio-single.html"><i class="e-icon-link"></i></a>
												<a class="fancyme" data-fancybox-group="gallery" href="demo/portfolio/larger-image-fpo.png"><i class=" e-icon-popup"></i></a></span>
										</div>
									</li>
									<li><span class="innershadow"><img src="demo/fresh-work/9.jpg" alt="" /></span>
										<div>
											<span><a href="portfolio-single.html"><i class="e-icon-link"></i></a>
												<a class="fancyme" data-fancybox-group="gallery" href="demo/portfolio/larger-image-fpo.png"><i class=" e-icon-popup"></i></a></span>
										</div>
									</li>
									<li><span class="innershadow"><img src="demo/fresh-work/4.jpg" alt="" /></span>
										<div>
											<span><a href="portfolio-single.html"><i class="e-icon-link"></i></a>
											<a class="fancyme" data-fancybox-group="gallery" href="demo/portfolio/larger-image-fpo.png"><i class=" e-icon-popup"></i></a></span>
										</div>
									</li>
									<li><span class="innershadow"><img src="demo/fresh-work/5.jpg" alt="" /></span>
										<div>
											<span><a href="portfolio-single.html"><i class="e-icon-link"></i></a>
												<a class="fancyme" data-fancybox-group="gallery" href="demo/portfolio/larger-image-fpo.png"><i class=" e-icon-popup"></i></a></span>
											</div>
									</li>
									<li><span class="innershadow"><img src="demo/fresh-work/7.jpg" alt="" /></span>
										<div>
											<span><a href="portfolio-single.html"><i class="e-icon-link"></i></a>
												<a class="fancyme" data-fancybox-group="gallery" href="demo/portfolio/larger-image-fpo.png"><i class=" e-icon-popup"></i></a></span>
										</div>
									</li>
								</ul>
							</div>
							<!--close .thumb-gallery-->
						</div>
						<!--close span6-->
					</div>
					<!--close row-fluid-->
		
				</div><!--close .container-->
			</section><!--close .strip-->


			<div class="container">
				<div class="row-fluid">
					<div class="span4">
						<div class="well">
							<h4 class="primary-color">Amplify our power to benchmark</h4>
							<p> <img class="alignleft" src="demo/well-fpo.png" alt="" /> Without reporting, you will lack eyeballs. We will amplify our power to benchmark without decreasing our capacity to mesh. We will reinvent the buzzword "frictionless". </p>
							<p class="text-right"><a href="#" class="btn custom-btn btn-primary">Linktoit</a></p>
						</div>
						<!--close .well -->
					</div>
					<!--close span4-->
				
					<div class="rotating-testimonials span8">
						<!--"rotating-testimonials" is a required class-->
						<h3 class="short_headline"><span>Testimonials</span></h3>
						<div class="panels">
							<div id="t1">
								<blockquote>
									<p>One isn’t necessarily born with courage, but one is born with potential. Without courage, we cannot practice any other virtue with consistency. We can’t be kind, true, merciful, generous, or honest.</p>
									<footer>Maya Angelou</footer>
								</blockquote>
							</div>
							<!--close #t1 -->
							<div id="t2">
								<blockquote>
									<p>When the highest type of people hear Tao (Truth), they diligently practice it. When the average type of people hear Tao, they half believe in it. When the lowest type of people hear Tao, they laugh at it. If they did not laugh, it would not be Tao.</p>
									<footer>Lao-Tzu</footer>
								</blockquote>
							</div>
							<!--close #t2 -->
							<div id="t3">
								<blockquote>
									<p>The human being is part of the whole, called by us the ‘universe’, a part limited in time and space. He experiences himself, his thoughts and feelings, as something separate from the rest — a kind of optical delusion of consciousness. This delusion is a kind of prison for us, restricting us to our personal desires. Our task must be to free ourselves from this prison by widening our circle of compassion to embrace all living creatures and the whole of nature in its beauty.</p>
									<footer>Albert Einstein</footer>
								</blockquote>
							</div>
							<!--close #t3 -->
							<div id="t4">
								<blockquote>
									<p>Whatever course you decide upon, there is always someone to tell you that you are wrong. There are always difficulties arising which tempt you to believe that your critics are right. To map out a course of action and follow it to an end requires courage.</p>
									<footer>Ralph Waldo Emerson</footer>
								</blockquote>
							</div>
							<!--close #t4 -->
						</div>
						<!--close panels-->
						<ul class="tabs">
							<li class="tab"><a href="#t1">maya-angelou</a></li>
							<li class="tab"><a href="#t2">lao-tzu</a></li>
							<li class="tab"><a href="#t3">albert-einstein</a></li>
							<li class="tab"><a href="#t4">ralph-waldo-emerson</a></li>
						</ul>
						<p class="text-right"><a href="testimonials.html" class="btn custom-btn btn-small btn-very-subtle">All Testimonials</a></p>
					</div>
					<!-- end rotating-testimonials span8-->
				</div>
				<!-- end row-fluid-->
			</div><!--close .container-->
		</div><!--close .main-content-->		
		 
		<!--begin footer -->
		<footer class="footer clearfix">
			<div class="container">
				<!--footer container-->
				<div class="row-fluid">
					<div class="span3">
						<section>
							<h4>Contact Us</h4>
							<p>Corporate-Elegance Creative<br>
							1255 Nowhere Street<br>
							Tampa, FL 33655<br>
							<strong>phone:</strong> <a href="tel:8135551234" class="tele">813.555.1234</a><br>
							<strong>fax:</strong> 813.555.1235<br>
							<span class="overflow"><strong>email:</strong> <a href="mailto:email@domain.com">email@companydomain.com</a></span> </p>
						</section>
						<!--close section-->
						<section>
							<h4>Follow Us</h4>
							<ul class="social">
								<li><a class="fc-webicon rss round" href="#" title="RSS"></a></li>
								<li><a class="fc-webicon facebook round" href="#" title="Facebook"></a></li>
								<li><a class="fc-webicon twitter round" href="#" title="Twitter"></a></li>
								<li><a class="fc-webicon skype round" href="#" title="Skype"></a></li>
								<li><a class="fc-webicon dribbble round" href="#" title="dribble"></a></li>
								<li><a class="fc-webicon linkedin round" href="#" title="Skype"></a></li>
							</ul>
						</section>
						<!--close section-->
					</div>
					<!-- close .span3 --> 
					<!--section containing newsletter signup and recent images-->
					<div class="span5">
						<section>
							<h4>Stay Updated</h4>
							<p>Sign up for our newsletter. We won't share your email address.</p>
							<form action="yourscript.php" method="post">
								<div class="input-append append-fix custom-append row-fluid">
									<input type="email" class="span8" placeholder="Email Address" name="email" />
									<button class="btn btn-primary">Sign Up</button>
								</div>
								<!--close input-append--> 
							</form>
						</section>
						<!--close section-->
						<section>
							<h4>Recent Images</h4>
								<ul class="image-widget clearfix">
									<li><a href="#"><img src="demo/image-widget/1.png" alt="" /></a></li>
									<li><a href="#"><img src="demo/image-widget/2.png" alt="" /></a></li>
									<li><a href="#"><img src="demo/image-widget/3.png" alt="" /></a></li>
									<li><a href="#"><img src="demo/image-widget/4.png" alt="" /></a></li>
									<li><a href="#"><img src="demo/image-widget/5.png" alt="" /></a></li>
									<li><a href="#"><img src="demo/image-widget/6.png" alt="" /></a></li>
									<li><a href="#"><img src="demo/image-widget/7.png" alt="" /></a></li>
									<li><a href="#"><img src="demo/image-widget/8.png" alt="" /></a></li>
									<li><a href="#"><img src="demo/image-widget/9.png" alt="" /></a></li>
									<li><a href="#"><img src="demo/image-widget/10.png" alt="" /></a></li>
									<li><a href="#"><img src="demo/image-widget/11.png" alt="" /></a></li>
									<li><a href="#"><img src="demo/image-widget/12.png" alt="" /></a></li>
								</ul>
						</section>
						<!--close section-->
					</div>
					<!-- close .span5 --> 
					<!--section containing blog posts-->
					<div class="span4">
						<section>
							<h4>About Us</h4>
							<p>Immortal robot bodies are the new rage. Religion can’t provide immortal robot bodies. Flying heads in bubbles are also popular. The cost of preserving a head is much less than the entire body and at least you can keep your face. But with the immortal robot, after you die, your soul or spirit is digitized and your flesh body rots, but you don’t care, ‘cause having an immortal robot body is ultra cool and sexy. While you’re still on earth, your immortal robot body sits in storage ready for the fateful day. You betcha, it does provide peace of mind or piece of mind. <span class="small">© Christina Arasmo Beymer (me).</span></p>
						</section>
					</div>
					<!-- close .span4 -->
				</div>
				<!-- close .row-fluid-->
			</div>
			<!-- close footer .container--> 
		</footer>
		<!--/close footer--> 

		<!--change this to your stuff-->
		<section class="footer-credits">
			<div class="container">
				<ul class="clearfix">
					<li>© 2013 CoachMe. All rights reserved.</li>
					<li><a href="#">Conditions d'utilisation</a></li>
					<li><a href="#">Politique de confidentialité</a></li>
				</ul>
			</div>
			<!--close footer-credits container--> 
		</section>
		<!--close section .footer-credits--> 
		<span class="backToTop"><a href=""><i class="e-icon-up-open-big"></i></a></span>
	</div>
	<!-- close #page-->

	<!-- JS General Site COMBINE AND COMPRESS WHEN YOU FIGURE OUT WHAT YOU WANT TO USE comes with unpacked versions ================ --> 
	<script src='/assets/js/theme-menu.js'></script><!-- menu --> 
	<script src='/assets/js/jquery.easing-1.3.min.js'></script><!-- easing --> 
	<script src='/assets/js/bootstrap.min.js'></script><!-- bootstrap / custom.js loads --> 
	<script src='/assets/js/jquery.easytabs.min.js'></script><!-- tabs/testimonials custom.js / loads --> 
	<script src='/assets/js/slide-to-top-accordion.min.js'></script><!-- slide to top accordion toggle / custom.js loads --> 
	<script src='/assets/js/bootstrap-progressbar.min.js'></script><!-- progress bar loading in page --> 

	<!-- Fancy Box and Isotope ================ --> 
	<script src='/assets/js/jquery.isotope.min.js'></script><!--filter masonry script AND loading--> 
	<script src='/assets/js/fancybox/source/custom-fancybox-combined.js' defer></script><!--all fancy box buttons, media, helpers, thumbs AND loading--> 

	<!-- Sliders ================ --> 
	<script src='/assets/js/jquery.flexslider.min.js'></script><!--flexslider (twitter, blog, portfolio, full width) AND loading --> 
	<script src='/assets/js/lemmon-slider.min.js'></script><!-- variable width image slider AND loading --> 

	<!--initialize scripts / custom scripts--> 
	<script src='/assets/js/custom.js'></script> 	
</body>
</html>