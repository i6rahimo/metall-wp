<?php



// add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_category_link_opens');

// function woocommerce_template_loop_category_link_opens($category)
// {
// 	global $product;

// 	$link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);

// 	echo '<a href="' . esc_url($link) . '" class="btn similar-btn similar__product-btn"> 
// 		Подробнее 
// 		<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
// 		<path d="M9.16667 1L15 7M15 7L9.16667 13M15 7L1 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
// 		</a>';
// }
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);


add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');




remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title');
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail');
add_action('woocommerce_shop_loop_item_title', 'change_style_loop_product_title');
function change_style_loop_product_title()
{

	echo '<h2 class="filter__product-name ' . esc_attr(apply_filters('woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title')) . '">' . get_the_title() . '</h2>';

}
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_category_link_opens');

function woocommerce_template_loop_category_link_opens($category)
{
	global $product;

	$link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);

	echo '<a href="' . esc_url($link) . '" class="filter__product-btn"> 
		Подробнее 
		<svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M9.16667 1L15 7M15 7L9.16667 13M15 7L1 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
		</a>';

	
}
