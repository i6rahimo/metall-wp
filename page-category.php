<?php 

get_header(); ?>
<?php do_action( 'woocommerce_before_main_content' ); ?>
<main class="page">
        
        <section class="subcatalog">
            <div class="subcatalog__container">
                <div class="subcatalog__items">
                    <?php
                    global $product;

                        $get_categories = get_terms('product_cat', [
                            'orderby' => 'id',
                            'order' => 'ASC',
                            'hide_empty' => 0,
                        ]);
                        foreach($get_categories as $category_item) {
                            ?>
                            <div class="subcatalog__item">
                                <div class="subcatalog__item-img">
                                    <a href="<?php  echo $category_item->slug; ?>" class="subcatalog__item-href"></a>
                                    <p class="subcatalog__item-name">
                                        <?php        
                                        echo $category_item->name;
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <?php
                        }
                    
                    ?>


                </div>
            </div>
        </section>
      </main>

<?php
get_footer();