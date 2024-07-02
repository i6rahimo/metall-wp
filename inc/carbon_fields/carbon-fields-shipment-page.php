<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'shipment_page_options' );
function shipment_page_options() {

   Container::make( 'theme_options',  'Отгрузки' )
   ->set_icon( 'dashicons-car' )
   ->where( 'post_type', '=', 'post' )
   ->add_fields( array(
       Field::make( 'separator', 'main-block', __( 'Страница отгрузки' ) ),

       Field::make( 'text', 'main-title', 'Заголовок' ),
       Field::make( 'image', 'main-image', __( 'Фото главного экрана' ) ),
       
   ));


}