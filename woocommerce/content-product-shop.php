<?php 

global $product;
$woocommerce_category_id = get_queried_object_id();
$args = array(
    'taxonomy' => 'product_cat',
    'hide_empty' => false,
    'orderby' => 'name',
    'include_children' => false,
);

$terms = get_terms( 'product_cat', $args );
$categories = get_categories($args);



if (is_shop()) {
    ?>
    <div class="catalog__products products__items">
    <?php
    foreach($terms as $main_product) {
        $product_id = $main_product->term_id;

        $link = get_term_link( $main_product->slug, $main_product->taxonomy );
        $thumbnail_id = get_woocommerce_term_meta( $main_product->term_id, 'thumbnail_id', true );
        $image = wp_get_attachment_url( $thumbnail_id );
        
        if($product_id == 64 || $product_id == 66 || $product_id == 68 || $product_id == 63) {
        ?>
            <div class="products__item">
                <div class="products__item-img">
                    <a href="<?php echo $link; ?>" class="products__item-href">
                        <img src="<?php echo $image; ?>" alt="">	
                    </a>
                    <a href="<?php echo $link; ?>" class="products__item-name"><?php echo $main_product->name ?></a>
                </div>
                <div class="products__item-links">
                    <?php
                        $term_id  = get_queried_object_id();
                        $taxonomy = 'product_cat';

                        // Get subcategories of the current category
                        $terms    = get_terms([
                            'taxonomy'    => $taxonomy,
                            'hide_empty'  => true,
                            'parent'      => $main_product->term_id,
                            'hide_empty' => false,
                        ]);
                        foreach($terms as $subcatalog) {
        
                            $link = get_term_link( $main_product, 'product_cat' );
                            ?>
                            <a href="<?php echo $link; ?>" class="products__item-link">
                                <?php  echo $subcatalog->name; ?>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> 
                            </a>
                            <?php
                        } 
                    ?>
                            
                </div>
            </div>
            <?php
            }
    }
    ?>

    </div>
    <?php 
} elseif(is_product_category()) {
    echo "test";
        global $product;
        $woocommerce_category_id = get_queried_object_id();
        echo "tax";
        $get_categories = get_terms('product_cat', [
            'orderby' => 'id',
            'order' => 'ASC',
            'hide_empty' => 0,
        ]);
        // is_product_category
        if ( is_shop() ) {
          if ( $get_categories ) {
            echo '<div class="">';
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
    
            }
        }
    
}