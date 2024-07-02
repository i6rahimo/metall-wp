<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'main_page_options' );
function main_page_options() {

   Container::make( 'theme_options',  'Главная страница' )
   ->set_icon( 'dashicons-store' )
   ->where( 'post_type', '=', 'post' )
   ->add_fields( array(
       Field::make( 'separator', 'main-block', __( 'Главный экран' ) ),

       Field::make( 'text', 'main-title', 'Заголовок' ),
       Field::make( 'image', 'main-image', __( 'Фото главного экрана' ) ),
   
       Field::make( 'text', 'item-title', 'Заголовок первого блока' )->set_width(50),
       Field::make( 'text', 'item-subtitle', 'Подзаголовок первого блока' )->set_width(50),
       Field::make( 'text', 'item-title2', 'Заголовок первого блока' )->set_width(50),
       Field::make( 'text', 'item-subtitle2', 'Подзаголовок первого блока' )->set_width(50),
       Field::make( 'text', 'item-title3', 'Заголовок первого блока' )->set_width(50),
       Field::make( 'text', 'item-subtitle3', 'Подзаголовок первого блока' )->set_width(50),
       Field::make( 'text', 'item-title4', 'Заголовок первого блока' )->set_width(50),
       Field::make( 'text', 'item-subtitle4', 'Подзаголовок первого блока' )->set_width(50),

       Field::make( 'separator', 'part-block', __( 'Блок наши партнеры' ) ),
       Field::make( 'image', 'part1', __( 'Партенры' ) )->set_width(10)->set_value_type( 'url' ),
       Field::make( 'image', 'part2', __( 'Партенры' ) )->set_width(10),
       Field::make( 'image', 'part3', __( 'Партенры' ) )->set_width(10),
       Field::make( 'image', 'part4', __( 'Партенры' ) )->set_width(10),
       Field::make( 'image', 'part5', __( 'Партенры' ) )->set_width(10),
       Field::make( 'image', 'part6', __( 'Партенры' ) )->set_width(10),
       Field::make( 'image', 'part7', __( 'Партенры' ) )->set_width(10),
       Field::make( 'image', 'part8', __( 'Партенры' ) )->set_width(10),
       
       Field::make( 'separator', 'deliver-block', __( 'Блок доставка' ) ),
       
       Field::make( 'text', 'deliver-title', 'Заголовок' ),
       Field::make( 'text', 'deliver-subtitle', 'Подзаголовок' ),
       Field::make( 'text', 'deliver-text', 'Текст' ),

       Field::make( 'text', 'deliver-item-text1', 'Текст 1' )->set_width(50),
       Field::make( 'image', 'deliver-img1', __( 'Изображение 1' ) )->set_width(50),

       Field::make( 'text', 'deliver-item-text2', 'Текст 2' )->set_width(50),
       Field::make( 'image', 'deliver-img2', __( 'Изображение 2' ) )->set_width(50),

       Field::make( 'text', 'deliver-item-text3', 'Текст 3' )->set_width(50),
       Field::make( 'image', 'deliver-img3', __( 'Изображение 3' ) )->set_width(50),


       Field::make( 'separator', 'main-about-block', __( 'Блок о компании' ) ),
       
       Field::make( 'text', 'main-about-title', 'Заголовок' ),
       Field::make( 'text', 'main-about-subtitle', 'Подзаголовок' ),

       Field::make( 'text', 'main-about-text', 'Текст 1' )->set_width(50),
       Field::make( 'text', 'main-about-text1', 'Текст 2' )->set_width(50),
       Field::make( 'text', 'main-about-text2', 'Текст 3' )->set_width(50),
       Field::make( 'text', 'main-about-text3', 'Текст 4' )->set_width(50),

       Field::make( 'image', 'main-img', __( 'Изображение' ) )->set_width(20),
       Field::make( 'image', 'main-img1', __( 'Изображение' ) )->set_width(20),
       Field::make( 'image', 'main-img2', __( 'Изображение' ) )->set_width(20),


       
   ));


}