<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'review_page_options' );
function review_page_options() {

   Container::make( 'theme_options',  'Отзывы и сертификаты' )
   ->set_icon( 'dashicons-images-alt' )
   ->where( 'post_type', '=', 'post' )
   ->add_fields( array(
       Field::make( 'separator', 'main-block', __( 'Страница отзывы и сертификаты' ) ),

       Field::make( 'text', 'main-title', 'Заголовок' ),
       Field::make( 'image', 'main-image', __( 'Фото главного экрана' ) ),
       
   ));


}