<!--INICIO DEL HEADER-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php wp_head(); ?> <!--CARGA EL HEAD-->
</head>
<body <?php body_class(); ?>>  
	<?php $destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');?>
	<?php $destacada = $destacada[0]; ?>
	<header class="site-header" style="background-image: url(<?php echo $destacada; ?>)"> <!--MUESTRA IMAGEN DESTACADA EN HEADER-->
		<nav class="navegacion">
			<div class="container">		
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed menu" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only">Toggle Navigation</span>
						<span class="fa fa-chevron-down" aria-hidden="true"></span>
						
					</button>
					<img src="<?php echo get_stylesheet_directory_uri() ?>/img/Logomakr_9yhErH.png" alt="logo" class="img-responsive" width="30%"> <!--OBTIENE IMAGEN DEL LOGO-->
				</div>
				<div class="navbar_right">
					<?php 
						wp_nav_menu(array('theme_location' => 'menu_principal', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'navbar', 'menu_class' => 'nav navbar-nav navbar-right'))
					?>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="titulo">
						<?php if(is_front_page()): ?>
						<?php $descripcion = get_bloginfo('description', 'display') ?>
						<h1 class="site-title"> <span><?php echo $descripcion; ?></span></h1>
						<?php else: ?>
							<h1 class="site-title"> <span><?php the_title(); ?></span></h1>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</header>

