<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! empty( $breadcrumb ) ) {


	echo $wrap_before;

	echo "<div class='breadcrumbs'>";
	echo "<div class='breadcrumbs__container'>";
	echo "<ul class='breadcrumbs__ul'>";
	foreach ( $breadcrumb as $key => $crumb ) {
		echo $before;
		echo '<li class="breadcrumbs__li">';
		if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {

			echo '
				<a class="breadcrumbs__link" href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>
			';

		} else {
			echo esc_html( $crumb[0] );
		}
		echo "</li>";
		echo $after;

		// if ( sizeof( $breadcrumb ) !== $key + 1 ) {
		// 	echo $delimiter;
		// }
	}
	echo "</ul>";
	echo "</div>";
	echo "</div>";

	echo $wrap_after;

}
