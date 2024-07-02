<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header();

?>

<main class="page">
	<?php
	/**
	 * Hook: woocommerce_before_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 * @hooked WC_Structured_Data::generate_website_data() - 30
	 */
	do_action('woocommerce_before_main_content');

	?>
	<header class="woocommerce-products-header">
		<?php if (apply_filters('woocommerce_show_page_title', true)): ?>
			<!-- <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1> -->
		<?php endif; ?>

		<?php
		/**
		 * Hook: woocommerce_archive_description.
		 *
		 * @hooked woocommerce_taxonomy_archive_description - 10
		 * @hooked woocommerce_product_archive_description - 10
		 */
		do_action('woocommerce_archive_description');
		?>
	</header>

	<div class="filter__container">
		<div class="page-category filter__wrapper">
			<?php
			if (woocommerce_product_loop()) {

				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked woocommerce_output_all_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action('woocommerce_before_shop_loop');
				?>
				<?php
				woocommerce_product_loop_start();

				if (!is_shop()) {

					if (is_product_category()) {

						$current_slug = get_queried_object();


						$term_id = get_queried_object_id();
						$taxonomy = 'product_cat';

						$terms = get_terms([
							'taxonomy' => $taxonomy,
							'hide_empty' => true,
							'parent' => $current_slug->term_id,
							'hide_empty' => false,
						]);
						?>
						<div class="subcatalog__items">
							<?php
							foreach ($terms as $subcatalog) {
								$link = get_term_link($subcatalog, 'product_cat');
								$woocommerce_category_id = get_queried_object_id();
								?>

								<div class="subcatalog__item">
									<div class="subcatalog__item-img">
										<div class="subcatalog__item-img-wrapper">
											<?php woocommerce_subcategory_thumbnail($subcatalog); ?>
										</div>
										<a href="<?php echo $link; ?>" class="subcatalog__item-href">
										</a>
										<p class="subcatalog__item-name">
											<?php echo $subcatalog->name; ?>
										</p>
									</div>
								</div>
								<?php
							}
							?>
						</div>
						<?php


					}

				}
				if (wc_get_loop_prop('total') && is_tax()) {
					?>
					<div class="filter__wrapper">
						<?php
						require_once (get_template_directory() . '/inc/wc/filter-sidebar.php');
						?>
						<div class="filter__products">
							<?php

							while (have_posts()) {
								the_post();
								/**
								 * Hook: woocommerce_shop_loop.
								 */

								wc_get_template_part('content', 'product');


								do_action('woocommerce_shop_loop');

							}

							?>
						</div>
					</div>
					<div class="filter__more">
						<div class="filter__more-pages">
							<a href="paged=1" class="filter__more-page active">1</a>
							<a href="paged=2" class="filter__more-page">2</a>
							<a href="paged=3" class="filter__more-page">3</a>
							<a href="#" class="filter__more-page">4</a>
							<a href="#" class="filter__more-page">5</a>
						</div>
						<a href="#" class="filter__more-next">
							Смотреть далее
							<svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M7.66667 1L11.8333 6M11.8333 6L7.66667 11M11.8333 6H1" stroke="#181818"
									stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</a>
						<div class="filter__more-next-mobile">
							...
						</div>
					</div>
					<?php
				}
				if (is_shop()) {
					wc_get_template_part('content', 'product-shop');
				}

				woocommerce_product_loop_end();

				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action('woocommerce_after_shop_loop');
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action('woocommerce_no_products_found');
			}
			?>
		</div>
	</div>
</main>
<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
	do_action('woocommerce_sidebar');

?>
<?php
get_footer();
