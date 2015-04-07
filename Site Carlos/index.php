<?php
/*
*	Website Pessoal Carlos Gutterres
*
*	Desenvolvedores: 	Arthur Kalsing
*	Descrição: 			Página inicial website (fotos, apresentação, links para sessões)
*
*/		

?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Carlos Gutterres</title>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="styles/style.css" />
	<link type="text/css" rel="stylesheet" href="styles/skin.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="js/initSlider.js"></script>
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css" />
	<link rel="stylesheet" type="text/css" href="css/style2.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
	<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
	
	
	<!--[if IE 6]>
	<script src="js/ie6-transparency.js"></script>
	<script>DD_belatedPNG.fix('#header img, #featured-section h2, #circles img, #frontpage-sidebar .read-more, .blue-bullets li, #sidebar .sidebar-button, #project-content .read-more, .more-link, #contact-form .submit, .jcarousel-skin-tango .jcarousel-next-horizontal, .jcarousel-skin-tango .jcarousel-prev-horizontal, #commentform .submit');</script>
	<style>body { behavior: url("styles/ie6-hover-fix.htc"); }</style>
	<link rel="stylesheet" href="styles/ie6.css" />
	<![endif]-->
	<!--[if IE 7]><link rel="stylesheet" href="styles/ie7.css" /><![endif]-->
	<!--[if IE 8]><link rel="stylesheet" href="styles/ie8.css" /><![endif]-->
</head>
<body class="home">
<div id="wrap">
<!--==============================header=================================-->  
  <div id="header">
  <header> 
	<?php include("header.php"); ?>
  </header>
  </div>
<!--==============================Content=================================-->
  <div id="featured-section">
  
	<ul class="ch-grid">
		<li>
			<div class="ch-item ch-img-1">
				<div class="ch-info">
					<h3>Carlos</h3>
					<p>Descubra <a href="#">aqui</a></p>
				</div>
			</div>
		</li>
		<li>
			<div class="ch-item ch-img-2">
				<div class="ch-info">
					<h3>Vivessencias</h3>
					<p>Descubra <a href="#">aqui</a></p>
				</div>
			</div>
		</li>
		<li>
			<div class="ch-item ch-img-3">
				<div class="ch-info">
					<h3>Espiri
					tualidade</h3>
					<p>Descubra <a href="#">aqui</a></p>
				</div>
			</div>
		</li>
		
		<li>
			<div class="ch-item ch-img-4">
				<div class="ch-info">
					<h3>Jin Shin Jyutsu</h3>
					<p>Descubra <a href="#">aqui</a></p>
				</div>
			</div>
		</li>
	</ul>
  
    <!--end circles-->
    <div id="image-slider">
      <ul id="mycarousel" class="jcarousel-skin-tango">
        <li class="first"><a href="#"><img width="280" height="190" src="images/280x190.gif" alt="" /></a></li>
        <li><a href="#"><img width="280" height="190" src="images/280x190.gif" alt="" /></a></li>
        <li><a href="#"><img width="280" height="190" src="images/280x190.gif" alt="" /></a></li>
        <li class="first"><a href="#"><img width="280" height="190" src="images/280x190.gif" alt="" /></a></li>
        <li><a href="#"><img width="280" height="190" src="images/280x190.gif" alt="" /></a></li>
        <li><a href="#"><img width="280" height="190" src="images/280x190.gif" alt="" /></a></li>
        <li class="first"><a href="#"><img width="280" height="190" src="images/280x190.gif" alt="" /></a></li>
        <li><a href="#"><img width="280" height="190" src="images/280x190.gif" alt="" /></a></li>
        <li><a href="#"><img width="280" height="190" src="images/280x190.gif" alt="" /></a></li>
      </ul>
    </div>
    <!--end image-slider-->
  </div>
  <!--end featured-section-->
  <div id="frontpage-main">
    <div id="frontpage-content">
      <h3>Why Work With Akono?</h3>
      <p>You’ll not regret getting in touch with us about your new project. Below are some of the benefits.</p>
      <ul class="blue-bullets">
        <li>Over 15 Years Real World Experience</li>
        <li>Voted No. 1 Design Studio In The World</li>
        <li>Support And Guidance At Every Step</li>
        <li>A Great Solution That You&#8217;ll Be Happy With</li>
      </ul>
    </div>
    <!--end frontpage-content-->
    <div id="frontpage-sidebar">
      <h3>Latest Article</h3>
      <a class="blog-title" href="#">Top Tips For Hiring A Design Agency</a>
      <p class="meta">1st May 2011 / <a href="#">No Comments &#187;</a></p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
      <a class="read-more" href="#">Read More &raquo;</a> </div>
    <!--end frontpage-sidebar-->
  </div>
  <!--end frontpage-main-->
  <div id="footer">
    <p class="copyright">Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved / Design By <a target="_blank" href="http://www.chris-creed.com/">Chris Creed</a> | Download more: <a href="http://www.csstemplatesfree.org">CSS Website Templates</a></p>
  </div>
  <!--end footer-->
</div>
<!--end wrap-->
</body>
<div class="cache-images"><img src="images/red-button-bg.png" width="0" height="0" alt="" /><img src="images/black-button-bg.png" width="0" height="0" alt="" /></div>
<!--end cache-images-->
</html>