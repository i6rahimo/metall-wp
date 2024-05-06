<?php

// Подключение стилей и скриптов
 require_once( get_template_directory() . '/inc/theme-style-and-scripts.php' );
 require_once( get_template_directory() . '/inc/carbon_fields/index.php' );
 require_once( get_template_directory() . '/inc/menu.php' );
 require_once( get_template_directory() . '/inc/wc/content-shop-loop.php' );
 require_once( get_template_directory() . '/inc/wc/content-single-product.php' );

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
// add_action( 'woocommerce_before_main_content', 'test_woocommerce_wrapper_before' );

// if ( ! function_exists( 'test_woocommerce_wrapper_after' ) ) {
// 	/**
// 	 * After Content.
// 	 *
// 	 * Closes the wrapping divs.
// 	 *
// 	 * @return void
// 	 */
// 	function test_woocommerce_wrapper_after() {

// 	}
// }
// add_action( 'woocommerce_after_main_content', 'test_woocommerce_wrapper_after' );



remove_theme_support( 'wc-product-gallery-zoom' );
remove_theme_support( 'wc-product-gallery-lightbox' );
remove_theme_support( 'wc-product-gallery-slider' );






 

add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 ); 
remove_action('woocommerce_after_shop_loop_item_title','woocommerce_template_loop_price');







// add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
// function woocommerce_template_loop_add_to_cart() {
// 	echo '<a  class="filter__product-btn">
// 	Подробнее
// 	<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
// 		<path d="M9.16667 1L15 7M15 7L9.16667 13M15 7L1 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
// 	</svg> 
// 	</a>'
// ;
// }

 












add_action('woocommerce_before_shop_loop', 'filter_products_shop_page');
function filter_products_shop_page() {
	if(! is_shop()) {
		require_once( get_template_directory() . '/inc/wc/filter-sidebar.php' );
	}
}

add_action('woocommerce_before_single_product', 'main_class_before_content');
function main_class_before_content() {
	echo "<main class='page page__container'>";
}





add_action('woocommerce_product_loop_end', 'woocust');

function woocust() {
	global $product;
	$woocommerce_category_id = get_queried_object_id();

	$get_categories = get_terms('product_cat', [
		'orderby' => 'id',
		'order' => 'ASC',
		'hide_empty' => 1,
	]);
	// is_product_category
	if ( is_shop() ) {
	  if ( $get_categories ) {
		echo '<div class="">';
			echo '<div class="subcatalog__items">';
			foreach ( $get_categories as $term ) {
			  echo '<div class="subcatalog__item">';
			  echo '<div class="subcatalog__item-img">';
			  echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="subcatalog__item-href ' . $term->slug . '">';
			  woocommerce_subcategory_thumbnail( $term );
			  echo '</a>';
			  echo '<p class="subcatalog__item-name">';
			  echo $term->name;
			  echo '</p>';

			  echo '</div>';
			  echo '</div>';
		  }
		  echo '</div>';
		  echo '</div>';

		}
	}
}

if(is_page('Главная')) {
	echo "testtttt";
}