<!doctype html>

	<html lang="pt-br">
		<head>
			<title>Casa Amiga | Imóveis e Administração</title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible"content="IE=edge,chrome=1">
			<meta name="viewport"content="width=device-width,initial-scale=1">
			<meta name="robot"content="index,follow">
			<meta name="keywords"content="IMOBILIARIA">
			<meta name="description"content="entre em nosso site para conheçe os nossos imoveis
			copramos e vendemos imoveis temos otimos preços">
			<meta name="author"content="WorldToth">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/normalize.css">
			<link rel="stylesheet" href="css/custom.css" />
			<link rel="stylesheet" href="css/slicebox.css" />
			<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	    </head>
		
		<body>
		<div class="container">
			<header>
				<div class="header-fit">
					<div class="header-content">
						<h1>CASA AMIGA IMOVEIS
						<p>consultoria e imobiliaria</p>
						</h1>
						<nav>
							<ul>
								<li><a href="#">INICIO</a></li>
								<li><a href="#">CONTATOS</a></li>
								<li><a href="#">FOTOS</a></li>
								<li><a href="#">IMOVEIS</a></li>
								<li><a href="#">IMAGENS</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="content-busca">
					<div class="busca-fit">
						<select>
							<option value="casa">casa</option>
							<option value="casa">apartamento</option>
							<option value="casa">edicola</option>
							<option value="casa">escritorio</option>
						</select>
						<select>
							<option value="casa">casa</option>
							<option value="casa">apartamento</option>
							<option value="casa">edicola</option>
							<option value="casa">escritorio</option>
						</select>
						<select>
							<option value="casa">casa</option>
							<option value="casa">apartamento</option>
							<option value="casa">edicola</option>
							<option value="casa">escritorio</option>
						</select>
					</div>
					<div class="busca-fit">
						<select>
							<option value="casa">casa</option>
							<option value="casa">apartamento</option>
							<option value="casa">edicola</option>
							<option value="casa">escritorio</option>
						</select>
						<select>
							<option value="casa">casa</option>
							<option value="casa">apartamento</option>
							<option value="casa">edicola</option>
							<option value="casa">escritorio</option>
						</select>
						<select>
							<option value="casa">casa</option>
							<option value="casa">apartamento</option>
							<option value="casa">edicola</option>
							<option value="casa">escritorio</option>
						</select>
					</div>
				</div>
			</header>
			<section>
				
			</section>
			<div class="wrapper">
				<ul id="sb-slider" class="sb-slider">
					<li>
						<a href="http://www.flickr.com/photos/strupler/2969141180" target="_blank"><img src="img/1.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Creative Lifesaver</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968268187" target="_blank"><img src="img/2.jpg" alt="image2"/></a>
						<div class="sb-description">
							<h3>Honest Entertainer</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968114825" target="_blank"><img src="img/3.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Brave Astronaut</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968122059" target="_blank"><img src="img/4.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Affectionate Decision Maker</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2969119944" target="_blank"><img src="img/5.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Faithful Investor</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968126177" target="_blank"><img src="img/6.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Groundbreaking Artist</h3>
						</div>
					</li>
					<li>
						<a href="http://www.flickr.com/photos/strupler/2968945158" target="_blank"><img src="img/7.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Selfless Philantropist</h3>
						</div>
					</li>
				</ul>
				<div id="shadow" class="shadow"></div>
				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>
				<div id="nav-options" class="nav-options">
					<span id="navPlay">Play</span>
					<span id="navPause">Pause</span>
				</div>
			</div><!-- /wrapper -->

			<content class="wrapper">
				<div class="content-img">
					<img src="img/capa1.jpg"><img src="img/capa3.jpg">
					<img src="img/capa4.jpg"><img src="img/capa2.jpg">
					<img src="img/capa6.jpg"><img src="img/capa5.jpg">
					<img src="img/capa7.jpg">
				</div>
			</content>
			<footer>
			</footer>
		</div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.slicebox.min.js"></script>
		<script type="text/javascript">
			$(function() {
				
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$navOptions = $( '#nav-options' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$navOptions.show();
								$shadow.show();

							},
							orientation : 'h',
							cuboidsCount : 3
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

							$( '#navPlay' ).on( 'click', function() {
								
								slicebox.play();
								return false;

							} );

							$( '#navPause' ).on( 'click', function() {
								
								slicebox.pause();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
		</body>
		
	</html>