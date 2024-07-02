<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



add_action('carbon_fields_register_fields', 'tabs_for_product');

function tabs_for_product() {
    Container::make('post_meta', 'Настройки')
        ->where('post_type', '=', 'product')
        ->add_fields(array(
            Field::make('text','text_for_desc','Описание товара'),
            Field::make('text','text_for_characteristic','Характеристика'),
            Field::make('text','text_for_deliver','Доставка и оплата'),
        ));
}


