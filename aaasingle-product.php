<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( ); ?>
	<!-- <?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?> -->

<main class="page">
        <div class="breadcrumbs">
            <div class="breadcrumbs__container">
                <ul class="breadcrumbs__ul">
                    <li class="breadcrumbs__li">
                        <a class="breadcrumbs__link" href="index.html">Главная</a>
                    </li>
                    <li class="breadcrumbs__li">
                        <a class="breadcrumbs__link" href="index.html">Каталог</a>
                    </li>
                    <li class="breadcrumbs__li">
                        <a class="breadcrumbs__link" href="index.html">Сортовой металлопрокат</a>
                    </li>
                    <li class="breadcrumbs__li">
                        <a class="breadcrumbs__link" href="index.html">Арматура</a>
                    </li>
                    <li class="breadcrumbs__li">
                        <a class="breadcrumbs__link active" href="index.html">Арматура А500с 6 мм сталь 3 ТУ 14-1-5254-94</a>
                    </li>
                </ul>
            </div>
        </div>

        
        
        <section class="product">
            <div class="product__container">
                    <?php the_post(); ?>
                    <?php wc_get_template_part( 'content', 'product' ); ?>
        
                <div class="product__wrapper">
                    <div class="product__images">
                        <div class="product__image">
                            <div class="product__image-slide">
                                <picture><source srcset="images/product__image-slide.webp" type="image/webp"><img src="images/product__image-slide.png" alt="Slide 1"></picture>
                            </div>
                            <div class="product__image-slide">
                                <picture><source srcset="images/product__image-slide.webp" type="image/webp"><img src="images/product__image-slide.png" alt="Slide 1"></picture>
                            </div>
                            <div class="product__image-slide">
                                <picture><source srcset="images/product__image-slide.webp" type="image/webp"><img src="images/product__image-slide.png" alt="Slide 1"></picture>
                            </div>
                        </div>
                    </div>
                    <div class="product__images-pagination"></div>
                    <div class="product__content">
                        <h3 class="product__name"><?php echo get_the_title(); ?></h3>
                        <div class="product__characteristics">
                            <p class="product__characteristics-title">Характеристики</p>
                            <div class="product__characteristics-wrapper">
                                <div class="product__characteristics-item">
                                    <span class="product__characteristics-name">ГОСТ:</span>
                                    <p class="product__characteristics-data">ТУ 14-1-5254-2006</p>
                                </div>
                                <div class="product__characteristics-item">
                                    <span class="product__characteristics-name">Марка:</span>
                                    <p class="product__characteristics-data">Сталь 3</p>
                                </div>
                                <div class="product__characteristics-item">
                                    <span class="product__characteristics-name">Диаметр:</span>
                                    <p class="product__characteristics-data">6 мм</p>
                                </div>
                            </div>
                            <div class="product__characteristics-prices">
                                <span class="product__characteristics-name price-name">Цена:</span>
                                <span class="product-price product__characteristics-price"><p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>22 500 руб./ м</span>
                            </div>
                        </div>
                        <div class="product__btns">
                            <div class="product__quantity">
                                <button class="product__quantity-left">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 9L1 5L5 1" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                </button>
                                <input class="product__quantity-result" value="100">
                                <button class="product__quantity-right">
                                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L5 5L1 1" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                </button>
                            </div>
                            <button class="btn product__btn">
                                Добавить в заказ
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1L14 7M14 7L9 13M14 7H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg> 
                            </button>
                            <button class="btn product__btn product__btn-added">
                                Добавено    
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="rgba(251,247,247,1)"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="tabs tabs__container" data-tabs="tabs-example">
            <div class="tabs__nav">
                <button class="tabs__trigger" type="button">Описание</button>
                <button class="tabs__trigger" type="button">Характеристика</button>
                <button class="tabs__trigger" type="button">Доставка и оплата</button>
            </div>
        
            <div class="tabs__content">
                <div class="tabs__panel">
                    Купить товар «Арматура 8 бухта А500 34028-16» в Санкт-Петербурге по выгодной цене за метр, тонну или другую единицу измерения. Онлайн-калькулятор рассчитает стоимость, размеры и массу изделия (кг, т).
                    Ознакомьтесь с описанием и техническими характеристиками товара «Арматура 8 бухта А500 34028-16» на официальном сайте или звоните по номеру в Санкт-Петербурге +7 (812) 123-45-67 и получите консультацию наших специалистов.
                    В продаже широкий ассортимент товаров категории «Сортовой прокат»: Катанка, Круг, Арматура и др. Мы отвечаем за качество и предлагаем профессиональный сервис: услуги резки и металлообработки, погрузку и доставку металлопроката.
                </div>
                <div class="tabs__panel">
                    Купить товар «Арматура 8 бухта А500 34028-16» в Санкт-Петербурге по выгодной цене за метр, тонну или другую единицу измерения. Онлайн-калькулятор рассчитает стоимость, размеры и массу изделия (кг, т).
                    Ознакомьтесь с описанием и техническими характеристиками товара «Арматура 8 бухта А500 34028-16» на официальном сайте или звоните по номеру в Санкт-Петербурге +7 (812) 123-45-67 и получите консультацию наших специалистов.
                </div>
                <div class="tabs__panel">
                    Ознакомьтесь с описанием и техническими характеристиками товара «Арматура 8 бухта А500 34028-16» на официальном сайте или звоните по номеру в Санкт-Петербурге +7 (812) 123-45-67 и получите консультацию наших специалистов.
                    В продаже широкий ассортимент товаров категории «Сортовой прокат»: Катанка, Круг, Арматура и др. Мы отвечаем за качество и предлагаем профессиональный сервис: услуги резки и металлообработки, погрузку и доставку металлопроката.
                </div>
            </div>
        </div>
        <section class="similar">
            <div class="similar__container">
                <h2 class="similar__title">Похожие товары</h2>
                <div class="similar__products">
                    <div class="similar__products-wrapper">
                        <div class="similar__product">
                            <div class="similar__img">
                                <picture><source srcset="images/similar-product.webp" type="image/webp"><img src="images/similar-product.png" alt="Продукт 1"></picture>
                            </div>
                            <div class="similar__product-text">
                                <h3 class="similar__product-name">Арматура А500с 6 мм сталь 3 ТУ 14-1-5254-94</h3>
                                <div class="similar__characteristics similar__product-characteristics">
                                    <p class="similar__characteristics-title">Характеристики:</p>
                                    <div class="similar__characteristics-items">
                                        <div class="similar__characteristics-item">
                                            <span class="similar__characteristics-name">ГОСТ:</span>
                                            <p class="similar__characteristics-data">ТУ 14-1-5254-2006</p>
                                        </div>
                                        <div class="similar__characteristics-item">
                                            <span class="similar__characteristics-name">Марка:</span>
                                            <p class="similar__characteristics-data">Сталь 3</p>
                                        </div>
                                        <div class="similar__characteristics-item">
                                            <span class="similar__characteristics-name">Диаметр:</span>
                                            <p class="similar__characteristics-data">6 мм</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="similar__product-prices">
                                    <p class="similar__product-price_name">Цена</p>
                                    <span class="similar-price similar__product-price">22 500 руб. / м</span>
                                </div>
                                <a href="" class="btn similar-btn similar__product-btn">
                                    Подробнее
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.5 1L14.5 7M14.5 7L9.5 13M14.5 7H1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                </a>
                            </div>
                        </div>
                        <div class="similar__product">
                            <div class="similar__img">
                                <picture><source srcset="images/similar-product.webp" type="image/webp"><img src="images/similar-product.png" alt="Продукт 1"></picture>
                            </div>
                            <div class="similar__product-text">
                                <h3 class="similar__product-name">Арматура А500с 6 мм сталь 3 ТУ 14-1-5254-94</h3>
                                <div class="similar__characteristics similar__product-characteristics">
                                    <p class="similar__characteristics-title">Характеристики:</p>
                                    <div class="similar__characteristics-items">
                                        <div class="similar__characteristics-item">
                                            <span class="similar__characteristics-name">ГОСТ:</span>
                                            <p class="similar__characteristics-data">ТУ 14-1-5254-2006</p>
                                        </div>
                                        <div class="similar__characteristics-item">
                                            <span class="similar__characteristics-name">Марка:</span>
                                            <p class="similar__characteristics-data">Сталь 3</p>
                                        </div>
                                        <div class="similar__characteristics-item">
                                            <span class="similar__characteristics-name">Диаметр:</span>
                                            <p class="similar__characteristics-data">6 мм</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="similar__product-prices">
                                    <p class="similar__product-price_name">Цена</p>
                                    <span class="similar-price similar__product-price">22 500 руб. / м</span>
                                </div>
                                <a href="" class="btn similar-btn similar__product-btn">
                                    Подробнее
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.5 1L14.5 7M14.5 7L9.5 13M14.5 7H1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                </a>
                            </div>
                        </div>

                        <div class="similar__product">
                            <div class="similar__img">
                                <picture><source srcset="images/similar-product.webp" type="image/webp"><img src="images/similar-product.png" alt="Продукт 1"></picture>
                            </div>
                            <div class="similar__product-text">
                                <h3 class="similar__product-name">Арматура А500с 6 мм сталь 3 ТУ 14-1-5254-94</h3>
                                <div class="similar__characteristics similar__product-characteristics">
                                    <p class="similar__characteristics-title">Характеристики:</p>
                                    <div class="similar__characteristics-items">
                                        <div class="similar__characteristics-item">
                                            <span class="similar__characteristics-name">ГОСТ:</span>
                                            <p class="similar__characteristics-data">ТУ 14-1-5254-2006</p>
                                        </div>
                                        <div class="similar__characteristics-item">
                                            <span class="similar__characteristics-name">Марка:</span>
                                            <p class="similar__characteristics-data">Сталь 3</p>
                                        </div>
                                        <div class="similar__characteristics-item">
                                            <span class="similar__characteristics-name">Диаметр:</span>
                                            <p class="similar__characteristics-data">6 мм</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="similar__product-prices">
                                    <p class="similar__product-price_name">Цена</p>
                                    <span class="similar-price similar__product-price">22 500 руб. / м</span>
                                </div>
                                <a href="" class="btn similar-btn similar__product-btn">
                                    Подробнее
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.5 1L14.5 7M14.5 7L9.5 13M14.5 7H1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                </a>
                            </div>
                        </div>

                        <div class="similar__product">
                            <div class="similar__img">
                                <picture><source srcset="images/similar-product.webp" type="image/webp"><img src="images/similar-product.png" alt="Продукт 1"></picture>
                            </div>
                            <div class="similar__product-text">
                                <h3 class="similar__product-name">Арматура А500с 6 мм сталь 3 ТУ 14-1-5254-94</h3>
                                <div class="similar__characteristics similar__product-characteristics">
                                    <p class="similar__characteristics-title">Характеристики:</p>
                                    <div class="similar__characteristics-items">
                                        <div class="similar__characteristics-item">
                                            <span class="similar__characteristics-name">ГОСТ:</span>
                                            <p class="similar__characteristics-data">ТУ 14-1-5254-2006</p>
                                        </div>
                                        <div class="similar__characteristics-item">
                                            <span class="similar__characteristics-name">Марка:</span>
                                            <p class="similar__characteristics-data">Сталь 3</p>
                                        </div>
                                        <div class="similar__characteristics-item">
                                            <span class="similar__characteristics-name">Диаметр:</span>
                                            <p class="similar__characteristics-data">6 мм</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="similar__product-prices">
                                    <p class="similar__product-price_name">Цена</p>
                                    <span class="similar-price similar__product-price">22 500 руб. / м</span>
                                </div>
                                <a href="" class="btn similar-btn similar__product-btn">
                                    Подробнее
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.5 1L14.5 7M14.5 7L9.5 13M14.5 7H1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="photo">
            <div class="photo__container">
                <h2 class="similar__title">Фотографии продукции в наличии</h2>
                <div class="photo__slider" data-mobile="false">
                    <div class="photo__wrapper">
                        <div class="photo__slide">
                            <picture><source srcset="images/photo-slide1.webp" type="image/webp"><img src="images/photo-slide1.png" alt="Фото 1"></picture>
                        </div>
                        <div class="photo__slide">
                            <picture><source srcset="images/photo-slide2.webp" type="image/webp"><img src="images/photo-slide2.png" alt="Фото 1"></picture>
                        </div>
                        <div class="photo__slide">
                            <picture><source srcset="images/photo-slide1.webp" type="image/webp"><img src="images/photo-slide1.png" alt="Фото 1"></picture>
                        </div>
                        <div class="photo__slide">
                            <picture><source srcset="images/photo-slide3.webp" type="image/webp"><img src="images/photo-slide3.png" alt="Фото 1"></picture>
                        </div>
                        <div class="photo__slide">
                            <picture><source srcset="images/photo-slide2.webp" type="image/webp"><img src="images/photo-slide2.png" alt="Фото 1"></picture>
                        </div>
                    </div>
                    <div class="photo-slider-pagination"></div>
                </div>
            </div>
        </section>
        <section class="shipment__form shipment__form__container">
            <div class="shipment__form-content">
                <h3 class="shipment__form-title">Получите <span>расчет стоимости поставки</span></h3>
                <p class="shipment__form-subtitle">
                    Оставьте контактные данные <br> или <span>напишите на почту</span>
                </p>
                <span class="shipment__form-sub-subtitle">Специалист свяжется с вами и:</span>
                <div class="shipment__form-items">
                    <div class="shipment__form-item">
                        <img src="../images/shi1.svg" alt="" class="shipment__form-item__img">
                        <span class="shipment__form-item__text">Ответит на все вопросы технического характера</span>
                    </div>
                    <div class="shipment__form-item">
                        <img src="../images/shi2.svg" alt="" class="shipment__form-item__img">
                        <span class="shipment__form-item__text">Ответит на вопросы по доставке и оплате</span>
                    </div>
                    <div class="shipment__form-item">
                        <img src="../images/shi3.svg" alt="" class="shipment__form-item__img">
                        <span class="shipment__form-item__text">Подскажет, как лучше реализовать ваши задачи</span>
                    </div>
                    <div class="shipment__form-item">
                        <img src="../images/shi4.svg" alt="" class="shipment__form-item__img">
                        <span class="shipment__form-item__text">Рассчитает стоимость
                            и сроки поставки</span>
                    </div>
                </div>
            </div>
            <form action="" class="form__shipment shipment__form-form">
                <p class="form__shipment-title">Подготовим расчет <br> стоимости <span>в течение 1 часа</span></p>
                <label class="form__shipment-label" for="">
                    Введите номер телефона
                    <input class="form__shipment-input" type="text" placeholder="+7 (900) 000-00-00"> 
                </label>
        
                <label class="form__shipment-label" for="">
                    Введите почту
                    <input class="form__shipment-input" type="text" placeholder="pochta@ya.ru"> 
                </label>
                <button class="btn form__shipment-btn">
                    Получить расчет цены
                    <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.66667 1L15.5 7M15.5 7L9.66667 13M15.5 7L1.5 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                </button>
                <p class="form__shipment-date">Нажимая на кнопку, вы даёте согласие на обработку персональных данных в соответствии <a class="form__shipment-datelink" href="#">с Политикой конфиденциальности</a></p>
            </form> 
        </section>
      </main>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>


<?php
get_footer( );