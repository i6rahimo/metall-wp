<?php 
get_header();

$woocommerce_category_id = get_queried_object_id();

$get_categories = get_terms('product_cat', [
    'orderby' => 'id',
    'order' => 'ASC',
    'hide_empty' => 0,
]);

    echo '<div class="subcatalog__container">';
        echo '<div class="subcatalog__items">';
        foreach ( $get_categories as $term ) {
          echo '<div class="subcatalog__item">';
          echo '<div class="subcatalog__item-img">';
          echo '<div class="subcatalog__item-img-wrapper">';
          woocommerce_subcategory_thumbnail( $term );
          echo '</div>';
          echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="subcatalog__item-href ' . $term->slug . '">';
          echo '</a>';
          echo '<p class="subcatalog__item-name">';
          echo $term->name;
          echo '</p>';
          echo '</div>';
          echo '</div>';
      }
      echo '</div>';
      echo '</div>';

get_footer();