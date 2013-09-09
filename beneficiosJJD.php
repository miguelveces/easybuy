<?php
      session_start();
?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>Left Sidebar | Frenzy Responsive HTML Template</title>
		<meta name="description" content="">
		<meta name="author" content="bonfirelab | www.bonfirelab.com">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<link rel="stylesheet" href="css/frenzy-orange.css">
		<link rel="stylesheet" href="css/easy507.css">
		
		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="img/ico/favicon.ico">

		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
		
		<!-- JS Libs -->
		
		<script>window.jQuery || document.write('<script src="js/libs/jquery.js"><\/script>')</script>

		<script src="js/libs/modernizr.js"></script>
		<script src="js/libs/selectivizr-min.js"></script>
		
		<script src="js/bootstrap/bootstrap.js"></script>
		<script src="js/plugins/slides.jquery.js"></script>
		<script src="js/custom.js"></script>

	</head>
	<body>
		<div id="bg"><img src="img/assets/bg/halftone.png" alt="background image" /></div>

		<!--///////////////////////////// Header Area //////////////////////////////////-->

		<!-- Header Start -->
			<header class="header">
			<div class="container visible-desktop">
				<div class="row">
					<div class="span12" role="navigation" id="topnav">
						<!-- top nav -->
						<div class="topnav">
							<div class="pull-left">
								<?php
								    session_start();
                                    if (isset($_SESSION["cuenta_paginas"])){ 
									   	$_SESSION["cuenta_paginas"] = 0; 
									}else{ 
									   	$_SESSION["cuenta_paginas"]=1; 
									}
                                    $archivo_contador = "contador/visitas.txt";
                                    $leer = fopen($archivo_contador,"r");
                                    $cuenta = trim(fread($leer,filesize($archivo_contador))); 

                                    if ($cuenta != "") $cuenta = $_SESSION["cuenta_paginas"] + $cuenta;
                                    else $cuenta = 1;
                                    @fclose($leer);
                                    $leer = fopen($archivo_contador,"w");
                                    @fputs($leer,$cuenta);

                                    @fclose($leer); 
                                    echo '<span class="visitantes">Visitante numero: '.$cuenta.'</span>';
                                ?>
							</div>							
						</div>
					</div>
				</div>
			</div>
			<div id="nav" class="container">
				<div class="row">
				<!-- Logo & Navigation -->
					<div class="span12" role="navigation" id="mainnav">
					<!-- logo se debera adaptar al logo que tiene el cliente -->
					<h1 id="logo" class="visible-desktop"><a href="#">Easybuy507.com</a></h1>

					<!-- Navigation Start -->
					<nav id="responsive-nav" class="hidden-desktop">
						<div class="collapse-menu">
							<!-- <a href="#" class="brand">ddd</a>
							<form class="search">
								<input class="input-medium" type="text" placeholder="Search&hellip;">
							</form> -->
							<ul class="user-menu">
								<li><a href="#signInModal" data-toggle="modal">Sign In</a></li>								
								<li class="dropdown">
								    <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account 
								    	<span class="awe-caret-down icon-white"></span></a>
								    <ul class="dropdown-menu">
									    <li><a href="#"><span class="awe-dashboard"></span> Dashboard</a></li>
								    	<li><a href="#"><span class="awe-user"></span> Perfil</a></li>
								    	<li><a href="#"><span class="awe-cog"></span> Configuracion</a></li>
								    	<li><a href="#"><span class="awe-signout"></span> </a></li>
								    </ul>
								</li>
							</ul>
							<span class="collapse-trigger icon awe-chevron-down"></span>
						</div>
						<ul class="first-level dropdown-nav">							
							<li class="current"><a href="index.php">Inicio</a></li>
							<li><a href="quienesomos507.php">Quienes Somos</a></li>
							<li><a href="quienesomos507.php">Quienes Somos</a></li>
							<li><a href="comofunciona.php">Como Funciona <span class="icon awe-chevron-down"></span></a>
								<ul class="second-level">
								    <li><a href="comofunciona.php">Como Funciona </a></li>
									<li><a href="beneficios.php">Beneficios</a></li>
									<li><a href="formadepago.php">Forma de pago</a></li>								
								</ul>
							</li>														
							<li><a href="post.php">Calculdora</a></li>
							<li><a href="post.php">Cotizar</a></li>
							<li><a href="post-single.php">Promociones</a></li>							
							
						</ul>
					</nav>
					<!-- este menu que se usa cuando es responsivo lo voy a crear de forma diferente para no hacer el codigo tan largo -->
					<nav id="main-navigation" class="visible-desktop">
						<ul class="first-level">
							<li class="current"><a href="index507.php">Inicio</a></li>
							<li><a href="quienesomos507.php">Quienes Somos</a></li>
							<li><a href="quienesomos507.php">Quienes Somos</a></li>
							<li><a href="comofunciona.php">Como Funciona <span class="icon awe-chevron-down"></span></a>
								<ul class="second-level">
								    <li><a href="comofunciona.php">Como Funciona </a></li>
									<li><a href="beneficios.php">Beneficios</a></li>
									<li><a href="formadepago.php">Forma de pago</a></li>								
								</ul>
							</li>														
							<li><a href="post.php">Calculdora</a></li>
							<li><a href="post.php">Cotizar</a></li>
							<li><a href="post-single.php">Promociones</a></li>							
							
						</ul>
					</nav>
					<nav id="secondary-navigation" class="visible-desktop">
						<div class="social-media">
							<ul>
								<li><a href="#"><span class="awe-facebook"></span></a></li>
								<li><a href="#"><span class="awe-twitter"></span></a></li>								
								<li><a href="#"><span class="awe-google-plus"></span></a></li>								
							</ul>
						</div>
						<div class="pull-right">
							<ul>
								<li>
									<ul>
										<li><a href="#signInModal" data-toggle="modal">Ingresar</a></li>							
										<li class="dropdown">
										    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mi cuenta
										    	<span class="awe-caret-down icon-white"></span></a>
										    <ul class="dropdown-menu">											    
										    	<li><a href="#"><span class="awe-user"></span> Perfi</a></li>
										    	<li><a href="#"><span class="awe-cog"></span> Configuracion</a></li>
										    	<li><a href="#"><span class="awe-signout"></span> Cerrar sescion</a></li>
										    </ul>
										</li>
									</ul>
								</li>								
							</ul>
						</div>
					</nav>
					<!-- Navigation End -->
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->



		<!--///////////////////////////// Main Content Area //////////////////////////////////-->

		<!-- Main Content Wrapper Start -->
		<div class="container" role="main">
			<!-- Main Content -->
			<section id="main-content" class="row">

				<!-- Sidebar Content -->
				<div id="left-sidebar" class="span4">						

					<!-- Sidebar Block Widget -->
					<div class="sidebar-widget sidebar-block">
						<div class="sidebar-header">
							<h4>Tiendas</h4>
							<div class="separator"></div>
						</div>
						<div class="sidebar-content menu-widget">
							<ul>
								<li>
									<a href="#" title="Title">Primary Menu 1</a>
								</li>
								<li>
									<a href="#" title="Title">Primary Menu 2</a>
								</li>
								<li>
									<a href="#" title="Title">Primary Menu 3</a>
								</li>
								<li>
									<a title="Title">Another Menu 1 <span class="pull-right icon awe-chevron-down"></span></a>
									<ul>
										<li>
											<a href="#" title="Title">Sub Menu 1 </a>
										</li>
										<li>
											<a href="#" title="Title">Sub Menu 2</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#" title="Title">Yet Another Menu</a>
								</li>
								<li>
									<a href="#" title="Title">Sample Menu</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- Latest News Widget -->
					<div class="sidebar-widget" id="latest-news">
						
						<div class="sidebar-header">
							<h4>Noticias Video juegos</h4>
							<div class="separator"></div>
						</div>
						<div class="sidebar-content post-widget">
							<ul>
								<li class="sidebar-item">
									<a href="#" class="image-polaroid" title="Title">
										<img src="img/assets/slideshow/thumbnail-square.png" alt="Image" />
									</a>
									<h5><a href="#">Consectetur Adipiscing Elit Maecenas Justo Massa</a></h5>
									<span class="post-date"><em>November, 10 2012</em></span>
								</li>
								<li class="sidebar-item">
									<a href="#" class="image-polaroid" title="Title">
										<img src="img/assets/slideshow/thumbnail-square.png" alt="Image" />
									</a>
									<h5><a href="#">Consectetur Adipiscing Elit Maecenas Justo Massa</a></h5>
									<span class="post-date"><em>November, 10 2012</em></span>
								</li>
								<li class="sidebar-item">
									<a href="#" class="image-polaroid" title="Title">
										<img src="img/assets/slideshow/thumbnail-square.png" alt="Image" />
									</a>
									<h5><a href="#">Consectetur Adipiscing Elit Maecenas Justo Massa</a></h5>
									<span class="post-date"><em>November, 10 2012</em></span>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- End Sidebar -->


				<div id="content" class="span8">
				  
					<div class="post-single" id="post">
						<div class="content-outer">
							<div class="content-inner">
								<article>
									<div class="article-header">
										<h1 class="title">Beneficios</h1>
										
										<div class="separator"></div>
									</div>
									<div class="article-thumbnail">
										<a href="#"><img src="img/assets/slideshow/slide-1.png" alt="thumbnail" /></a>
										<div class="caption">Image Caption Goes In Here</div>
									</div>
									<div class="article-content">

									  <ol>
										<li>Tendr&aacute;s a tu alcance muchos productos que no consigues 
										en el pa&iacute;s o que son muy costosos.</li>
										<li>          
										Seguridad y confiabilidad en las compras por Internet.</li>
										<li> F&aacute;cil y sin complicaciones, nosotros nos encargamos de todo 
										el proceso hasta la llegada de tu paquete.</li>
										<li> No existen contraltos 
										ni mensualidaes usted paga por lo que trae.</li>
										<li>Tendras la oportunidad de comprar o subastar a trav&eacute;s de una 
										cuenta de eBay con direcci&oacute;n en los EE.UU.</li>
										<li>Las compras ser&aacute;n realizadas a trav&eacute;s de un abono del 50% y pagaras la 
										diferencia cuando tu mercanc&iacute;a este en tus manos.</li>
										<li>Efectuamos una 
										verificaci&oacute;n de las p&aacute;ginas en donde deseas comprar.</li>
										<li>Recibes tu dinero de vuelta, si el 
										producto no llegase seg&uacute;n nuestras condiciones de aceptaci&oacute;n.</li>
										<li>        
										Precios accesibles para el transporte mar&iacute;timo y a&eacute;reo.</li>
										<li>         
										   Flexibilidad en cuanto a horarios.</li>
										<li> Notificaci&oacute;n autom&aacute;tica a la llegada de tu paquete 
										por correo electr&oacute;nico y chat a su celular.</li>
										<li> No necesitas tener tarjeta de cr&eacute;dito, como consecuencia 
										nadie puede copiar la informaci&oacute;n de la tarjeta.</li>
										<li> Ahorras tiempo, ya que el proceso 
										de ordenar tu pedido es realizado por nosotros.</li>
										<li> Su email privado esta protegido ya 
										que nuestro sistema filtra los emails no deseados.</li>
									</ol>
										<h3 class="post-lead">Blockquotes</h3>
										<blockquote>
											<p>Quid paulo ante, inquit, dixerim nonne meministi, cum omnis dolor detractus esset, variari, non augeri voluptatem?</p>
											<small>Someone famous <cite title="Source Title">Source Title</cite></small>
										</blockquote>

										<h3 class="post-lead">Unordered &amp; Ordered Lists</h3>
										
										<ul>
											<li>Hoc est non modo cor non habere, sed ne palatum quidem.</li>
											<li>Illis videtur, qui illud non dubitant bonum dicere -;</li>
										</ul>
										<ol>
											<li>Si enim ita est, vide ne facinus facias, cum mori suadeas.</li>
											<li>Familiares nostros, credo, Sironem dicis et Philodemum, cum optimos viros, tum homines doctissimos.</li>
											<li>Sed tamen enitar et, si minus multa mihi occurrent, non fugiam ista popularia.</li>
											<li>At iam decimum annum in spelunca iacet.</li>
										</ol>
										<p>
											Ut dignissim aliquet nibh tristique hendrerit. Donec ullamcorper nulla quis metus vulputate id placerat augue eleifend. Aenean venenatis consectetur orci, sit amet ultricies magna sagittis vel. Nulla non diam nisi, ut ultrices massa. Pellentesque sed nisl metus. Praesent a mi vel ante molestie venenatis.
										</p>
									</div>								
								</article>								
							</div>

							<!-- content inner -->
						</div>
						<!-- content outer -->
					</div>
				    
				</div>
				

			</section>
			<!-- End Main Content -->

		</div>
		<!-- Main Content Wrapper End -->

		<!--///////////////////////////// Footer Area //////////////////////////////////-->

		<!-- Footer Start -->
		<footer class="footer">
			
			<div class="container" role="navigation">
				<section class="row">
					<div class="footer-menu">						
					</div>
					<div class="visible-desktop">
						<a href="#" title="easybuy507">easybuy507</a>
					</div>
					<div class="copyright">
						<p>Copyright &copy; 2013 <a href="http://easybuy507.com" title="easybuy507.com">easybuy507</a>. All rights reserved.
						</p>
					</div>
				</section>
			</div>
		</footer>
		<!-- Footer End -->


	</body>
</html>