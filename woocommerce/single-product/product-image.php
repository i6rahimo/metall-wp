<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();

?>

<div class="product__images">
	<div class="product__image">
		<?php
				foreach( $attachment_ids as $attachment_id ) 
				{
				//Get URL of Gallery Images - default wordpress image sizes
				// echo $Original_image_url = wp_get_attachment_url( $attachment_id );
				// echo $full_url = wp_get_attachment_image_src( $attachment_id, 'full' )[0];
				// echo $medium_url = wp_get_attachment_image_src( $attachment_id, 'medium' )[0];
				// echo $thumbnail_url = wp_get_attachment_image_src( $attachment_id, 'thumbnail' )[0];
				
				// //Get URL of Gallery Images - WooCommerce specific image sizes
				// echo $shop_thumbnail_image_url = wp_get_attachment_image_src( $attachment_id, 'shop_thumbnail' )[0];
				// echo $shop_catalog_image_url = wp_get_attachment_image_src( $attachment_id, 'shop_catalog' )[0];
				// echo $shop_single_image_url = wp_get_attachment_image_src( $attachment_id, 'shop_single' )[0];

				}
				// foreach($productImages as $product) {

				// }
				// $html  = '<div class="product__image-slide">';
				// $html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src() ), esc_html__( 'Awaiting product image', 'customify' ) );
				// $html .= '</div>';
				
				echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
		
		// do_action( 'woocommerce_product_thumbnails' );
		?>
	</div>
</div>