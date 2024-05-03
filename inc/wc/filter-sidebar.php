<!-- <?php

add_action( 'woocommerce_before_shop_loop', 'wk_custom_product_filter' );

function wk_custom_product_filter() {
    global $wp_query;
    $product_colors = get_terms( array(
        'taxonomy' => 'post_tag',
        'hide_empty' => false,
    ) );
    var_dump($product_colors);
    ?>
    <form method="get">
        <select name="product_color">
            <option value="">Filter by Color</option>
            <?php foreach( $product_colors as $color ) : ?>
                <option value="<?php echo esc_attr( $color->slug ); ?>"><?php echo esc_html( $color->name ); ?></option>
            <?php endforeach; ?>
        </select>
        <input type="hidden" name="post_type" value="product" />
        <input type="submit" value="Filter" />
    </form>
    <?php
}
do_action( 'woocommerce_before_shop_loop' );
add_filter( 'pre_get_posts', 'wk_custom_product_filter_query' );

function wk_custom_product_filter_query( $query ) {
    if( ! is_admin() && $query->is_main_query() && is_shop() && isset( $_GET['product_color'] ) && ! empty( $_GET['product_color'] ) ) {
        $tax_query = array(
            array(
                'taxonomy' => 'pa_color',
                'field' => 'slug',
                'terms' => $_GET['product_color'],
            ),
        );
        $query->set( 'tax_query', $tax_query );
    }
    return $query;
}
?> -->

<?php
add_action( 'woocommerce_product_filters', 'bbloomer_filter_by_custom_taxonomy_dashboard_products' );
 
function bbloomer_filter_by_custom_taxonomy_dashboard_products( $output ) {
 
  global $wp_query;
 
//   $output .= wc_product_dropdown_categories( array(
//    'show_option_none' => 'Filter by product tag',
//    'taxonomy' => 'product_tag',
//    'name' => 'product_tag',
//    'selected' => isset( $wp_query->query_vars['product_tag'] ) ? $wp_query->query_vars['product_tag'] : '',
//   ) );
}
// создаем экземпляр
$my_posts = new WP_Query;

// делаем запрос
$myposts = $my_posts->query( [
	'post_type' => 'tax_query'
] );

// обрабатываем результат
foreach( $myposts as $pst ){
	echo esc_html( $pst->post_title );
}
?>
<div class="filter__mobile" data-type="popup-5">
    <p class="filter__mobile-text">Фильтры</p>
    <div class="filter__mobile-arrow">
        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.16667 1L15 7M15 7L9.16667 13M15 7L1 7" stroke="#181818" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </div>
</div>
<div class="filter__filter">
    <div class="accordion filter__accordion">
        <div class="accordion__item filter__item open">
            <div class="accordion__header filter__header">Производитель</div>
            <div class="accordion__content filter__content open">
                <button class="filter__button">ММК</button>
                <button class="filter__button">ЧМК</button>
                <button class="filter__button">Северсталь</button>
                <button class="filter__button">Мечел</button>
                <button class="filter__button">НМЛК</button>
                <button class="filter__button active">Борский трубный завод</button>
                <button class="filter__button">Евраз Холдинг</button>
            </div>
        </div>
    </div>

    <div class="accordion filter__accordion">
        <div class="accordion__item filter__item open">
            <div class="accordion__header filter__header">Тип изделия</div>
            <div class="accordion__content filter__content">
                <button class="filter__button">Арматура рифленая (А3)</button>
                <button class="filter__button">Арматура гладкая (А1)</button>
                <button class="filter__button">Круг стальной</button>
            </div>
        </div>
    </div>


    <div class="accordion filter__accordion">
        <div class="accordion__item filter__item open">
            <div class="accordion__header filter__header">Материал</div>
            <div class="accordion__content filter__content">
                <button class="filter__button">35ГС</button>
                <button class="filter__button">25Г2С</button>
                <button class="filter__button">А500С</button>
                <button class="filter__button">А500СП</button>
                <button class="filter__button">А400С</button>
            </div>
        </div>
    </div>

    <div class="accordion filter__accordion open">
        <div class="accordion__item filter__item open">
            <div class="accordion__header filter__header open">Размер</div>
            <div class="accordion__content filter__content">
                <button class="filter__button">6 мм</button>
                <button class="filter__button">8 мм</button>
                <button class="filter__button">10 мм</button>
                <button class="filter__button">12 мм</button>
                <button class="filter__button">14 мм</button>
                <button class="filter__button">16 мм</button>
            </div>
        </div>
    </div>

</div>