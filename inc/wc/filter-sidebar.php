<div class="filter__mobile" data-type="popup-5">
    <p class="filter__mobile-text">Фильтры</p>
    <div class="filter__mobile-arrow">
        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.16667 1L15 7M15 7L9.16667 13M15 7L1 7" stroke="#181818" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </div>
</div>
<form method="get" class="filter__filter">
    <div class="accordion filter__accordion">
        <div class="accordion__item filter__item open">
            <div class="accordion__header filter__header">Производитель</div>
            <div class="accordion__content filter__content open">
                <?php

                $args = get_terms([
                    'taxonomy' => 'product_tag',
                    'hide_empty' => false,
                ]);

                $test = get_terms([
                    'taxonomy' => 'pa_color',
                    'hide_empty' => false,

                ]);
                $tt = wc_get_attribute_taxonomies();
                var_dump( $tt);
                global $wc_product_attributes;
                foreach($wc_product_attributes as $tes) {
                    // print_r($tes);
                }

                foreach ($args as $item):
                    ?>
                    <a href="?product_tag=<?php echo $item->slug ?>" class="filter__button"><?php echo $item->name; ?></a>
                    <?php
                    // if ((is_product_category() || is_shop()) && $query->is_main_query()) {
                        // тут можно изъять из URL параметры фильтрации по собственной схеме
                        
                        // $tax_query = (array) $query->get('tax_query');
                        // $tax_query[] = array(
                        //     'taxonomy' => 'pa_SOME_ATTRIBUTE',
                        //     'field' => 'slug',
                        //     'terms' => array('SOME_ATTRIBUTE_VALUE_SLUG'),
                        //     'operator' => 'IN'
                        // );

                        // $query->set('tax_query', $tax_query);
                    
                endforeach ?>

            </div>
        </div>
    </div>


</form>