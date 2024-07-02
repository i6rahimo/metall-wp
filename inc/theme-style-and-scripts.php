<?php

/**
 * Подключение скриптов и стилей.
 *
 */

function theme_scripts_and_styles() {
  // -- Стили CSS
  wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css?_v=20240320102149', array(), '1.00' );
  wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/style.min.css', array(), '1.00' );
  wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/custom.css', array(), '1.00' );


  wp_enqueue_script( 'index-js', get_template_directory_uri() . '/js/index.js', array(), '1', true);
  wp_enqueue_script( 'map-js', 'https://api-maps.yandex.ru/2.1/?apikey=219900f2-3b4a-4a4a-9261-a6bbd16dd8bc&lang=ru_RU&_v=20240320102149', array(), '1.13', true);
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/app.min.js', array(), '1.13', true);
  wp_enqueue_script( 'ajax-js', get_template_directory_uri() . '/js/ajax-search.js', array('jquery'), null, true);
	wp_localize_script('ajax-js', 'search_form' , array(
		'url' => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce('search-nonce')
	));
  wp_localize_script('ajax-js', 'filter' , array(
		'url' => admin_url( 'admin-ajax.php' ),
	));

}
add_action( 'wp_enqueue_scripts', 'theme_scripts_and_styles' );



// Подключаем в head инлайновые элементы
function fontawesomes_and_wow() { ?>

  <!-- Font Awesom -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

<?php }
add_action( 'wp_head', 'fontawesomes_and_wow');
