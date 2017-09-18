<?php get_header(); ?>
<div class="container">
	<div class="col-md-12">
		<?php
		/*CARGA LOS POST EN LA PAGINA DE BLOG*/
			while (have_posts()): the_post();?>
			<p><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>
			<img class="img-responsive" src="<?php the_post_thumbnail(); ?>">
			<p><?php the_content();?></p>
			<p>Escrito el <?php the_date();?> por <?php the_author();?></p>
			<?php
			endwhile;
			?>
	</div>
</div>
<?php get_footer(); ?>