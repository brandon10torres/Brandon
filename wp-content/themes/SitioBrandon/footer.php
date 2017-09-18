<!--INICIO DEL FOOTER -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			<!--COLOCA EN EL FOOTER EL SIDEBAR DEL WIDGET FOOTER-->
				<?php dynamic_sidebar('Footer_widget'); ?>
			</div>
			<div class="col-sm-4">
				<h3>Redes sociales</h3>
				<!--COLOCA EL MENU DE LAS REDES SICIALES-->
				<?php wp_nav_menu(array(
					'theme_location' => 'sociales_menu',
					'container' => 'div',
					'container_id' => 'menu-social',
					'container_class' => 'menu',
					'menu_id' => 'social',
					'menu_class' => 'menu-items',
					'depth' => 1,
					'link_before' => '<span class="sr-only">',
					'link_after' => '</span>',
					'fallback_cb' => '',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'

					)); ?>
			</div>
		</div>
	</div>
	<p class="site-info text-center">Sitio de Brandon <?php echo date('Y'); ?></p>
</footer>

<?php wp_footer(); ?>

</body>
</html>