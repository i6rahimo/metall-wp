<?php

// Подключение стилей и скриптов
 require_once( get_template_directory() . '/inc/theme-style-and-scripts.php' );
 require_once( get_template_directory() . '/inc/carbon_fields/index.php' );
 require_once( get_template_directory() . '/inc/menu.php' );
//  require_once( get_template_directory() . '/inc/woocommerce.php' );

 function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'test_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function test_woocommerce_wrapper_before() {
		?>
			<main id="page" class="page page__container">
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'test_woocommerce_wrapper_before' );

if ( ! function_exists( 'test_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function test_woocommerce_wrapper_after() {
		?>
			</main>
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'test_woocommerce_wrapper_after' );



remove_theme_support( 'wc-product-gallery-zoom' );
remove_theme_support( 'wc-product-gallery-lightbox' );
remove_theme_support( 'wc-product-gallery-slider' );


add_filter('woocommerce_product_price_class', 'custom_price');

function custom_price() {
	return '
	product-price product__characteristics-price
	';
}


add_action('woocommerce_after_main_content', 'test_after_content');
function test_after_content() {
	$text_desc = carbon_get_the_post_meta('text_for_desc');
	$text_character = carbon_get_the_post_meta('text_for_characteristic');
	$text_deliver = carbon_get_the_post_meta('text_for_deliver');
	$test = 222;
    $output = "<div class='tabs tabs__container' data-tabs='tabs-example'>
	<div class='tabs__nav'>
		<button class='tabs__trigger' type='button'>Описание</button>
		<button class='tabs__trigger' type='button'>Характеристика</button>
		<button class='tabs__trigger' type='button'>Доставка и оплата</button>
	</div>

	<div class='tabs__content'>
		<div class='tabs__panel'>	
			$text_desc
		</div>
		<div class='tabs__panel'>
			$text_character
		</div>
		<div class='tabs__panel'>
			$text_deliver
		</div>
	</div>
</div>";
    echo $output;
}

