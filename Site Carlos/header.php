<?php
/*
*	Website Pessoal Carlos Gutterres
*
*	Desenvolvedores: 	Arthur Kalsing
*	Descrição: 			Banner e barra de navegação. (deve ser incluido em todas as páginas antes do content)
*
*/		

?>

	<img src="images/logo.png" />
    <div id="nav">
      <ul class="menu">
        <li class="current_page_item"><a href="index.php">Home</a></li>
        <li><a href="page.php">Sistema Vida</a>
          <ul class="sub-menu">
            <li><a href="#">Introdução</a></li>
            <li><a href="#">Estrutura do Sistema Vida</a></li>
            <li><a href="#">Missão e Propósito</a></li>
            <li><a href="#">Harmonizadores Vibracionais</a></li>
            <li><a href="#">Essências</a></li>
            <li><a href="#">Sobre os Pesquisadores</a></li>
            <li><a href="#">Cursos</a></li>
            <li><a href="#">Pedidos</a></li>
          </ul>
        </li>
        <li><a href="portfolio.php">Espiritualidade</a></li>
        <li><a href="articles.php">Jin Shin Jyutsu</a></li>
      </ul>
    </div>
    <!--end nav-->
	
<?php
/*
			<div class="container_12">
					<div class="grid_12">
						<div class="socials">
							<a href="#" class="fa fa-twitter"></a>
							<a href="https://www.facebook.com/iecbiot" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-google-plus"></a>
							<a href="#" class="fa fa-instagram"></a>
						</div>
						<h1>
							<a href="index.php">
								<img src="images/logo.png" class="logocenter">
							</a>
						</h1>
						<div class="menu_block">	
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"index.php")): ?> class="current" <?php endif;?>>
										<a href="index.php">Home</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"incubadora.php")): ?> class="current" <?php endif;?>>
										<a href="incubadora.php">A Incubadora</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"empresas.php")): ?> class="current" <?php endif;?>>
										<a href="empresas.php">Empresas</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"bancodeideias.php")): ?> class="current" <?php endif;?>>
										<a href="bancodeideias.php">Banco de Ideias</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"noticias.php")): ?> class="current" <?php endif;?>>
										<a href="noticias.php">Notícias</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"equipe.php")): ?> class="current" <?php endif;?>>
										<a href="equipe.php">Equipe</a>
									</li>
									<li <?php if(stripos($_SERVER['REQUEST_URI'],"contato.php")): ?> class="current" <?php endif;?>>
										<a href="contato.php">Contato</a>
									</li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
*/				
?>