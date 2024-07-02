<?php


?>

<?php get_header(); ?>




<main class="page">
    <div data-observ></div>

    <section class="hero">
        <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
            <source src="https://res.cloudinary.com/codelife/video/upload/v1637805738/intro_l5ul1k.mp4"
                type="video/mp4">
        </video>
        <div class="hero__container">
            <h1 class="hero__title"><?php echo carbon_get_theme_option('main-title') ?></h1>
            <button class="hero__price" data-type="popup-1">
                Получить расчет цены
                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.16667 1L15 7M15 7L9.16667 13M15 7L1 7" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <div class="hero__items">
                <div class="hero__item">
                    <p class="hero__item-title"><?php echo carbon_get_theme_option('item-title') ?></p>
                    <span class="hero__item-subtitle"><?php echo carbon_get_theme_option('item-subtitle') ?></span>
                </div>

                <div class="hero__item">
                    <p class="hero__item-title"><?php echo carbon_get_theme_option('item-title2') ?></p>
                    <span class="hero__item-subtitle"><?php echo carbon_get_theme_option('item-subtitle2') ?></span>
                </div>

                <div class="hero__item">
                    <p class="hero__item-title"><?php echo carbon_get_theme_option('item-title3') ?></p>
                    <span class="hero__item-subtitle"><?php echo carbon_get_theme_option('item-subtitle3') ?></span>
                </div>

                <div class="hero__item">
                    <p class="hero__item-title"><?php echo carbon_get_theme_option('item-title4') ?></p>
                    <span class="hero__item-subtitle"><?php echo carbon_get_theme_option('item-title4') ?></span>
                </div>
            </div>
        </div>

    </section>

    <section class="part">
        <div class="part__container">
            <h2 class="part__title">
                Наши партнеры и поставщики:
            </h2>
            <div class="part__wrapper">
                <div class="part__items">
                    <div class="part__item">
                        <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('part1')); ?>"
                            alt="">
                    </div>
                    <div class="part__item">
                        <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('part2')); ?>"
                            alt="">
                    </div>
                    <div class="part__item">
                        <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('part3')); ?>"
                            alt="">
                    </div>
                    <div class="part__item">
                        <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('part4')); ?>"
                            alt="">
                    </div>
                    <div class="part__item">
                        <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('part5')); ?>"
                            alt="">
                    </div>
                    <div class="part__item">
                        <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('part6')); ?>"
                            alt="">
                    </div>
                    <div class="part__item">
                        <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('part7')); ?>"
                            alt="">
                    </div>
                    <div class="part__item">
                        <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option('part8')); ?>"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="products">
        <div class="products__container">
            <div class="products__slider products__wrapper" data-mobile="false">
                <?php

                global $product;
                $woocommerce_category_id = get_queried_object_id();
                $args = array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => false,
                    'orderby' => 'name',
                    'include_children' => false,
                );

                $terms = get_terms('product_cat', $args);
                $categories = get_categories($args);



                ?>
                <div class="catalog__products products__items">
                    <?php
                    foreach ($terms as $main_product) {
                        $product_id = $main_product->term_id;

                        $link = get_term_link($main_product->slug, $main_product->taxonomy);
                        $thumbnail_id = get_woocommerce_term_meta($main_product->term_id, 'thumbnail_id', true);
                        $image = wp_get_attachment_url($thumbnail_id);

                        if ($product_id == 64 || $product_id == 66 || $product_id == 68 || $product_id == 63) {
                            ?>
                            <div class="products__item">
                                <div class="products__item-img">
                                    <a href="<?php echo $link; ?>" class="products__item-href">
                                        <img src="<?php echo $image; ?>" alt="">
                                    </a>
                                    <a href="<?php echo $link; ?>"
                                        class="products__item-name"><?php echo $main_product->name ?></a>
                                </div>
                                <div class="products__item-links">
                                    <?php
                                    $term_id = get_queried_object_id();
                                    $taxonomy = 'product_cat';

                                    // Get subcategories of the current category
                                    $terms = get_terms([
                                        'taxonomy' => $taxonomy,
                                        'hide_empty' => true,
                                        'parent' => $main_product->term_id,
                                        'hide_empty' => false,
                                    ]);
                                    foreach ($terms as $subcatalog) {

                                        $link = get_term_link($subcatalog, 'product_cat');
                                        ?>
                                        <a href="<?php echo $link; ?>" class="products__item-link">
                                            <?php echo $subcatalog->name; ?>
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604"
                                                    stroke="#181818" stroke-linecap="round" stroke-linejoin="round"></path>
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

                ?>
            </div>
        </div>
    </section>
    <section class="deliver">
        <div class="deliver__container">
            <div class="deliver__wrapper">
                <div class="deliver__up">
                    <div class="deliver__up-left">
                        <h2 class="deliver__title"><?php echo carbon_get_theme_option('deliver-title') ?></h2>
                        <p class="deliver__subtitle"><?php echo carbon_get_theme_option('deliver-subtitle') ?></p>
                    </div>
                    <p class="deliver__text">
                        Филиал и склад готовой продукции в Москве и Санкт-Петербурге
                    </p>
                </div>
                <div class="deliver__down">
                    <div class="deliver__down-items">
                        <div class="deliver__down-item">
                            <img src="<?php echo get_template_directory_uri() ?>/images/dr1.svg" alt="">
                            <p class="deliver__down-text">Страхуем груз</p>
                        </div>
                        <div class="deliver__down-item">
                            <img src="<?php echo get_template_directory_uri() ?>/images/dr2.svg" alt="">
                            <p class="deliver__down-text">Соблюдаем строгие правила комплектации</p>
                        </div>

                        <div class="deliver__down-item">
                            <img src="<?php echo get_template_directory_uri() ?>/images/dr3.svg" alt="">
                            <p class="deliver__down-text">Уделяем внимание упаковке, чтобы груз приехал в 100%
                                сохранности</p>
                        </div>
                    </div>
                    <p class="deliver__text deliver__text-mb">
                        Филиал и склад готовой продукции в Москве и Санкт-Петербурге
                    </p>
                    <button class="btn deliver__down-btn">
                        Смотреть каталог
                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 1L14 7M14 7L9 13M14 7H1" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about__container">
            <h2 class="about__title">
                Компания «Невский Металл» — <br>
                поставляет нержавеющий металлопрокат <span>для компаний любого масштаба по всей России</span>
            </h2>
            <p class="about__subtitle">
                За все время работы <span>мы выполнили 3 000+ проектов и поставили 10 000+ тонн металлопроката</span>
            </p>
            <div class="about__project">
                <div class="about__numbers about__project-number">
                    <div class="about__number">
                        <p class="about__number-title">3 000+</p>
                        <span class="about__number-subtitle">проектов</span>
                    </div>
                    <div class="about__number">
                        <p class="about__number-title">10 000+</p>
                        <span class="about__number-subtitle">тонн металлопроката</span>
                    </div>
                </div>
                <button class="btn about__project-btn">
                    О компании
                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L14 7M14 7L9 13M14 7H1" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="about__gallery">
                <div class="about__gallery-left">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/a1.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/images/a1.png" alt="">
                    </picture>
                </div>
                <div class="about__gallery-right">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/a2.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/a2.png" alt="">
                    </picture>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/a3.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/a3.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="about-slider">

                <div class="about-wrapper">

                    <div class="about-slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/about-slid.webp"
                                type="image/webp"><img
                                src="<?php echo get_template_directory_uri() ?>/images/about-slid.png" alt="Slide 1">
                        </picture>
                    </div>

                    <div class="about-slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/about-slid.webp"
                                type="image/webp"><img
                                src="<?php echo get_template_directory_uri() ?>/images/about-slid.png" alt="Slide 1">
                        </picture>
                    </div>

                    <div class="about-slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/about-slid.webp"
                                type="image/webp"><img
                                src="<?php echo get_template_directory_uri() ?>/images/about-slid.png" alt="Slide 1">
                        </picture>
                    </div>

                    <div class="about-slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/about-slid.webp"
                                type="image/webp"><img
                                src="<?php echo get_template_directory_uri() ?>/images/about-slid.png" alt="Slide 1">
                        </picture>
                    </div>
                </div>

                <div class="about-pagination"></div>

            </div>
            <a href="#" class="btn about__project-btn about__project-btn__mb">
                О компании
                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1L14 7M14 7L9 13M14 7H1" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </section>
    <section class="stock">
        <div class="stock__container">
            <h2 class="stock__title">Производственная база и склад</h2>
            <div class="stock__gallery">
                <div class="stock__gallery-up">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/st1.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/images/st1.png" alt="">
                    </picture>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/st2.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/images/st2.png" alt="">
                    </picture>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/st3.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/images/st3.png" alt="">
                    </picture>
                </div>
                <div class="stock__gallery-down">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/st4.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/images/st4.png" alt="">
                    </picture>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/st5.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri() ?>/images/st5.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="stock-slider">
                <div class="stock-wrapper">
                    <div class="stock-slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp"
                                type="image/webp"><img
                                src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt="">
                        </picture>
                    </div>
                    <div class="stock-slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp"
                                type="image/webp"><img
                                src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt="">
                        </picture>
                    </div>
                    <div class="stock-slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp"
                                type="image/webp"><img
                                src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt="">
                        </picture>
                    </div>
                    <div class="stock-slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp"
                                type="image/webp"><img
                                src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt="">
                        </picture>
                    </div>
                    <div class="stock-slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp"
                                type="image/webp"><img
                                src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt="">
                        </picture>
                    </div>
                    <div class="stock-slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp"
                                type="image/webp"><img
                                src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt="">
                        </picture>
                    </div>
                    <div class="stock-slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp"
                                type="image/webp"><img
                                src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt="">
                        </picture>
                    </div>
                    <div class="stock-slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp"
                                type="image/webp"><img
                                src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt="">
                        </picture>
                    </div>
                </div>
                <div class="stock-pagination"></div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="contact__container">
            <div class="contact__wrapper">
                <div class="contact__about">
                    <div class="contact__about-text">
                        <p>Контакты компании</p>
                        <span>Свяжитесь с нами любым удобным способом</span>
                    </div>
                    <img src="<?php get_template_directory_uri(); ?>/images/footer-logo.svg" alt="">
                </div>

                <div class="contact__cols">
                    <div class="contact__col">
                        <span class="contact__col-title contact__home-coltitle">Адрес:</span>
                        <p class="contact__col-hometext contact__col-text">Санкт-Петербург, ул. Заозерная, дом <br> 8,
                            корпус 1, офис 27</p>
                    </div>
                    <div class="contact__col">
                        <span class="contact__col-title contact__home-coltitle">Телефон:</span>
                        <a tel="+7 966 937-23-11" class="contact__col-hometext contact__col-text">+7 966 937-23-11<p>
                            </p>
                            <a tel="+7 993 492-36-93" class="contact__col-hometext contact__col-text">+7 993 492-36-93
                                <p></p>
                            </a></a>
                    </div>
                    <div class="contact__col">
                        <span class="contact__col-title contact__home-coltitle">График работы:</span>
                        <p class="contact__col-hometext contact__col-text">9.00 - 18.00 пн.-пт. <br>
                            (время в часовом поясе офиса)</p>
                    </div>
                </div>
                <div class="contact__map">
                    <div id="map-test-contact" class="map"></div>

                </div>
            </div>
        </div>
    </section>
    <div class="page__container">

    </div>

</main>


</div>




<?php get_footer(); ?>