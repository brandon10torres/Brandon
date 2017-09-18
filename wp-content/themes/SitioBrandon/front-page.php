<?php get_header(); ?> <!--LLAMA AL HEADER-->
<h2 class="text-center">Últimas entradas</h2>
<section class="container contenido">
	<div class="row">
		<?php
		/*MUESTRA SOLO 6 POST*/
		$args = array('posts_per_page' => 6);
		$entradas = new WP_Query($args); 
		while($entradas->have_posts()): $entradas->the_post();
		?>
		<div class="col-xs-6 col-md-4 entrada">
			<?php the_post_thumbnail('entradas', array('class' => 'img-responsive'));?>
			<div class="contenido-entrada">
				<?php the_title('<h3>', '</h3>'); ?>
				<p>Escrito el: <span> <?php the_time(get_option('date_format')); ?> </span></p>
				<p>Por: <?php the_author(); ?></p>
				<a href="<?php the_permalink(); ?>" class="btn btn-success">Leer más</a>
			</div>
		</div>
		<?php
		endwhile; wp_reset_postdata();
		?>
	</div>
</section>
<section class="container categorias-blog">
	<h2 class="text-center">Por categoría</h2>
	<!--OBTIENE LAS CATEGORIAS-->
	<?php $categorias = get_categories(); ?>
	<div class="row">
		<?php		
		$i=0;
		foreach ($categorias as $categoria => $value)
		{
		?>		
		<div class="col-xs-6 col-lg-3 categoria">
			<i class="<?php echo $categorias[$i]->description; ?>">
			</i>
			<a href="<?php echo get_category_link($categorias[$i]->cat_ID,'category' ); ?>">	
				<?php echo $categorias[$i]->name; ?> 
			</a>					
		</div>
		<?php $i++; } ?>		
	</div>

</section>
<?php get_footer(); ?>