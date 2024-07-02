<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'contact_page_options' );
function contact_page_options() {

   Container::make( 'theme_options',  'Контакты' )
   ->set_icon( 'dashicons-phone' )
   ->where( 'post_type', '=', 'post' )
   ->add_fields( array(
       Field::make( 'separator', 'main-block', __( 'Страница контакты' ) ),

       Field::make( 'text', 'main-title', 'Заголовок' ),
       Field::make( 'image', 'main-image', __( 'Фото главного экрана' ) ),
       
   ));


}