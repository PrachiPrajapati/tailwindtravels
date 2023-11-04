<?php
	/*  style */
	function wptestdemo(){
		wp_enqueue_style( 'bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');
	}
	add_action( 'wp_enqueue_scripts','wptestdemo' );
	/* Custom widgets  */
	function twenty_twenty_one_custom_widgets_init() {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer company', 'tailwindtravels' ),
				'id'            => 'footercompany',
				'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'tailwindtravels' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
	add_action( 'widgets_init', 'twenty_twenty_one_custom_widgets_init' );
	function twenty_twenty_one_custom_nav_menus() {
		register_nav_menus(
			array(
				'mobile' => esc_html__( 'Mobile menu', 'tailwindtravels' ),
				'socialmedia' => esc_html__( 'social menu', 'tailwindtravels' ),
			)
		);
	}
	add_action( 'widgets_init', 'twenty_twenty_one_custom_nav_menus' );
	// function that runs when shortcode is called
	function slider_shortcode() { 
	ob_start();
	?>
		<div class="shortcodedemo">
			<h1>Hello wordlds here ius me slider demio</h1>
		</div>
	<?php
	$obclean = ob_get_clean();
	return $obclean;
	}
	// register shortcode
	add_shortcode('homeslider', 'slider_shortcode');