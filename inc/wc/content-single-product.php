<?php

// СТИЛЬ ПРАЙСА

add_filter('woocommerce_product_price_class', 'custom_price');

function custom_price() {
	return '
	product-price product__characteristics-price
	';
}


// ТАБЫ
add_action('woocommerce_after_main_content', 'test_after_content');
function test_after_content() {
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
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 10 );
function woo_remove_product_tabs( $tabs ) {

unset( $tabs['description'] );      	// Remove the description tab
unset($tabs['reviews']);    
unset($tabs['additional_information']);    
// $tabs['additional_information']['title'] = 'Характеристики' ;      	


return $tabs;
}

// ВЫВОД АТРИБУТОВ
add_action('woocommerce_single_product_summary','woocommerce_before_add_to_cart_form', 9);
function woocommerce_before_add_to_cart_form() {
	global $product;
	echo "<div class='product__characteristics-wrapper'>";
	echo "<p class='product__characteristics-title'>Характеристики</p>";
	$product->list_attributes();
	echo "</div>";
}

// ИЗМЕНЕНИЕ ЦЕНЫ

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

function woocommerce_template_single_price() {
	global $product;
	?>
	<div class="product__characteristics-prices">
		<p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><span class="product__characteristics-name price-name">Цена: </span><?php echo $product->get_price_html(); ?></p>
	</div>
	<?php
}

// КОЛИЧЕСТВО ДОБАВЛЕНИЕ ТОВАРА

add_filter( 'woocommerce_quantity_input_classes', 'metall_woocommerce_quantity_input_classes_filter', 10, 2 );

/**
 * Function for `woocommerce_quantity_input_classes` filter-hook.
 * 
 * @param  $array   
 * @param  $product 
 *
 * @return 
 */
function metall_woocommerce_quantity_input_classes_filter( $array, $product ){

	return 'product__quantity-result';
}

add_action('woocommerce_before_quantity_input_field', 'quantity_add_left_arrow');
add_action('woocommerce_after_quantity_input_field', 'quantity_add_right_arrow');
function quantity_add_left_arrow() {
	echo '<div class="product__quantity-left">
	<svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M5 9L1 5L5 1" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"></path>
	</svg> 
  </div>';
}
function quantity_add_right_arrow() {
	echo '<div class="product__quantity-right">
	<svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M1 9L5 5L1 1" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"></path>
	</svg> 
 </div>';
}


// Кнопка

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single' ); 
function woocommerce_add_to_cart_button_text_single() {
    return __( 'Добавить в заказ', 'woocommerce' ); 
}

add_action('add_svg_for_btn', 'add_svg_btn'); 

function add_svg_btn() {
	echo '<svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M9 1L14 7M14 7L9 13M14 7H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
</svg> ';
}
