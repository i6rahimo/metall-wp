<?php

// Подключение стилей и скриптов
require_once (get_template_directory() . '/inc/theme-style-and-scripts.php');
require_once (get_template_directory() . '/inc/carbon_fields/index.php');
require_once (get_template_directory() . '/inc/menu.php');
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






add_action('woocommerce_product_loop_start', 'catalog');

function catalog()
{
	global $product;
	$woocommerce_category_id = get_queried_object_id();

	$get_categories = get_terms('product_cat', [
		'category_name' => 'product',
		'order'         => 'ASC',
		'numberposts'   => 0,
		'post_type'     => 'post',
		'suppress_filters' => true, 
	]);


	if (is_shop()) {
		echo '<div class="products">';
		echo '<div class="catalog__products products__items">';
		foreach ($get_categories as $term) {
			echo '<div class="products__item">';
			$link = get_term_link( $term, 'product_cat' );
			$thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
			$image = wp_get_attachment_url( $thumbnail_id );
			?>
			
				<div class="products__item-img">
					<a href="<?php echo $link; ?>" class="products__item-href">
						<img src="<?php echo $image; ?>" alt="">	
					</a>
					<a  href="<?php echo $link; ?>" class="products__item-name"><?php echo $term->name; ?></a>
				</div>
				<div class="products__item-links">
					<?php
						$product_categories = get_categories(
							apply_filters(
								'woocommerce_product_subcategories_args',
								array(
									'parent'       => $term->term_id,
									'hide_empty'   => 0,
									'hierarchical' => 1,
									'taxonomy'     => 'product_cat',
									'pad_counts'   => 1,
									'number' 	   => 8,
								)
							)
						);
					foreach($product_categories as $subcategory) {
						$link = get_term_link( $subcategory, 'product_cat' );
						?>
						<a href="<?php echo $link; ?>" class="products__item-link">
	
							<?php echo $subcategory->name; ?>
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604"
									stroke="#181818" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</a>
						<?php
					} 
					?>
				</div>
				<?php
				echo '</div>';
		}
		echo '</div>';
		echo '</div>';

	} elseif(is_product_category( )) {

		function woocust() {
			global $product;
			$woocommerce_category_id = get_queried_object_id();
		
			$get_categories = get_terms('product_cat', [
				'orderby' => 'id',
				'order' => 'ASC',
				'hide_empty' => 0,
			]);
			// is_product_category
			if ( is_shop() ) {
			  if ( $get_categories ) {
				echo '<div class="">';
					echo '<div class="subcatalog__items">';
					foreach ( $get_categories as $term ) {
					  echo '<div class="subcatalog__item">';
					  echo '<div class="subcatalog__item-img">';
					  echo '<div class="subcatalog__item-img-wrapper">';
					  woocommerce_subcategory_thumbnail( $term );
					  echo '</div>';
					  echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="subcatalog__item-href ' . $term->slug . '">';
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
	}
}


?>