<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
add_action('wp_ajax_search_action', 'esp_search_ajax_action_callback');
add_action('wp_ajax_nopriv_search_action', 'esp_search_ajax_action_callback');

function esp_search_ajax_action_callback(){
	
	if (!wp_verify_nonce($_POST['nonce'], 'search-nonce')){
		wp_die('Данные отправлены с левого адреса');
	}
	
	$arg = array(
		'post_type' => array('post', 'product'),
		'post_status' => 'publish',
		's' => $_POST['s']
	);
	$query_ajax = new WP_Query($arg);
	$json_data['out'] = ob_start(PHP_OUTPUT_HANDLER_CLEANABLE);
	if ( $query_ajax->have_posts()) {
		while ($query_ajax->have_posts()) {
			$query_ajax->the_post();
			?>
			<div class="title-searche"><?php echo get_the_title();?></div>
<?php
		       }
	}
	$json_data['out'] .= ob_get_clean();
	wp_send_json($json_data);
	wp_die();
}




add_action( 'wp_ajax_get_cat', 'ajax_show_posts_in_cat' );
add_action( 'wp_ajax_nopriv_get_cat', 'ajax_show_posts_in_cat' );
function ajax_show_posts_in_cat() {
	
	$link = ! empty( $_POST['link'] ) ? esc_attr( $_POST['link'] ) : false;
	if(is_tax()) {
		echo $link;
	}
	$slug = $link ? wp_basename( $link ) : false;
	$cat  = get_category_by_slug( $slug );
	
	if ( ! $cat ) {
		die( 'Рубрика не найдена' );
	}
	
	query_posts( array(
		'posts_per_page' => get_option( 'posts_per_page' ),
		'post_status'    => 'publish',
		'category_name'   => $cat->slug
	) );
	
	require plugin_dir_path( __FILE__ ) . 'tpl-cat.php';
	
	wp_die();
}
