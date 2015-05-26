<?php
/*
*	Universidade Federal do Rio Grande do Sul - Centro de Biotecnologia
*
*	Desenvolvedores: 	Arthur Kalsing
*	Descrição: 			Página inicial do IECBiot (fotos banner, resumo das últimas notícias e apresentação)
*
*/		

?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<title>Incubadora Empresarial IECBiot</title>
		<meta name="description" content="Incubadora Empresarial do Centro Biotecnologia da UFRGS, IECBiot">
		<meta name="keywords" content="iecbiot, incubadora, empreendimentos, edital, incubação, pesquisa, desenvolvimento, pdi, biotecnologia"/>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" type="image/gif" href="images/favicon.gif">
		
		<link rel="stylesheet" type="text/css" href="css/menu_circles.css" />
		
		<link rel="shortcut icon" href="images/favicon.gif" />
		<link rel="stylesheet" href="css/ie/style_common.css" />
		<link rel="stylesheet" href="css/ie/style4.css" />
		<link rel="stylesheet" href="css/ie/camera.css">
		<link rel="stylesheet" href="css/ie/style.css">
		<link rel="stylesheet" href="css/ie/allery.css">
		
		<script src="js/ie/jquery.js"></script>
		<script src="js/ie/jquery-migrate-1.2.1.js"></script>
		<script src="js/ie/script.js"></script>
		<script src="js/ie/superfish.js"></script>
		<script src="js/ie/jquery.ui.totop.js"></script>
		<script src="js/ie/jquery.equalheights.js"></script>
		<script src="js/ie/jquery.mobilemenu.js"></script>
		<script src="js/ie/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/ie/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '27.86458333333333%',
					caption: true,
					navigation: true,
					fx: 'simpleFade'
				});
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->		
	</head>
	<body id="top" class="fundo_1">
		<div class="main">
<!--==============================header=================================-->
			<header class="menu_sup fundo_menu_1">
				<div class="container_12">
					<div class="row">
					<div class="grid_4">
						<div class="titulo texto_menu_1">- Terapeuta vibracional, ocultista e neo-alquimista -</div>
						<div class="nome texto_menu_1">CARLOS GUTTERRES</div>
					</div>
					<div class="grid_8">
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-1">
									<div class="ch-info">
										<h3 class="texto_menu_1">Carlos</h3>
									</div>
								</div>
							</li>
							<li>
								<div class="ch-item ch-img-2">
									<div class="ch-info">
										<h3 class="texto_menu_1">Vivessencias</h3>
									</div>
								</div>
							</li>
							<li>
								<div class="ch-item ch-img-3">
									<div class="ch-info">
										<h3 class="texto_menu_1">Espiritualidade</h3>
									</div>
								</div>
							</li>
							
							<li>
								<div class="ch-item ch-img-4">
									<div class="ch-info">
										<h3 class="texto_menu_1">Jin Shin Jyutsu</h3>
									</div>
								</div>
							</li>
						</ul>
					</div>
					</div>
				</div>
			</header>
<!--==============================Content=================================-->
			<div class="content corpo_1">
				<div class="container_12">
					<div class="grid_7">
						<h3>Bem vindo à IECBiot</h3>
						<img src="images/biotinho.jpg" alt="" class="img_inner fleft" width="270" height="139">

						<div class="extra_wrapper">
							<p>A Incubadora Empresarial do Centro de Biotecnologia do Rio Grande do Sul (<b>IECBiot</b>) 
							apoia o estabelecimento, desenvolvimento e consolidação de empresas e projetos tecnológicos em 
							Biotecnologia e setores afins. </p>
							<p>A IECBiot estimula a criação e o fortalecimento de empresas oferecendo um ambiente apropriado e 
							dotando-as de maior capacitação técnica e gerencial.</p>
						</div>
						<div class="clear sep__1"></div>
						<p>"As incubadoras de empresas são ambientes dotados de capacidade técnica, gerencial, administrativa 
						e infraestrutura para amparar o pequeno empreendedor. Elas disponibilizam espaço apropriado e condições 
						efetivas para abrigar ideias inovadoras e transformá-las em empreendimentos de sucesso" - 
						Associação Nacional de Entidades Promotoras de Empreendimentos Inovadores (<a class="color1" href="http://www.anprotec.org.br/" target="_blank">Anprotec</a>).</p>
						<p><b>Áreas de atuação:</b> genética e biologia molecular de microrganismos; controle biológico; 
						diagnóstico molecular de doenças humanas, de animais e de plantas; saúde animal e reprodução; 
						biotecnologia vegetal; bioquímica e farmacologia de peptídeos e proteínas tóxicas; 
						produção de enzimas; biomonitoramento da poluição ambiental; genética toxicológica.</p>
					</div>
					<div class="grid_4 prefix_1">
						<h3>Últimas Notícias</h3>
						<div class="news">
							<p class="color1 destaque" ><a href="noticias.php#2015-09-04">Edital Aberto:</a> 
							<a href="http://sgi.macropus.com.br/iecbiot/edital/" class="color1 destaque" target="_blank">PARTICIPE!</a>
							</p>
						</div>
						<div class="news">
							<time datetime="2015-09-04">09<span>ABR</span></time>
							<div class="extra_wrapper">
								<p class="color1"><a href="noticias.php#2015-09-04">Workshop CANVAS</a></p>
								Foi realizado no dia 07/04 o Workshop CANVAS, a primeira etapa da Usina do Empreendedor. 
								Os participantes confeccionaram o modelo Canvas de seus próprios empreendimentos.
							</div>
						</div>
						<div class="news">
							<time datetime="2015-13-03">13<span>MAR</span></time>
							<div class="extra_wrapper">
								<p class="color1"><a href="noticias.php#2015-13-03">Usina do Empreendedor IECBiot </a></p>
								A IECBiot lançara Usina do Empreendedor, uma ação dentro de seu programa de empreendedorismo que 
								colocara os participantes em contato com o mundo do empreendedor.
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_12">
						<div class="hor_separator"></div>
						<h3 class="head1 center">Venha nos conhecer!</h3>
					</div>
					<div class="clear"></div>
					<div class="clear"></div>
					<div class="grid_12">
						<center>
						<div class="grid_4 index_highlights"> 
							<div id="index_photo_container" style="background-image: url(images/inicial_1.jpg);">
								<div class="index_photo_par1">
									<div class="index_photo_par2">
										<div class="index_photo_par3">
											Referencia em Biotecnologia
										</div>
									</div>
								</div>
							</div> 
						</div>
						<div class="grid_4 index_highlights">
							<div id="index_photo_container" style="background-image: url(images/inicial_2.jpg);">
								<div class="index_photo_par1">
									<div class="index_photo_par2">
										<div class="index_photo_par3">
											O caminho para o sucesso!
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="grid_4 index_highlights">
							<div id="index_photo_container" style="background-image: url(images/inicial_3.jpg);">
								<div class="index_photo_par1">
									<div class="index_photo_par2">
										<div class="index_photo_par3">
											Venha nos conhecer!
										</div>
									</div>
								</div>
							</div>
						</div>
						</center>
					</div>
					<div class="clear"></div>
					<div class="grid_12">
						<div class="hor_separator"></div>
						<h3 class="head1 center">Nossos Parceiros</h3>
					</div>
					<div class="grid_3">
						<div class="box">
							<div class="box_title">ANPROTEC</div>
							<div class="box_bot">
								<div class="maxheight">
									<a href="http://www.anprotec.org.br/" target="_blank"><img class="parceiros" src="images/logo_anprotec.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="box">
							<div class="box_title">SEBRAE</div>
							<div class="box_bot">
								<div class="maxheight">
									<a href="http://www.sebrae.com.br/" target="_blank"><img class="parceiros" src="images/logo_sebrae.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="box">
							<div class="box_title">FINEP</div>
							<div class="box_bot">
								<div class="maxheight">
									<a href="http://www.finep.gov.br/" target="_blank"><img class="parceiros" src="images/logo_finep.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="box">
							<div class="box_title">CNPq</div>
							<div class="box_bot">
								<div class="maxheight">
									<a href="http://www.cnpq.br/" target="_blank"><img class="parceiros" src="images/logo_cnpq.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<?php include("footer.php"); ?>
		</footer>
	</body>
</html>