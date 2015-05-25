<?php
/*
*	Website Pessoal Carlos Gutterres
*
*	Desenvolvedores: 	Arthur Kalsing
*	Descrição: 			Entrada do site com animações e curtas explicações
*
*/		

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Carlos Gutterers Portfólio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Pagina pessoal de Carlos Gutterres" />
        <meta name="keywords" content="Carlos Guterres, Vivessencias, Espiritualidade, Jin Shin Jyutsu" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
		</noscript>
    </head>
    <body>
        <div class="container demo-1">
		
			<div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<a href="inicio.php"><div class="deco1" data-icon1></div></a>
							<h2>Carlos Gutterres</h2>
							<blockquote>
								<p>Terapeuta vibracional, ocultista e neo-alquimista vem dedicando-se à pesquisa dos 
								temas relacionados à espiritualidade a mais quarenta anos.</p>
								<a href="inicio.php"><cite>Descubra</cite></a>
							</blockquote>
						</div>
					</div>
					
					<div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<a href="espiritualidade.php"><div class="deco" data-icon2></div></a>
							<h2>Espiritualidade</h2>
							<blockquote>
								<p>A espiritualidade pode ser definida como uma "propensão humana a buscar 
								significado para a vida por meio de conceitos que transcendem o tangível, 
								à procura de um sentido de conexão com algo maior que si próprio".</p>
								<a href="espiritualidade.php"><cite>Saiba mais</cite></a>
							</blockquote>
						</div>
					</div>
					
					<div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<a href="vivessencias.php"><div class="deco" data-icon3></div></a>
							<h2>Vivessencias</h2>
							<blockquote>
								<p>Os Harmonizadores Vibracionais são elementos que se oferecem para 
								auxiliar o ser humano na tarefa de se reconectar com o abundante fluxo 
								de energia harmônica universal, colaborando para que ocorra uma tomada 
								de consciência dos princípios causadores da tensão.</p>
								<a href="vivessencias.php"><cite>Venha nos conhecer</cite></a>
							</blockquote>
						</div>
					</div>
					
					<div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<a href="jinshinjyutsu.php"><div class="deco" data-icon4></div></a>
							<h2>Jin Shin Jyutsu</h2>
							<blockquote>
								<p>Jin Shin Jyutsu® Fisio-Filosofia é uma arte ancestral 
								de harmonização da energia vital no corpo.</p>
								<a href="jinshinjyutsu.php"><cite>Pratique</cite></a>
							</blockquote>
						</div>
					</div>
					
				</div><!-- /sl-slider -->
				
							
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
			
			
			
        </div>
			
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="js/jquery.slitslider.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ),
						$nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':last' ).on( 'click', function() {

								slitslider.next();
								return false;

							} );

							$navArrows.children( ':first' ).on( 'click', function() {
								
								slitslider.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>
		
	</body>
</html>