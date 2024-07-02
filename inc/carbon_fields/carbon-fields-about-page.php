<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'about_page_options' );
function about_page_options() {

   Container::make( 'theme_options',  'Страница о компании' )
   ->set_icon( 'dashicons-welcome-learn-more' )
   ->where( 'post_type', '=', 'post' )
   ->add_fields( array(
       Field::make( 'separator', 'main-block', __( 'Страница о компании' ) ),

       Field::make( 'text', 'main-title', 'Заголовок' ),
       Field::make( 'image', 'main-image', __( 'Фото главного экрана' ) ),
       
   ));


}