<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * Display the theme credit
 *
 * @since  1.0.0
 * @return void
 */
function storefront_credit() {
	?>
	<div class="site-info">
		<b class="copyright-brand">
			<a href="http://www.amigosmira.es/contacto/" target="_blank">
				<?php echo esc_html( apply_filters( 'storefront_copyright_text', $content = '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' )) );?>
			</a>
			
		</b>
		<p class="copyright-info">
			<?php 
				$copyright_text_message = 'Los cursos son impartidos por el Centro Internacional para la Formación en Derechos Humanos, Ciudadanía Mundial y Cultura de Paz. La titulación obtenida cuenta con el aval de reconocidas instituciones educativas. Se tratan de títulos de carácter propio, en el marco de la formación no reglada en España, según Ley Orgánica 8/2013, de 9 de Diciembre, para la mejora de la calidad educativa. Por lo anterior, los títulos no facilitan acceso a Masters, Doctorados, Concursos u Oposiciones.';
				echo esc_html($copyright_text_message);
			?>
		</p>
		<i class="woocommerce-reference">
			<?php if ( apply_filters( 'storefront_credit_link', true ) ) { ?>
			<br /> <?php printf( esc_attr__( '%1$s designed by %2$s.', 'storefront' ), 'Storefront', '<a href="http://www.woocommerce.com" title="WooCommerce - The Best eCommerce Platform for WordPress" rel="author">WooCommerce</a>' ); ?>
			<?php } ?>
		</i>
	</div><!-- .site-info -->
	<?php
}

/**
 * Site branding wrapper and display
 *
 * @since  1.0.0
 * @return void
 */
function storefront_site_branding() {
	?>

	<div class="blue-box left row-fluid">
		<div>
			<img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/miraisme_logo.png')?>">		
		</div>
	</div>
	<div class="row-fluid">
		<h1>
			<span class="row">Centro Internacional</span>
			<span class="row">Formación en Derechos Humanos</span>
			<span class="row">Ciudadanía Mundial y Cultura de Paz</span>
		</h1>
		<h2>Diplomados y Maestrías</h2>
	</div>
	<div class="blue-box right row-fluid">
		<div>
			<img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/miraisme_logo.png')?>">
		</div>
	</div>
	
	<?php
}

?>