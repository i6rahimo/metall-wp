<?php

// СТИЛЬ ПРАЙСА

add_filter('woocommerce_product_price_class', 'custom_price');

function custom_price()
{
	return '
	product-price product__characteristics-price
	';
}


// ТАБЫ
add_action('woocommerce_after_single_product', 'test_after_content', 2);
function test_after_content()
{
	$text_desc = carbon_get_the_post_meta('text_for_desc');
	$text_character = carbon_get_the_post_meta('text_for_characteristic');
	$text_deliver = carbon_get_the_post_meta('text_for_deliver');
	$test = 222;
	$output = "<div class='tabs' data-tabs='tabs-example'>
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


// ОТКЛЮЧЕНИЕ ТАБОВ
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 10);
function woo_remove_product_tabs($tabs)
{

	unset($tabs['description']);      	// Remove the description tab
	unset($tabs['reviews']);
	unset($tabs['additional_information']);
	// $tabs['additional_information']['title'] = 'Характеристики' ;      	


	return $tabs;
}

// ВЫВОД АТРИБУТОВ
add_action('woocommerce_single_product_summary', 'woocommerce_before_add_to_cart_form', 9);
function woocommerce_before_add_to_cart_form()
{
	global $product;
	echo "<div class='product__characteristics-wrapper'>";
	echo "<p class='product__characteristics-title'>Характеристики</p>";
	$product->list_attributes();
	echo "</div>";
}

// ИЗМЕНЕНИЕ ЦЕНЫ

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);

function woocommerce_template_single_price()
{
	global $product;
	?>
	<div class="product__characteristics-prices">
		<p class="<?php echo esc_attr(apply_filters('woocommerce_product_price_class', 'price')); ?>"><span
				class="product__characteristics-name price-name">Цена: </span><?php echo $product->get_price_html(); ?></p>
	</div>
	<?php
}

// КОЛИЧЕСТВО ДОБАВЛЕНИЕ ТОВАРА

add_filter('woocommerce_quantity_input_classes', 'metall_woocommerce_quantity_input_classes_filter', 10, 2);

/**
 * Function for `woocommerce_quantity_input_classes` filter-hook.
 * 
 * @param  $array   
 * @param  $product 
 *
 * @return 
 */
function metall_woocommerce_quantity_input_classes_filter($array, $product)
{

	return 'product__quantity-result';
}

add_action('woocommerce_before_quantity_input_field', 'quantity_add_left_arrow');
add_action('woocommerce_after_quantity_input_field', 'quantity_add_right_arrow');
function quantity_add_left_arrow()
{
	echo '<div class="product__quantity-left">
	<svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M5 9L1 5L5 1" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"></path>
	</svg> 
  </div>';
}
function quantity_add_right_arrow()
{
	echo '<div class="product__quantity-right">
	<svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M1 9L5 5L1 1" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"></path>
	</svg> 
 </div>';
}


// Кнопка

add_filter('woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single');
function woocommerce_add_to_cart_button_text_single()
{
	return __('Добавить в заказ', 'woocommerce');
}

add_action('add_svg_for_btn', 'add_svg_btn');

function add_svg_btn()
{
	echo '<svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M9 1L14 7M14 7L9 13M14 7H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
</svg> ';
}

// ПОХОЖИЕ ТОВАРЫ

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

add_action('woocommerce_after_single_product', 'woocommerce_output_related_productss', 5);


function woocommerce_output_related_productss()
{
	add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail');

	if (!defined('ABSPATH')) {
		exit;
	}
	global $product;
	$product_per_page = 4;
	$related_products = array_filter(array_map('wc_get_product', wc_get_related_products($product->get_id(), $product_per_page, $product->get_upsell_ids())), 'wc_products_array_filter_visible');
	$related_products = wc_products_array_orderby($related_products, 'rand', 'desc');
	$link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);
	if ($related_products): ?>

		<section class="related products">

			<?php
			$heading = apply_filters('woocommerce_product_related_products_heading similar__title', __('Похожие товары', 'woocommerce'));

			if ($heading):
				?>
				<h2 class="similar__title"><?php echo esc_html($heading); ?></h2>
			<?php endif; ?>


			<div class="similar__products">
				<div class="similar__products-wrapper">

					<?php foreach ($related_products as $related_product): ?>

						<div class="similar__product">

							<?php
							$post_object = get_post($related_product->get_id());

							setup_postdata($GLOBALS['post'] =& $post_object);

							$image_url = $related_product->get_image_id();

							?>
							<div class="similar__img">

								<?php
								echo wp_get_attachment_image($image_url);
								?>
							</div>
							<div class="similar__product-text">
								<h2 class="similar__product-name"> <?php echo get_the_title() ?></h2>
								<p class="similar__characteristics-title">Характеристики:</p>
								<?php $product->list_attributes(); ?>
								<div class="similar__product-prices">
									<p class="similar__product-price_name">Цена</p>
									<?php if ($price_html = $product->get_price_html()): ?>
										<span class="price"><?php echo $price_html; ?></span>
									<?php endif; ?>

								</div>
								<a href="<?php echo esc_url($link); ?>" class="btn similar-btn similar__product-btn">
									Подробнее
									<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.5 1L14.5 7M14.5 7L9.5 13M14.5 7H1.5" stroke="white" stroke-width="2"
											stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</a>
							</div>
							<?php
							// wc_get_template_part( 'content', 'product' );
							?>
						</div>

					<?php endforeach; ?>
				</div>
			</div>

		</section>
		<?php
	endif;

	wp_reset_postdata();
}









add_action('woocommerce_after_single_product', 'single_product_form', 7);

function single_product_form()
{
	require_once (get_template_directory() . '/inc/wc/single-product-form.php');

}








// add_filter( 'woocommerce_product_single_add_to_cart_text', 'bbloomer_custom_add_cart_button_single_product', 9999 );

// function bbloomer_custom_add_cart_button_single_product( $label ) {
//    if ( WC()->cart && ! WC()->cart->is_empty() ) {
//       foreach( WC()->cart->get_cart() as $cart_item_key => $values ) {
//          $product = $values['data'];
//          if ( get_the_ID() == $product->get_id() ) {
//             $label = 'Добавлено';
//             break;
//          }
//       }
//    }
//    return $label;
// }

// // Part 2
// // Loop Pages Add to Cart

// add_filter( 'woocommerce_product_add_to_cart_text', 'bbloomer_custom_add_cart_button_loop', 9999, 2 );

// function bbloomer_custom_add_cart_button_loop( $label, $product ) {
//    if ( $product->get_type() == 'simple' && $product->is_purchasable() && $product->is_in_stock() ) {
//       if ( WC()->cart && ! WC()->cart->is_empty() ) {
//          foreach( WC()->cart->get_cart() as $cart_item_key => $values ) {
//             $_product = $values['data'];
//             if ( get_the_ID() == $_product->get_id() ) {
//                $label = 'Добавлено';
//                break;
//             }
//          }
//       }
//    }
//    return $label;
// }




add_action('woocommerce_before_single_product', 'main_class_before_content');
function main_class_before_content()
{
	echo "<main class='page page__container'>";
}

add_action('woocommerce_after_single_product', 'main_class_after_content');
function main_class_after_content()
{
	echo "</main>";
}

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');
?>