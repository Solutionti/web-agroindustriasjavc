<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Contacto</title>
    <!-- CSS
		================================================== -->

<!-- Load google font
================================================== -->
<script type="text/javascript">
    WebFontConfig = {
        google: { families: [ 'Poppins:300,400,500,600,700', 'Raleway:400,400i,500,500i,700,700i'] }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + 
        '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>

<!-- Load other scripts
================================================== -->
<script type="text/javascript">
    var _html = document.documentElement;
    _html.className = _html.className.replace("no-js","js");
</script>
<script type="text/javascript" src="https://demo.artureanec.com/html/agricom/js/device.min.js"></script>
</head>
<body class="page page-contacts">

		<!-- start top bar -->
		<div id="top-bar" class="top-bar--style-1">
			<div class="container">
				<a id="top-bar__logo" class="site-logo" href="index.html">AGRICOM</a>

				<a id="top-bar__navigation-toggler" href="javascript:void(0);"><span></span></a>

				<nav id="top-bar__navigation" role="navigation">
					<ul>
						<li>
							<a href="javascript:void(0);">Home</a>

							<div class="submenu">
								<ul>
									<li><a href="index.html">Home Style 1</a></li>
									<li><a href="../style_2/index.html" target="_blank">Home Style 2</a></li>
									<li><a href="../landing/index.html" target="_blank">One Page</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="javascript:void(0);">Pages</a>

							<div class="submenu">
								<ul>
									<li><a href="about.html">about</a></li>
									<li><a href="products.html">products</a></li>
									<li><a href="product_case.html">product case</a></li>
									<li><a href="404.html">404 page</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="javascript:void(0);">Gallery</a>

							<div class="submenu">
								<ul>
									<li><a href="gallery_1.html">2 Columns</a></li>
									<li><a href="gallery_2.html">3 Columns</a></li>
									<li><a href="gallery_3.html">4 Columns</a></li>
									<li><a href="gallery_4.html">Masonry</a></li>
									<li><a href="gallery_5.html">Masonry 2</a></li>
								</ul>
							</div>
						</li>
						<li><a href="blog.html">Blog</a></li>
						<li class="current"><a href="contacts.html">Contacts</a></li>
						<li class="li-btn"> <a class="custom-btn primary" href="#spy-get-in-touch">Get in touch</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<header class="intro  align-items-center  jarallax" data-speed="0.5" data-img-position="50% 32%" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/img%20%2848%29.jpg');">

			<div class="pattern" style="opacity: 0.15;"></div>

			<div class="container">
				<div class="intro__text">
					<p class="intro__subtitle">agricom</p>
					<h1 class="intro__title">Contacts</h1>
				</div>
			</div>
		</header>
		<main role="main">
			<section class="section">
				<div class="container">
					<div class="contact-address">
						<address class="contact-address__inner">
							<div class="row justify-content-lg-around">
								<div class="col-md-4 col-lg-3">
									<div class="contact__item">
										<i class="contact__item__ico fontello-location"></i>
										<h4 class="contact__item__title">Adress</h4>
										<p>
											123 Sky Tower, West 21th Street,
											<br />
											Suite 721, NY
										</p>
									</div>
								</div>
								<div class="col-md-4 col-lg-3">
									<div class="contact__item">
										<i class="contact__item__ico fontello-phone-call"></i>
										<h4 class="contact__item__title">Phone</h4>
										<p>
											+844 123 456 789
											<br />
											+844 123 456 789
										</p>
									</div>
								</div>
								<div class="col-md-4 col-lg-3">
									<div class="contact__item">
										<i class="contact__item__ico fontello-mail"></i>

										<h4 class="contact__item__title">Email</h4>

										<p>
											<a href="mailto:contact@company.com">contact@company.com</a>
											<br />
											<a href="mailto:info@company.com">info@company.com</a>
										</p>
									</div>
								</div>
							</div>
						</address>
					</div>
				</div>
			</section>
			<!-- <section class="section section--no-pt">
				<div class="container">
					<div class="map-container">
						<div class="g_map" data-longitude="44.958309" data-latitude="34.109925" data-marker="../img/marker.png"></div>
					</div>
				</div>
			</section> -->
			<section class="section section--no-pt">
				<div class="container">
					<h4 class="h2">Send Message</h4>

					<form class="js-contact-form" action="#">
						<div class="row">
							<div class="col-md">
								<label class="input-wrp">
									<input class="textfield" type="text" placeholder="You name" name="name" />
								</label>
							</div>

							<div class="col-md">
								<label class="input-wrp">
									<input class="textfield" type="text" placeholder="E-mail" name="email" />
								</label>
							</div>
						</div>
						<label class="input-wrp">
							<textarea class="textfield" placeholder="Comment" name="message"></textarea>
						</label>

						<button class="custom-btn primary" type="submit" role="button">Send</button>

						<div class="form__note"></div>
					</form>
				</div>
			</section>
		</main>
		<footer id="footer" class="footer--style-1">
			<div class="footer__inner">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-4">
							<div class="footer__item">
								<a class="site-logo" href="index.html">AGRICOM</a>

								<p class="footer__copy">?? 2019, Agricom. All rights reserved.<br />Template by <a href="https://themeforest.net/user/artureanec" target="_blank">Artureanec</a></p>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="footer__item">
								<h3 class="footer__title">Additional menu</h3>

								<div class="row">
									<div class="col">
										<ul class="footer__menu">
											<li><a href="#">Home</a></li>
											<li><a href="#">Pages</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Contacts</a></li>
										</ul>
									</div>

									<div class="col">
										<ul class="footer__menu">
											<li><a href="#">My account</a></li>
											<li><a href="#">Help Desk</a></li>
											<li><a href="#">Support</a></li>
											<li><a href="#">YOur order</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-12 col-lg-4">
							<div class="footer__item">
								<h3 class="footer__title">Get a newslatter</h3>

								<form class="footer__form form-horizontal" action="#">
									<p>Effervescent the secure special. Kids spicey chance excellent proven too sleek handcrafted when makes intense</p>

									<div class="b-table">
										<div class="cell v-bottom">
											<label class="input-wrp">
												<input class="textfield" type="text" placeholder="Your E-mail" />
											</label>
										</div>

										<div class="cell v-bottom">
											<button class="custom-btn primary" type="submit" role="button">subscribe</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->

		<div id="btn-to-top-wrap">
			<a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="1000"></a>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"><\/script>')</script>

		<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='https://www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X','auto');ga('send','pageview');
		</script>
	</body>
</html>