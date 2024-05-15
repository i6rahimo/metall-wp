<?php

// Подключение стилей и скриптов
require_once (get_template_directory() . '/inc/theme-style-and-scripts.php');
require_once (get_template_directory() . '/inc/carbon_fields/index.php');
require_once (get_template_directory() . '/inc/menu.php');
require_once (get_template_directory() . '/inc/wc/ajax.php');
require_once (get_template_directory() . '/inc/wc/content-shop-loop.php');
require_once (get_template_directory() . '/inc/wc/content-single-product.php');

function mytheme_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
add_filter('woocommerce_enqueue_styles', '__return_empty_array');



if (!function_exists('test_woocommerce_wrapper_before')) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function test_woocommerce_wrapper_before()
	{
		?>
		<main id="page" class="page page__container">
			<?php
	}
}




remove_theme_support('wc-product-gallery-zoom');
remove_theme_support('wc-product-gallery-lightbox');
remove_theme_support('wc-product-gallery-slider');








add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price');

















add_action('woocommerce_before_shop_loop', 'filter_products_shop_page');
function filter_products_shop_page()
{
	if (!is_shop()) {
		require_once (get_template_directory() . '/inc/wc/filter-sidebar.php');
	}
}



remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination' );
// add_action('woocommerce_shop_loop', 'test_echo');

// add_action('woocommerce_shop_loop_end', 'catalog');

// function catalog()
// {
// 	global $product;
// 	$woocommerce_category_id = get_queried_object_id();
// 	echo $woocommerce_category_id;
// 	$main_categories = get_categories([
// 		'taxonomy' => 'product_cat',

// 	]);

// 	if (is_shop()) {
// 		echo '<div class="products">';
// 		echo '<div class="catalog__products products__items">';
// 		foreach ($main_categories as $term) {
// 			echo '<div class="products__item">';
// 			$link = get_term_link( $term, 'product_cat' );
// 			$thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
// 			$image = wp_get_attachment_url( $thumbnail_id );

// 				echo '</div>';
// 		}
// 		echo '</div>';
// 		echo '</div>';

// 	} elseif(is_product_category( )) {

// 		function woocust() {
// 			global $product;
// 			$woocommerce_category_id = get_queried_object_id();
		
// 			$get_categories = get_terms('product_cat', [
// 				'orderby' => 'id',
// 				'order' => 'ASC',
// 				'hide_empty' => 0,
// 			]);
// 			// is_product_category
// 			if ( is_shop() ) {
// 			  if ( $get_categories ) {
// 				echo '<div class="">';
// 					echo '<div class="subcatalog__items">';
// 					foreach ( $get_categories as $term ) {
// 					  echo '<div class="subcatalog__item">';
// 					  echo '<div class="subcatalog__item-img">';
// 					  echo '<div class="subcatalog__item-img-wrapper">';
// 					  woocommerce_subcategory_thumbnail( $term );
// 					  echo '</div>';
// 					  echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="subcatalog__item-href ' . $term->slug . '">';
// 					  echo '</a>';
// 					  echo '<p class="subcatalog__item-name">';
// 					  echo $term->name;
// 					  echo '</p>';
// 					  echo '</div>';
// 					  echo '</div>';
// 				  }
// 				  echo '</div>';
// 				  echo '</div>';
		
// 				}
// 			}
// 		}
// 	}
// }


add_action( 'init', 'true_jquery_register' );
 
function true_jquery_register() {
	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', ( 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' ), false, null, true );
		wp_enqueue_script( 'jquery' );
	}
}

?>