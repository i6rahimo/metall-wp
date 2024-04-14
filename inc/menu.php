<?php 

register_nav_menus(array(
	'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
	'bottom' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
));



// Измнение классов у тега li

add_filter( 'nav_menu_css_class', 'wp_kama_nav_menu_css_class_filter', 10, 4 );

function wp_kama_nav_menu_css_class_filter( $classes, $menu_item, $args, $depth ){
    if($args->theme_location === 'top') {
        $classes = [
            'menu__item',
        ];
    }
	return $classes;
}



// Измнение классов у тега a
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes($atts, $item, $args, $depth) {
    if($args->theme_location === 'top') {
        $atts['class'] = 'menu__link';

        if($item->current) {
            $atts['class'] .= 'menu__link';
        }
    }

    return $atts;
}


// Измнение классов у вложенностей
add_filter( 'nav_menu_submenu_css_class', 'wp_kama_nav_menu_submenu_css_class_filter', 10, 3 );

/**
 * Function for `nav_menu_submenu_css_class` filter-hook.
 * 
 * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
 * @param int      $depth   Depth of menu item. Used for padding.
 *
 * @return string[]
 */
function wp_kama_nav_menu_submenu_css_class_filter( $classes, $args, $depth ){

    if($args->theme_location === 'top') { 
        $classes = [
            'sub-menu__list',
        ];
    }
	// filter...
	return $classes;
}


