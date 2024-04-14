<?php 

/*
Template Name: Главная страница
Template Post Type: post, page, product
*/
?>

<?php get_header(); ?>




      <main class="page">
        <div data-observ></div>

        <section class="hero">
    <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
        <source src="https://res.cloudinary.com/codelife/video/upload/v1637805738/intro_l5ul1k.mp4" type="video/mp4">
        </video>
    <div class="hero__container">
        <h1 class="hero__title"><span>Нержавеющий металлопрокат </span>из наличия и под заказ со складов в Москве, 
            Санкт-Петербурге и Нижнем Новгороде</h1>
        <button class="hero__price" data-type="popup-1">
            Получить расчет цены 
            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.16667 1L15 7M15 7L9.16667 13M15 7L1 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg> 
        </button>

        <div class="hero__items">
            <div class="hero__item">
                <p class="hero__item-title">5 000+</p>
                <span class="hero__item-subtitle">Позиций в каталоге</span>
            </div>

            <div class="hero__item">
                <p class="hero__item-title">1-2 дня</p>
                <span class="hero__item-subtitle">Отгрузка и доставка</span>
            </div>

            <div class="hero__item">
                <p class="hero__item-title">Отстрочка</p>
                <span class="hero__item-subtitle">Кредитование, рассрочка</span>
            </div>

            <div class="hero__item">
                <p class="hero__item-title">Гарантии</p>
                <span class="hero__item-subtitle">Оплата при получении</span>
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
                    <img src="<?php echo get_template_directory_uri() ?>/images/p1.svg" alt="">
                </div>
                <div class="part__item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/p2.svg" alt="">
                </div>

                <div class="part__item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/p1.svg" alt="">
                </div>
                <div class="part__item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/p2.svg" alt="">
                </div>

                <div class="part__item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/p1.svg" alt="">
                </div>
                <div class="part__item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/p2.svg" alt="">
                </div>
                <div class="part__item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/p2.svg" alt="">
                </div>
                <div class="part__item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/p2.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
        <section class="products">
    <div class="products__container">
        <div class="products__slider products__wrapper" data-mobile="false">
            <div class="products__items products__slider-wrapper">
                <div class="products__item products__slide">
                    <div class="products__item-img">
                        <p class="products__item-name">Трубы</p>
                    </div>
                    <div class="products__item-links">
                        <a href="#" class="products__item-link">
                            Трубы г/д
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Трубы х/д
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            ВГП, электросварные трубы
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Трубы электросварные низколегированные
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Трубы нержавеющие
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Сваи винтовые
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Трубы чугунные
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>
                        
                    </div>
                </div>

                <div class="products__item products__slide">
                    <div class="products__item-img">
                        
                        <p class="products__item-name">сортовый ПРОКАТ</p>
                    </div>
                    <div class="products__item-links">
                        <a href="#" class="products__item-link">
                            Арматура, катанка
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Сетка сварная
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Балка, швеллер
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Уголок
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Круг
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Полоса, квадрат
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Оцинкованный прокат
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>


                        
                    </div>
                </div>


                <div class="products__item products__slide">
                    <div class="products__item-img">
                        <p class="products__item-name">ЛИСТОВОЙ ПРОКАТ</p>
                    </div>
                    <div class="products__item-links">
                        <a href="#" class="products__item-link">
                            Лист г/к
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Лист х/к
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Лист оцинкованный
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Лист нержавеющий
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Профнастил (профлист)
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Просечно-вытяжной лист (ПВЛ)
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Рулонная сталь
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>


                        
                    </div>
                </div>

                <div class="products__item products__slide">
                    <div class="products__item-img">
                        <p class="products__item-name">метизы</p>
                    </div>
                    <div class="products__item-links">
                        <a href="#" class="products__item-link">
                            Проволока, канаты
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Сетка, лента
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Крепеж, гвозди, болты, цепи
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Электроды
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>
                        
                    </div>
                </div>

                <div class="products__item products__slide">
                    <div class="products__item-img">
                        <p class="products__item-name">НЕРЖАВЕЮЩАЯ СТАЛЬ</p>
                    </div>
                    <div class="products__item-links">
                        <a href="#" class="products__item-link">
                            Круг, квадрат, шестигранник
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Полоса, уголок
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Трубы нержавейка
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Лист нержавеющий
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Нержавеющие метизы
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Комплектующие для лестничных ограждений
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Детали трубопровода
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>


                        
                    </div>
                </div>

                <div class="products__item products__slide">
                    <div class="products__item-img">
                        <p class="products__item-name">СТРОИТЕЛЬНЫЕ МАТЕРИАЛЫ</p>
                    </div>
                    <div class="products__item-links">
                        <a href="#" class="products__item-link">
                            Трубы и фитинги
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Запорная арматура и электроприводы
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Детали трубопроводов, хомуты и крепеж
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Фильтры, грязевики, элеваторы
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Газобетон
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Перемычки газобетонные
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        <a href="#" class="products__item-link">
                            Клинкерный кирпич
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>
                        <a href="#" class="products__item-link">
                            Облицовочный кирпич
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>
                        <a href="#" class="products__item-link">
                            Утеплитель
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63844 1.26104L11.1604 1.26092M11.1604 1.26092L11.1604 9.66171M11.1604 1.26092L1.26094 11.1604" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </a>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <section class="deliver">
    <div class="deliver__container">
        <div class="deliver__wrapper">
        <div class="deliver__up">
            <div class="deliver__up-left">
                <h2 class="deliver__title">Доставляем металлопрокат <br> по <span>всей России и в страны СНГ</span></h2>
                <p class="deliver__subtitle">Отправляем сборными и прямыми <br> машинами <span>через 24 часа после оплаты</span></p>
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
                    <p class="deliver__down-text">Уделяем внимание упаковке, чтобы груз приехал в 100% сохранности</p>
                </div>
            </div>
            <p class="deliver__text deliver__text-mb">
                Филиал и склад готовой продукции в Москве и Санкт-Петербурге
            </p>
            <button class="btn deliver__down-btn">
                Смотреть каталог
                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 1L14 7M14 7L9 13M14 7H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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
                    <path d="M9 1L14 7M14 7L9 13M14 7H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> 
            </button>
        </div>
        <div class="about__gallery">
            <div class="about__gallery-left">
                <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/a1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/a1.png" alt=""></picture>
            </div>
            <div class="about__gallery-right">
                <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/a2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/images/a2.png" alt=""></picture>
                <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/a3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/images/a3.png" alt=""></picture>
            </div>
        </div>
        <div class="about-slider">
            
            <div class="about-wrapper">
              
              <div class="about-slide">
                <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/about-slid.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/about-slid.png" alt="Slide 1"></picture>
              </div>

              <div class="about-slide">
                <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/about-slid.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/about-slid.png" alt="Slide 1"></picture>
              </div>

              <div class="about-slide">
                <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/about-slid.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/about-slid.png" alt="Slide 1"></picture>
              </div>

              <div class="about-slide">
                <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/about-slid.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/about-slid.png" alt="Slide 1"></picture>
              </div>
            </div>
            
            <div class="about-pagination"></div>
          
        </div>
        <a href="#" class="btn about__project-btn about__project-btn__mb">
            О компании 
            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 1L14 7M14 7L9 13M14 7H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg> 
        </a>
    </div>
</section>
        <section class="stock">
    <div class="stock__container">
        <h2 class="stock__title">Производственная база и склад</h2>
        <div class="stock__gallery">
            <div class="stock__gallery-up">
                <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/st1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/st1.png" alt=""></picture>
                <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/st2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/st2.png" alt=""></picture>
                <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/st3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/st3.png" alt=""></picture>
            </div>
            <div class="stock__gallery-down">
                <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/st4.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/st4.png" alt=""></picture>
                <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/st5.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/st5.png" alt=""></picture>
            </div>
        </div>
        <div class="stock-slider">
            <div class="stock-wrapper">
                <div class="stock-slide">
                    <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt=""></picture>
                </div>
                <div class="stock-slide">
                    <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt=""></picture>
                </div>
                <div class="stock-slide">
                    <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt=""></picture>
                </div>
                <div class="stock-slide">
                    <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt=""></picture>
                </div>
                <div class="stock-slide">
                    <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt=""></picture>
                </div>
                <div class="stock-slide">
                    <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt=""></picture>
                </div>
                <div class="stock-slide">
                    <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt=""></picture>
                </div>
                <div class="stock-slide">
                    <picture><source srcset="<?php echo get_template_directory_uri() ?>/images/stock-slide.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/stock-slide.png" alt=""></picture>
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
                    <p class="contact__col-hometext contact__col-text">Санкт-Петербург, ул. Заозерная, дом <br> 8, корпус 1, офис 27</p>
                </div>
                <div class="contact__col">
                    <span class="contact__col-title contact__home-coltitle">Телефон:</span>
                    <a tel="+7 966 937-23-11" class="contact__col-hometext contact__col-text">+7 966 937-23-11<p></p>
                    <a tel="+7 993 492-36-93" class="contact__col-hometext contact__col-text">+7 993 492-36-93<p></p>
                </a></a></div>
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

      <footer class="footer">
  <div class="footer__container">
    <div class="footer__wrapper">
      <img class="" src="<?php echo get_template_directory_uri() ?>/images/footer-logo.svg" alt="">
      <div class="footer__cols">
        <div class="footer__col footer__about">
          <div class="footer__about-name">
            <p>Производство и продажа нержавеющего металлопроката со складов в Санкт-Петербурге и Москве</p>
          </div>
          <div class="footer__about-address footer__address">
            <span class="footer__title footer__address-title">Адрес:</span>
            <p class="footer__text footer__address-text">Санкт-Петербург, ул. Заозерная, дом 8, корпус 1, офис 27</p>
          </div>
          <div class="footer__about-time footer__time">
            <span class="footer__title">Время работы:</span>
            <p class="footer__text footer__time-time">Пн-пт: 09:00-18:00</p>
            <p>© Все права защищены</p>
            <a class="footer__about-link" href="#">Договор оферты</a>
          </div>
        </div>
        <div class="footer__col footer__customers">
          <h3 class="footer__col-title">Покупателям</h3>
          <div class="footer__customers-links">
            <a href="#" class="footer__title footer__customers-link">Контакты</a>
            <a href="#" class="footer__title footer__customers-link">Каталог</a>
            <a href="#" class="footer__title footer__customers-link">Отгрузки</a>
            <a href="#" class="footer__title footer__customers-link">Отзывы и сертификаты</a>
          </div>
        </div>
        <div class="footer__col">
          <h3 class="footer__col-title">Станки</h3>
          <div class="footer__customers-links">
            <a href="#" class="footer__title footer__customers-link">Трубы нержавеющие</a>
            <a href="#" class="footer__title footer__customers-link">Сортовой прокат</a>
            <a href="#" class="footer__title footer__customers-link">Лента и рулоны</a>
            <a href="#" class="footer__title footer__customers-link">Листовой прокат</a>
            <a href="#" class="footer__title footer__customers-link">Трубы электросварные</a>
            <a href="#" class="footer__title footer__customers-link">Профлист</a>
            <a href="#" class="footer__title footer__customers-link">Сетка сварная</a>
            <a href="#" class="footer__title footer__customers-link">Композитная арматура</a>
          </div>
        </div>
        <div class="footer__col footer__social">
          <div class="footer__social-text">
            <p class="footer__title" data-type="popup-3">Закажите обратный звонок</p>
            <span>Перезвоним за 5 минут</span>
          </div>

          <div class="footer__social-numbers">
            <a href="tel:+7 966 937-23-11" class="footer__number">+7 966 937-23-11</a>
            <a href="tel:+7 993 492-36-93" class="footer__number">+7 993 492-36-93</a>
            <a href="mailto:info@sait.com" class="footer__gmail">info@sait.com</a>
          </div>

          <div class="footer__network">
            <a href="http://">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="14.5" stroke="#808080"/>
                <path d="M21.8747 14.2226C22.1414 13.8779 22.3531 13.6013 22.5094 13.3927C23.6352 11.8958 24.1232 10.9396 23.9737 10.5227L23.915 10.4251C23.876 10.3664 23.7749 10.3126 23.6124 10.2638C23.4496 10.2151 23.2414 10.2074 22.9877 10.2395L20.1762 10.2593C20.1111 10.2529 20.046 10.2544 19.9809 10.2638C19.9158 10.2737 19.8736 10.2837 19.8539 10.2932C19.8343 10.3031 19.8181 10.311 19.8052 10.3175L19.7662 10.3468C19.7337 10.3662 19.6979 10.4005 19.6589 10.4495C19.6198 10.4984 19.5871 10.5551 19.5612 10.6204C19.2553 11.4078 18.9072 12.1401 18.5167 12.817C18.2758 13.2205 18.0544 13.5706 17.8529 13.8663C17.6512 14.1627 17.4819 14.3806 17.3453 14.5203C17.2086 14.6602 17.0849 14.7727 16.9743 14.857C16.8635 14.9419 16.779 14.9775 16.7206 14.9646C16.6619 14.9517 16.6066 14.9387 16.5546 14.9253C16.4635 14.8669 16.3901 14.7874 16.335 14.6863C16.2796 14.5857 16.2423 14.4587 16.2227 14.3056C16.2032 14.1528 16.1916 14.0209 16.1886 13.9101C16.1851 13.7995 16.1869 13.6434 16.1936 13.4414C16.2 13.2397 16.2032 13.1032 16.2032 13.0315C16.2032 12.7844 16.2082 12.5158 16.218 12.2261C16.2277 11.9366 16.2359 11.7071 16.2423 11.5378C16.2488 11.3688 16.252 11.1897 16.252 11.0009C16.252 10.8125 16.2406 10.6641 16.2177 10.5566C16.1948 10.4495 16.1606 10.3454 16.1153 10.2443C16.0696 10.1436 16.003 10.0653 15.915 10.0102C15.8271 9.95477 15.7182 9.91103 15.5881 9.87824C15.2429 9.79997 14.8036 9.75816 14.2701 9.7513C13.0595 9.73879 12.2818 9.81681 11.9369 9.9858C11.8002 10.0576 11.6765 10.155 11.5659 10.2787C11.4487 10.4221 11.4325 10.5003 11.5172 10.5128C11.9078 10.5715 12.1842 10.7116 12.3469 10.9327L12.4056 11.0498C12.451 11.1347 12.4965 11.2843 12.5422 11.499C12.5877 11.7137 12.617 11.9513 12.6302 12.2117C12.6627 12.6867 12.6627 13.0933 12.6302 13.432C12.5976 13.7706 12.5668 14.034 12.5375 14.2224C12.5082 14.4112 12.4642 14.5641 12.4058 14.6811C12.3471 14.7986 12.3081 14.8702 12.2885 14.8962C12.2689 14.9221 12.2527 14.9384 12.2398 14.945C12.1551 14.9773 12.0674 14.9937 11.9762 14.9937C11.885 14.9937 11.7744 14.948 11.6442 14.8568C11.514 14.766 11.3789 14.6406 11.2392 14.4811C11.0991 14.3218 10.9415 14.0987 10.7656 13.8122C10.5899 13.5261 10.4075 13.1875 10.2189 12.7971L10.0628 12.5139C9.96521 12.3319 9.83175 12.0666 9.66255 11.7184C9.49334 11.3703 9.34351 11.0336 9.21354 10.7079C9.16137 10.5715 9.08332 10.4674 8.97924 10.3956L8.93053 10.3663C8.89798 10.3404 8.84582 10.3126 8.77425 10.2835C8.70246 10.2542 8.6279 10.233 8.54964 10.2199L5.87477 10.2393C5.60145 10.2393 5.41607 10.3014 5.31844 10.4251L5.27941 10.4835C5.25969 10.5163 5.25 10.5684 5.25 10.6398C5.25 10.7116 5.26962 10.7993 5.30864 10.9032C5.69922 11.8211 6.12389 12.7062 6.58259 13.5585C7.04153 14.4112 7.44011 15.098 7.77852 15.6186C8.11693 16.1396 8.46183 16.6306 8.81341 17.0928C9.165 17.5549 9.39757 17.8509 9.51137 17.9809C9.62518 18.1113 9.71464 18.209 9.77977 18.2738L10.0238 18.5083C10.1799 18.6644 10.4094 18.8515 10.7121 19.0696C11.0147 19.2878 11.3497 19.5025 11.7177 19.7137C12.0852 19.9254 12.5133 20.0976 13.0013 20.2313C13.4894 20.3649 13.9644 20.4186 14.4266 20.3923H15.5492C15.7771 20.3729 15.9495 20.3016 16.0666 20.1776L16.1056 20.1289C16.1314 20.0901 16.156 20.0297 16.1788 19.9484C16.2015 19.8672 16.2132 19.7775 16.2132 19.6801C16.2065 19.4003 16.2278 19.1477 16.2765 18.9235C16.3253 18.6989 16.3806 18.5299 16.4425 18.4156C16.5044 18.302 16.5742 18.2059 16.6524 18.1276C16.7305 18.0494 16.7857 18.0026 16.8184 17.9862C16.851 17.9703 16.8771 17.9588 16.8965 17.9519C17.0526 17.9 17.2364 17.9504 17.4481 18.1033C17.6596 18.2565 17.8581 18.4449 18.0437 18.6695C18.229 18.8941 18.4519 19.1461 18.7124 19.4261C18.9725 19.7059 19.2004 19.9141 19.3957 20.0508L19.591 20.1683C19.7211 20.2461 19.8902 20.3177 20.0986 20.383C20.3068 20.4479 20.4892 20.4643 20.6452 20.4317L23.1444 20.3925C23.3917 20.3925 23.5837 20.352 23.7204 20.2705C23.8571 20.1896 23.9384 20.0995 23.9645 20.0021C23.9903 19.9045 23.992 19.7943 23.9694 19.6704C23.9466 19.5468 23.9237 19.4606 23.9011 19.4119C23.8783 19.3632 23.8571 19.3222 23.8375 19.2899C23.512 18.7042 22.8905 17.9849 21.9729 17.1324L21.9533 17.1129L21.9436 17.1031L21.9339 17.0935H21.9241C21.5074 16.6965 21.244 16.4296 21.1334 16.2927C20.9317 16.0328 20.886 15.7692 20.9968 15.5023C21.0744 15.3 21.3671 14.8736 21.8747 14.2226Z" fill="#808080"/>
              </svg>
            </a>
            <a href="http://">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="14.5" stroke="#808080"/>
                <path d="M11.4302 17.1474L11.1696 20.9166C11.5424 20.9166 11.7038 20.7519 11.8974 20.5541L13.6451 18.8362L17.2663 21.5639C17.9305 21.9446 18.3984 21.7441 18.5776 20.9355L20.9546 9.47944L20.9552 9.47877C21.1659 8.46897 20.6002 8.0741 19.9531 8.32182L5.9812 13.8237C5.02764 14.2044 5.04208 14.7512 5.8191 14.9989L9.39115 16.1417L17.6883 10.8018C18.0788 10.5358 18.4338 10.683 18.1418 10.9489L11.4302 17.1474Z" fill="#808080"/>
              </svg>
            </a>
            <a href="http://">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15" cy="15" r="14.5" stroke="#808080"/>
                <path d="M21.7179 11.6916C21.6845 10.9341 21.562 10.4133 21.3866 9.96199C21.2055 9.48297 20.927 9.05411 20.5621 8.69759C20.2056 8.33553 19.7739 8.05419 19.3005 7.87599C18.8466 7.70051 18.3285 7.578 17.571 7.54461C16.8078 7.50838 16.5655 7.5 14.6299 7.5C12.6942 7.5 12.4519 7.50838 11.6916 7.54178C10.9341 7.57518 10.4133 7.69779 9.9621 7.87316C9.48297 8.05419 9.05411 8.3327 8.69759 8.69759C8.33553 9.05411 8.0543 9.4858 7.87599 9.95927C7.70051 10.4133 7.578 10.9312 7.54461 11.6887C7.50838 12.4519 7.5 12.6942 7.5 14.6299C7.5 16.5655 7.50838 16.8078 7.54178 17.5681C7.57518 18.3257 7.69779 18.8465 7.87327 19.2977C8.0543 19.7768 8.33553 20.2056 8.69759 20.5621C9.05411 20.9242 9.4858 21.2055 9.95927 21.3837C10.4133 21.5592 10.9312 21.6817 11.6889 21.7151C12.4491 21.7486 12.6915 21.7569 14.6271 21.7569C16.5628 21.7569 16.8051 21.7486 17.5654 21.7151C18.3229 21.6817 18.8437 21.5592 19.2949 21.3837C20.253 21.0133 21.0106 20.2558 21.381 19.2977C21.5564 18.8437 21.679 18.3257 21.7124 17.5681C21.7458 16.8078 21.7542 16.5655 21.7542 14.6299C21.7542 12.6942 21.7513 12.4519 21.7179 11.6916ZM20.4341 17.5124C20.4034 18.2087 20.2864 18.5847 20.189 18.8354C19.9494 19.4565 19.4565 19.9494 18.8354 20.189C18.5847 20.2864 18.206 20.4034 17.5124 20.434C16.7605 20.4675 16.5349 20.4757 14.6327 20.4757C12.7304 20.4757 12.5021 20.4675 11.7528 20.434C11.0566 20.4034 10.6806 20.2864 10.4299 20.189C10.1208 20.0747 9.83949 19.8937 9.61113 19.657C9.3744 19.4258 9.19336 19.1473 9.07913 18.8382C8.98165 18.5875 8.8647 18.2087 8.83413 17.5153C8.80062 16.7633 8.79235 16.5377 8.79235 14.6354C8.79235 12.7332 8.80062 12.5048 8.83413 11.7557C8.8647 11.0594 8.98165 10.6834 9.07913 10.4327C9.19336 10.1235 9.3744 9.84231 9.61396 9.61385C9.84503 9.37712 10.1235 9.19608 10.4327 9.08196C10.6834 8.98448 11.0622 8.86753 11.7557 8.83685C12.5076 8.80345 12.7333 8.79507 14.6354 8.79507C16.5405 8.79507 16.766 8.80345 17.5153 8.83685C18.2115 8.86753 18.5875 8.98448 18.8382 9.08196C19.1473 9.19608 19.4286 9.37712 19.657 9.61385C19.8937 9.84503 20.0747 10.1235 20.189 10.4327C20.2864 10.6834 20.4034 11.0621 20.4341 11.7557C20.4675 12.5076 20.4759 12.7332 20.4759 14.6354C20.4759 16.5377 20.4675 16.7605 20.4341 17.5124Z" fill="#808080"/>
                <path d="M14.6312 10.9673C12.6092 10.9673 10.9688 12.6077 10.9688 14.6297C10.9688 16.6517 12.6092 18.2921 14.6312 18.2921C16.6532 18.2921 18.2936 16.6517 18.2936 14.6297C18.2936 12.6077 16.6532 10.9673 14.6312 10.9673ZM14.6312 17.0054C13.3194 17.0054 12.2554 15.9415 12.2554 14.6297C12.2554 13.3179 13.3194 12.254 14.6312 12.254C15.943 12.254 17.0069 13.3179 17.0069 14.6297C17.0069 15.9415 15.943 17.0054 14.6312 17.0054Z" fill="#808080"/>
                <path d="M19.2921 10.8233C19.2921 11.2954 18.9093 11.6783 18.437 11.6783C17.9649 11.6783 17.582 11.2954 17.582 10.8233C17.582 10.351 17.9649 9.96826 18.437 9.96826C18.9093 9.96826 19.2921 10.351 19.2921 10.8233Z" fill="#808080"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__mb">
      <div class="footer__mb-wrapper footer__mb__container">
        <div class="footer__header">
          <div class="footer__logo">
            <img src="<?php echo get_template_directory_uri() ?>/images/footer-logo.svg" alt="">
            <p class="footer__logo-text">Невский металл</p>
          </div>
          <div class="footer__serach">
            <div class="header__main-search header__main-search__mb">
              <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.4855 14.6L18 18M16.8667 8.93333C16.8667 13.3148 13.3148 16.8667 8.93333 16.8667C4.55187 16.8667 1 13.3148 1 8.93333C1 4.55187 4.55187 1 8.93333 1C13.3148 1 16.8667 4.55187 16.8667 8.93333Z" stroke="#9D9D9C" stroke-width="2" stroke-linecap="round"/>
              </svg>
              <input type="" placeholder="Искать в каталоге">
            </div>
          </div>
        </div>
        <div class="header__mb-phones">
          <p>Телефон</p>
          <a href="tel:+7 966 937-23-11">+7 966 937-23-11</a> <br>
          <a href="tel:+7 993 492-36-93">+7 993 492-36-93</a>
          <p>Закажите обратный звонок <br> <span class="orange__text">Перезвоним за 5 минут</span></p>
        </div>
        <div class="footer__mb-list__wrapper">
          <div class="header__mb-nav">
            <p>Станки</p>
            <ul class="header__mb-list">
              <li class="header__mb-item">
                <a class="header__mb-link" href="../catalog-filter.html">Трубы нержавеющие</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../catalog-filter.html">Сортовой прокат</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../catalog-filter.html">Лента и рулоны</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../catalog-filter.html">Листовой прокат</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../catalog-filter.html">Трубы электросварные</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../catalog-filter.html">Профлист</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../catalog-filter.html">Сетка сварная</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../catalog-filter.html">Композитная арматура</a>
              </li>
            </ul>
          </div>
          <div class="header__mb-nav">
            <p>Покупателям</p>
            <ul class="footer__col">
              <li class="footer__customers-links">
                <a class="footer__title footer__customers-link" href="../contact.html">Контакты</a>
              </li>
              <li class="header__mb-item">
                <a class="footer__title footer__customers-link" href="../catalog.html">Каталог</a>
              </li>
              <li class="header__mb-item">
                <a class="footer__title footer__customers-link" href="../shipment-page.html">Отгрузки</a>
              </li>
              <li class="header__mb-item">
                <a class="footer__title footer__customers-link" href="../reviews.html">Отзывы и сертификаты</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="header__mb-items">
          <div class="header__mb-item">
            <p>Адрес:</p> <br>
            <span>Санкт-Петербург, ул. Заозерная, дом 8, корпус 1, офис 27</span>
          </div>
          <div class="header__mb-item">
            <p>Время работы:</p> <br>
            <span>Пн-пт: 09:00-18:00</span>
          </div>
          <div class="header__mb-item">
            <p>Почта:</p> <br>
            <a class="header__mb-mail" href="mailto:info@sait.com">info@sait.com</a>
          </div>
        </div>

        <div class="header__mb-politic">
          <a href="http://#">Политика конфиденциальности <br>
            Договор оферты</a>
          <p>©Все права защищены</p>
        </div>

        <div class="header__mb-social">
          <a href="">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="22.5" cy="22.5" r="22" stroke="#808080"/>
              <path d="M32.8121 21.3339C33.212 20.8169 33.5296 20.402 33.764 20.089C35.4529 17.8437 36.1849 16.4094 35.9605 15.7841L35.8725 15.6376C35.814 15.5497 35.6624 15.4689 35.4186 15.3958C35.1744 15.3227 34.8621 15.311 34.4815 15.3593L30.2643 15.389C30.1666 15.3793 30.069 15.3816 29.9713 15.3958C29.8737 15.4106 29.8103 15.4255 29.7809 15.4397C29.7514 15.4546 29.7272 15.4666 29.7078 15.4763L29.6493 15.5202C29.6005 15.5494 29.5469 15.6008 29.4883 15.6742C29.4297 15.7476 29.3806 15.8326 29.3418 15.9306C28.883 17.1117 28.3608 18.2101 27.775 19.2254C27.4137 19.8307 27.0817 20.3558 26.7794 20.7994C26.4767 21.244 26.2229 21.571 26.0179 21.7804C25.8129 21.9903 25.6273 22.159 25.4615 22.2855C25.2953 22.4129 25.1685 22.4663 25.0809 22.4469C24.9929 22.4275 24.9099 22.4081 24.8319 22.388C24.6952 22.3004 24.5852 22.1811 24.5025 22.0294C24.4194 21.8785 24.3635 21.688 24.334 21.4584C24.3049 21.2292 24.2874 21.0313 24.2829 20.8651C24.2777 20.6993 24.2803 20.4652 24.2903 20.1622C24.3001 19.8595 24.3049 19.6549 24.3049 19.5472C24.3049 19.1766 24.3123 18.7738 24.327 18.3392C24.3415 17.905 24.3538 17.5606 24.3635 17.3067C24.3732 17.0532 24.378 16.7845 24.378 16.5013C24.378 16.2187 24.3609 15.9962 24.3265 15.8349C24.2922 15.6742 24.2408 15.518 24.1729 15.3664C24.1044 15.2154 24.0045 15.098 23.8725 15.0153C23.7407 14.9322 23.5773 14.8665 23.3821 14.8174C22.8644 14.7 22.2054 14.6372 21.4052 14.6269C19.5893 14.6082 18.4227 14.7252 17.9054 14.9787C17.7004 15.0864 17.5148 15.2325 17.3489 15.4181C17.173 15.6331 17.1488 15.7505 17.2759 15.7692C17.8617 15.8572 18.2763 16.0674 18.5204 16.3991L18.6084 16.5747C18.6766 16.7021 18.7448 16.9265 18.8133 17.2485C18.8816 17.5706 18.9256 17.9269 18.9453 18.3175C18.9941 19.0301 18.9941 19.64 18.9453 20.1479C18.8965 20.6559 18.8502 21.051 18.8063 21.3336C18.7623 21.6169 18.6963 21.8461 18.6087 22.0217C18.5207 22.1979 18.4622 22.3052 18.4328 22.3443C18.4034 22.3831 18.3791 22.4077 18.3597 22.4174C18.2327 22.4659 18.1011 22.4905 17.9643 22.4905C17.8275 22.4905 17.6616 22.4219 17.4664 22.2851C17.271 22.1491 17.0683 21.9609 16.8588 21.7216C16.6486 21.4827 16.4122 21.148 16.1484 20.7183C15.8849 20.2892 15.6113 19.7812 15.3284 19.1957L15.0943 18.7708C14.9478 18.4979 14.7476 18.0999 14.4938 17.5777C14.24 17.0555 14.0153 16.5504 13.8203 16.0619C13.7421 15.8572 13.625 15.701 13.4689 15.5934L13.3958 15.5494C13.347 15.5106 13.2687 15.4689 13.1614 15.4252C13.0537 15.3812 12.9418 15.3495 12.8245 15.3298L8.81215 15.3589C8.40217 15.3589 8.12411 15.4521 7.97765 15.6376L7.91912 15.7253C7.88953 15.7744 7.875 15.8527 7.875 15.9597C7.875 16.0674 7.90443 16.199 7.96297 16.3548C8.54883 17.7316 9.18584 19.0593 9.87389 20.3377C10.5623 21.6169 11.1602 22.647 11.6678 23.4279C12.1754 24.2094 12.6927 24.9459 13.2201 25.6392C13.7475 26.3324 14.0964 26.7763 14.2671 26.9713C14.4378 27.1669 14.572 27.3134 14.6696 27.4107L15.0357 27.7625C15.2698 27.9966 15.6141 28.2772 16.0681 28.6045C16.5221 28.9317 17.0246 29.2537 17.5765 29.5706C18.1278 29.8881 18.77 30.1464 19.502 30.3469C20.234 30.5474 20.9466 30.6279 21.6399 30.5884H23.3239C23.6656 30.5593 23.9242 30.4523 24.0999 30.2664L24.1584 30.1933C24.1971 30.1351 24.234 30.0446 24.2683 29.9226C24.3022 29.8008 24.3198 29.6662 24.3198 29.5201C24.3097 29.1005 24.3417 28.7215 24.4148 28.3852C24.4879 28.0483 24.5709 27.7948 24.6638 27.6235C24.7566 27.453 24.8613 27.3088 24.9786 27.1914C25.0958 27.074 25.1785 27.0039 25.2277 26.9793C25.2765 26.9554 25.3157 26.9383 25.3448 26.9279C25.5788 26.8499 25.8546 26.9256 26.1721 27.1549C26.4894 27.3848 26.7872 27.6674 27.0656 28.0043C27.3436 28.3412 27.6779 28.7192 28.0685 29.1392C28.4588 29.5588 28.8005 29.8712 29.0935 30.0762L29.3865 30.2524C29.5817 30.3691 29.8352 30.4765 30.1479 30.5745C30.4602 30.6718 30.7338 30.6964 30.9679 30.6476L34.7166 30.5887C35.0875 30.5887 35.3756 30.528 35.5807 30.4057C35.7856 30.2844 35.9076 30.1493 35.9467 30.0032C35.9855 29.8567 35.9881 29.6915 35.9541 29.5055C35.9199 29.3202 35.8856 29.1909 35.8517 29.1178C35.8175 29.0448 35.7857 28.9833 35.7562 28.9348C35.268 28.0563 34.3358 26.9773 32.9593 25.6985L32.9299 25.6694L32.9154 25.6546L32.9009 25.6403H32.8862C32.2612 25.0447 31.866 24.6444 31.7001 24.4391C31.3976 24.0492 31.329 23.6537 31.4952 23.2535C31.6116 22.9499 32.0507 22.3104 32.8121 21.3339Z" fill="#808080"/>
            </svg>
          </a>
          <a href="http://">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="22.5" cy="22.5" r="22" stroke="#808080"/>
              <path d="M17.1453 25.7211L16.7545 31.3749C17.3136 31.3749 17.5558 31.1278 17.8461 30.8312L20.4676 28.2544L25.8995 32.3459C26.8957 32.9169 27.5976 32.6162 27.8663 31.4032L31.4318 14.2192L31.4328 14.2182C31.7488 12.7035 30.9003 12.1111 29.9296 12.4827L8.9718 20.7356C7.54146 21.3066 7.56312 22.1267 8.72865 22.4983L14.0867 24.2125L26.5325 16.2026C27.1182 15.8037 27.6508 16.0244 27.2127 16.4234L17.1453 25.7211Z" fill="#808080"/>
            </svg>
          </a>
          <a href="">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="22.5" cy="22.5" r="22" stroke="#808080"/>
              <path d="M32.5769 17.5374C32.5268 16.4011 32.3431 15.6199 32.0798 14.943C31.8083 14.2245 31.3905 13.5812 30.8432 13.0464C30.3084 12.5033 29.6609 12.0813 28.9507 11.814C28.2699 11.5508 27.4927 11.367 26.3565 11.3169C25.2117 11.2626 24.8483 11.25 21.9448 11.25C19.0413 11.25 18.6779 11.2626 17.5374 11.3127C16.4011 11.3628 15.6199 11.5467 14.9431 11.8097C14.2245 12.0813 13.5812 12.4991 13.0464 13.0464C12.5033 13.5812 12.0815 14.2287 11.814 14.9389C11.5508 15.6199 11.367 16.3968 11.3169 17.5331C11.2626 18.6779 11.25 19.0413 11.25 21.9448C11.25 24.8483 11.2626 25.2117 11.3127 26.3522C11.3628 27.4885 11.5467 28.2697 11.8099 28.9466C12.0815 29.6651 12.5033 30.3084 13.0464 30.8432C13.5812 31.3863 14.2287 31.8083 14.9389 32.0756C15.6199 32.3388 16.3968 32.5226 17.5333 32.5727C18.6737 32.6229 19.0372 32.6353 21.9407 32.6353C24.8442 32.6353 25.2076 32.6229 26.3481 32.5727C27.4844 32.5226 28.2656 32.3388 28.9424 32.0756C30.3796 31.5199 31.5159 30.3837 32.0715 28.9466C32.3346 28.2656 32.5185 27.4885 32.5686 26.3522C32.6187 25.2117 32.6313 24.8483 32.6313 21.9448C32.6313 19.0413 32.627 18.6779 32.5769 17.5374ZM30.6511 26.2687C30.6051 27.3131 30.4297 27.8771 30.2835 28.253C29.9241 29.1847 29.1847 29.9241 28.253 30.2835C27.8771 30.4297 27.309 30.6051 26.2687 30.651C25.1407 30.7012 24.8024 30.7136 21.949 30.7136C19.0957 30.7136 18.7531 30.7012 17.6292 30.651C16.5848 30.6051 16.0208 30.4297 15.6449 30.2835C15.1812 30.1121 14.7592 29.8406 14.4167 29.4855C14.0616 29.1387 13.79 28.7209 13.6187 28.2573C13.4725 27.8813 13.297 27.3131 13.2512 26.2729C13.2009 25.1449 13.1885 24.8065 13.1885 21.9531C13.1885 19.0997 13.2009 18.7572 13.2512 17.6335C13.297 16.5891 13.4725 16.0251 13.6187 15.6491C13.79 15.1853 14.0616 14.7635 14.4209 14.4208C14.7676 14.0657 15.1853 13.7941 15.6491 13.6229C16.0251 13.4767 16.5933 13.3013 17.6335 13.2553C18.7615 13.2052 19.0999 13.1926 21.9531 13.1926C24.8107 13.1926 25.149 13.2052 26.2729 13.2553C27.3173 13.3013 27.8813 13.4767 28.2573 13.6229C28.7209 13.7941 29.1429 14.0657 29.4855 14.4208C29.8406 14.7676 30.1121 15.1853 30.2835 15.6491C30.4297 16.0251 30.6051 16.5932 30.6511 17.6335C30.7012 18.7615 30.7138 19.0997 30.7138 21.9531C30.7138 24.8065 30.7012 25.1407 30.6511 26.2687Z" fill="#808080"/>
              <path d="M21.9467 16.4512C18.9139 16.4512 16.4531 18.9117 16.4531 21.9448C16.4531 24.9778 18.9139 27.4384 21.9467 27.4384C24.9798 27.4384 27.4404 24.9778 27.4404 21.9448C27.4404 18.9117 24.9798 16.4512 21.9467 16.4512ZM21.9467 25.5084C19.9792 25.5084 18.3832 23.9125 18.3832 21.9448C18.3832 19.977 19.9792 18.3812 21.9467 18.3812C23.9145 18.3812 25.5103 19.977 25.5103 21.9448C25.5103 23.9125 23.9145 25.5084 21.9467 25.5084Z" fill="#808080"/>
              <path d="M28.9382 16.2347C28.9382 16.9429 28.364 17.5172 27.6556 17.5172C26.9473 17.5172 26.373 16.9429 26.373 16.2347C26.373 15.5262 26.9473 14.9521 27.6556 14.9521C28.364 14.9521 28.9382 15.5262 28.9382 16.2347Z" fill="#808080"/>
            </svg>
          </a>
        </div>
      </div>
    </div>

  </div>
  

</footer>
    </div>

    <div class="popup" data-popup="popup-1" data-close-overlay>
    <div class="popup__wrapper" data-close-overlay>
        <div class="poup__content-close">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="45" height="45" rx="22.5" fill="#F1F1F1"/>
                <path d="M29 16L17 28M29 28L17 16" stroke="#181818" stroke-width="2" stroke-linecap="round"/>
            </svg> 
        </div>
        <div class="popup__content">
            
            <div class="popup__body">
                <h2 class="popup__body-title">Получите расчет <br>
                    <span class="orange__text">актуальных цен</span> на поставку</h2>
                <h3 class="popup__body-subtitle">Подготовим расчет в ближайшее время</h3>
                <form action="" class="popup__form">
                    <label for="" class="popup__form-label">
                        Введите номер телефона
                        <input type="text" class="popup__form-input" placeholder="+7 (900) 000-00-00">
                    </label>
                    <label for="" class="popup__form-explain">
                        <textarea class="popup__form-explain-input" placeholder="Опишите, что нужно и в каком объеме" name="" id=""></textarea>
                    </label>
                    <button class="btn popup__form-btn">
                        Получить расчет цены
                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.66667 1L15.5 7M15.5 7L9.66667 13M15.5 7L1.5 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg> 
                    </button>
                    <p class="popup__form-politic">
                        Нажимая на кнопку, вы даёте согласие на обработку персональных данных в соответствии <a href="#">с Политикой конфиденциальности</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="popup" data-popup="popup-2" data-close-overlay>
    <div class="popup__wrapper" data-close-overlay>
        <div class="poup__content-close">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="45" height="45" rx="22.5" fill="#F1F1F1"/>
                <path d="M29 16L17 28M29 28L17 16" stroke="#181818" stroke-width="2" stroke-linecap="round"/>
            </svg> 
        </div>
        <div class="popup__content">
            
            <div class="popup__body">
                <h2 class="popup__body-title">Получите прайс-лист</h2>
                <h3 class="popup__body-subtitle">Вышлем актуальные материалы на почту в течение рабочего дня</h3>
                <form action="" class="popup__form">
                    <label for="" class="popup__form-label">
                        Введите номер телефона
                        <input type="text" class="popup__form-input" placeholder="+7 (900) 000-00-00">
                    </label>
                    <label for="" class="popup__form-label">
                        Введите почту
                        <input type="text" class="popup__form-input" placeholder="pochta@ya.ru">
                    </label>
                    <button class="btn popup__form-btn">
                        Получить расчет цены
                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.66667 1L15.5 7M15.5 7L9.66667 13M15.5 7L1.5 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg> 
                    </button>
                    <p class="popup__form-politic">
                        Нажимая на кнопку, вы даёте согласие на обработку персональных данных в соответствии <a href="#">с Политикой конфиденциальности</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="popup" data-popup="popup-3" data-close-overlay>
    <div class="popup__wrapper" data-close-overlay>
        <div class="poup__content-close">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="45" height="45" rx="22.5" fill="#F1F1F1"/>
                <path d="M29 16L17 28M29 28L17 16" stroke="#181818" stroke-width="2" stroke-linecap="round"/>
            </svg> 
        </div>
        <div class="popup__content">
            
            <div class="popup__body">
                <h2 class="popup__body-title">Перезвоним
                    <span class="orange__text">в удобное время</span></h2>
                <h3 class="popup__body-subtitle">Заполните форму, мы перезвоним в рабочее время и ответим на все вопросы</h3>
                <form action="" class="popup__form">
                    <label for="" class="popup__form-label">
                        Введите номер телефона
                        <input type="text" class="popup__form-input" placeholder="+7 (900) 000-00-00">
                    </label>

                    <button class="btn popup__form-btn">
                        Перезвоните мне
                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.66667 1L15.5 7M15.5 7L9.66667 13M15.5 7L1.5 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg> 
                    </button>
                    <p class="popup__form-politic">
                        Нажимая на кнопку, вы даёте согласие на обработку персональных данных в соответствии <a href="#">с Политикой конфиденциальности</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="popup popup__container" id="popup__search" data-popup="popup-search" data-close-overlay>
    <div class="popup__wrapper" data-close-overlay>
        <div class="popup__content popup__content-search">
          <div class="popup__body">
                <div class="header__search-get">
                    <div class="header__search-item">
                      <a href="">Арматура А500с 6 мм сталь 3 ТУ 14-1-5254-94</a>
                    </div>
                    <div class="header__search-item">
                      <a href="">Арматура А500с 6 мм сталь 3 ТУ 14-1-5254-94</a>
                    </div>
                    <div class="header__search-item">
                      <a href="">Арматура А500с 6 мм сталь 3 ТУ 14-1-5254-94</a>
                    </div>
                    <div class="header__search-item">
                      <a href="">Арматура А500с 6 мм сталь 3 ТУ 14-1-5254-94</a>
                    </div>
                    
                  </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" data-popup="popup-4" data-close-overlay>
    <div class="popup__wrapper" data-close-overlay>
        <div class="poup__content-close">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="45" height="45" rx="22.5" fill="#F1F1F1"/>
                <path d="M29 16L17 28M29 28L17 16" stroke="#181818" stroke-width="2" stroke-linecap="round"/>
            </svg> 
        </div>
        <div class="popup__content cart__content">
            
            <div class="popup__cart">
                <h2 class="popup__cart-title">Вы добавили в заявку:</h2>
                <div class="popup__cart-wrapper">
                     

                </div>
                <div class="popup__cart-phone">
                    <p>Если у вас есть срочный вопрос, <br> позвоните по телефону:</p>
                    <a href="tel:+7 (495) 255-32-12">+7 (495) 255-32-12</a>
                </div>
            </div>

            <div class="cart__form">
                <div class="cart__form-wrapper">
                    <h2 class="cart__form-title">Заполните форму, чтобы мы могли
                        <span class="orange__text">получить заявку</span></h2>
                    <h3 class="cart__form-subtitle">Вышлем вам несколько вариантов КП в течение 42 минут</h3>
                    <form action="" class="popup__form">
                        <label for="" class="popup__form-label">
                            <input type="text" class="popup__form-input cart__form-input" placeholder="Укажите ИНН организации">
                        </label>
                        <label for="" class="popup__form-label">
                            <input type="text" class="popup__form-input cart__form-input" placeholder="Укажите телефон для связи">
                        </label>
                        <button class="btn popup__form-btn cart__form-btn">
                            Отправить заявку
                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.66667 1L15.5 7M15.5 7L9.66667 13M15.5 7L1.5 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </button>
                        <p class="popup__form-politic cart__form-politic">
                            Нажимая на кнопку, вы даёте согласие на обработку персональных данных в соответствии <a href="#">с Политикой конфиденциальности</a>
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="popup filter__mobile-popup" data-popup="popup-5" data-close-overlay>
    <div class="popup__wrapper filter__popup-wrapper" data-close-overlay>
        <div class="filter__popup-content filter__popup__container">
            <div class="filter__top">
                <p class="filter__top-text">
                    Фильтры
                </p>
                <button class="filter__top-close" data-close-overlay>
                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="45" height="45" rx="22.5" fill="#F1F1F1"/>
                        <path d="M29 16L17 28M29 28L17 16" stroke="#181818" stroke-width="2" stroke-linecap="round"/>
                    </svg> 
                </button>
            </div>
            <div class="filter__filter-mobile" class="popup" data-popup="popup-5" data-close-overlay>
                <div class="accordion filter__accordion filter__popup-accordion">
                    <div class="accordion__item filter__item">
                      <div class="accordion__header filter__header">Производитель</div>
                      <div class="accordion__content filter__content">
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
            
                <div class="accordion filter__accordion filter__popup-accordion">
                    <div class="accordion__item filter__item">
                      <div class="accordion__header filter__header">Тип изделия</div>
                      <div class="accordion__content filter__content">
                        <button class="filter__button">Арматура рифленая (А3)</button>
                        <button class="filter__button">Арматура гладкая (А1)</button>
                        <button class="filter__button">Круг стальной</button>
                      </div>
                    </div>
                </div>
            
            
                <div class="accordion filter__accordion filter__popup-accordion">
                    <div class="accordion__item filter__item">
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
            
                <div class="accordion filter__accordion filter__popup-accordion">
                    <div class="accordion__item filter__item">
                      <div class="accordion__header filter__header">Размер</div>
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
            <button class="btn filter__popup-btn">
                Показать
                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.66667 1.5L15.5 7.5M15.5 7.5L9.66667 13.5M15.5 7.5L1.5 7.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> 
            </button>
        </div>
    </div>
</div>

    
<?php get_footer(); ?>