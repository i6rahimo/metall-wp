<?php get_header(); ?>


<main class="page">
    <div class="breadcrumbs">
        <div class="breadcrumbs__container">
            <ul class="breadcrumbs__ul">
                <li class="breadcrumbs__li">
                    <a class="breadcrumbs__link" href="index.html">Главная</a>
                </li>
                <li class="breadcrumbs__li">
                    <a class="active breadcrumbs__link" href="index.html">О компании</a>
                </li>
            </ul>
        </div>
    </div>

    <section class="about__hero about__hero__container">
        <h1 class="about__hero-title">ПОСТАВЛЯЕМ МЕТАЛЛОПРОКАТ <br>
            <span>ПО ВСЕЙ СТРАНЕ ИЗ НАЛИЧИЯ И НА ЗАКАЗ</span> ОТ ВЕДУЩИХ ПРОИЗВОДИТЕЛЕЙ
        </h1>
        <h2 class="about__hero-subtitle">«Невский металл» — эксперты в металлопрокате и комплектации строительных
            объектов с 2010 года</h2>
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

    <section class="about__main about__main__container">
        <div class="about__main-left">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/about-main-mb1.png" media="(max-width: 920px)">
                <img src="<?php echo get_template_directory_uri() ?>/images/about-main1.png" alt="">
            </picture>
            <div class="about__main-text">
                <h3 class="about__main-title">Учитываем ваши задачи. Можем поставить оборудование и материалы из наличия
                    или под заказ</h3>
                <p class="about__main-subtitle">Работаем с 28 компаниями производителями и подбираем идеально
                    соотношение цена-качество-наличие</p>
            </div>
        </div>
        <div class="about__main-right">
            <div class="about__main-right__content">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri() ?>/images/about-main-mb2.png" media="(max-width: 920px)">
                    <img src="<?php echo get_template_directory_uri() ?>/images/about-main2.png" alt="">
                </picture>
                <div class="about__main-text">
                    <h3 class="about__main-title">Обеспечиваем удобную логистику и используем электронный
                        документооборот</h3>
                    <p class="about__main-subtitle">Снимаем с вас головную боль по доставке. Самостоятельно организуем
                        доставку в пределах Москвы и МО.</p>
                    <p class="about__main-subtitle">Бесплатно доставим груз до терминала ТК</p>
                </div>
            </div>
            <div class="about__main-right__content">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri() ?>/images/about-main-mb3.png" media="(max-width: 920px)">
                    <img src="<?php echo get_template_directory_uri() ?>/images/about-main3.png" alt="">
                </picture>
                <div class="about__main-text">
                    <h3 class="about__main-title">Проведем техническую консультацию и поможем подобрать, то что нужно
                    </h3>
                    <p class="about__main-subtitle">Проведем экспертную консультацию, изучим ваше ТЗ и подберем те
                        позиции, которые помогут решить вашу задачу</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about__advantage about__advantage__container">
        <h2 class="about__advantage-title">Преимущества работы <span>с нашей компанией</span></h2>
        <div class="about__advantage-items">
            <div class="about__advantage-item">
                <img src="<?php echo get_template_directory_uri() ?>/images/about-advantage1.svg" alt="" class="about__advantage-img">
                <p class="about__advantage-title">Ставка на сервис</p>
                <span class="about__advantage-subtitle">В нашей компании регулярно проводятся тренинги
                    и обучения по продукции и клиенто-ориентированности
                </span>
            </div>
            <div class="about__advantage-item">
                <img src="<?php echo get_template_directory_uri() ?>/images/about-advantage2.svg" alt="" class="about__advantage-img">
                <p class="about__advantage-title">Экономия до 50%
                    от стоимости доставки</p>
                <span class="about__advantage-subtitle">Благодаря рациональной логистике и комплектации заказа
                </span>
            </div>

            <div class="about__advantage-item">
                <img src="<?php echo get_template_directory_uri() ?>/images/about-advantage3.svg" alt="" class="about__advantage-img">
                <p class="about__advantage-title">Онлайн доступ
                    к актуальным остаткам</p>
                <span class="about__advantage-subtitle">Найдем самые редкие позиции, укомплектуем заказ с любой
                    металлобазы России
                </span>
            </div>

            <div class="about__advantage-item">
                <img src="<?php echo get_template_directory_uri() ?>/images/about-advantage4.svg" alt="" class="about__advantage-img">
                <p class="about__advantage-title">Гарантия отгрузки</p>
                <span class="about__advantage-subtitle">Предоставляем фотоотчет отгрузки и контакты рекомендаторов,
                    отвечаем на встречные проверки налоговых органов
                </span>
            </div>
        </div>
    </section>


    <section class="about__reviews about__reviews__container">
        <div class="about__reviews-header">
            <div class="about__reviews-text-wrapper">
                <h2 class="about__reviews-title">Отзывы, рекомендации, проекты</h2>
                <p class="about__reviews-subtitle">За 10 лет выполнили больше 1000 отгрузок для проектов по всей России
                </p>
            </div>
            <div class="about__reviews-btns">
                <button class="swiper-button-prev about__reviews-btn-prev-mb"></button>
                <button class="swiper-button-next about__reviews-btn-next-mb"></button>
            </div>
        </div>
        <div class="about__reviews-bg">
            <div class="about__reviews-slider slider">
                <div class="about__reviews-wrapper slider__wrapper">
                    <div class="about__reviews-slide slider__slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/r.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/r.png" alt="">
                        </picture>
                        <p class="about__reviews-slide-text">Отзыв от генерального директора НПО «Машинострой»</p>
                        <p class="about__reviews-slide-name">Иванова И.О</p>
                    </div>

                    <div class="about__reviews-slide slider__slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/r.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/r.png" alt="">
                        </picture>
                        <p class="about__reviews-slide-text">Отзыв от генерального директора НПО «Машинострой»</p>
                        <p class="about__reviews-slide-name">Иванова И.О</p>
                    </div>

                    <div class="about__reviews-slide slider__slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/r.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/r.png" alt="">
                        </picture>
                        <p class="about__reviews-slide-text">Отзыв от генерального директора НПО «Машинострой»</p>
                        <p class="about__reviews-slide-name">Иванова И.О</p>
                    </div>

                    <div class="about__reviews-slide slider__slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/r.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/r.png" alt="">
                        </picture>
                        <p class="about__reviews-slide-text">Отзыв от генерального директора НПО «Машинострой»</p>
                        <p class="about__reviews-slide-name">Иванова И.О</p>
                    </div>

                    <div class="about__reviews-slide slider__slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/r.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/r.png" alt="">
                        </picture>
                        <p class="about__reviews-slide-text">Отзыв от генерального директора НПО «Машинострой»</p>
                        <p class="about__reviews-slide-name">Иванова И.О</p>
                    </div>

                    <div class="about__reviews-slide slider__slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/r.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/r.png" alt="">
                        </picture>
                        <p class="about__reviews-slide-text">Отзыв от генерального директора НПО «Машинострой»</p>
                        <p class="about__reviews-slide-name">Иванова И.О</p>
                    </div>

                    <div class="about__reviews-slide slider__slide">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri() ?>/images/r.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/r.png" alt="">
                        </picture>
                        <p class="about__reviews-slide-text">Отзыв от генерального директора НПО «Машинострой»</p>
                        <p class="about__reviews-slide-name">Иванова И.О</p>
                    </div>
                </div>
                <div class="about__reviews-btns-mb">
                    <button class="swiper-button-prev about__reviews-btn-prev"></button>
                    <button class="swiper-button-next about__reviews-btn-next"></button>
                </div>
            </div>
        </div>
    </section>


    <section class="about__gallery__container about__galleryslider">
        <div class="about__gallery-main">
            <div class="about__gallery-main-wrapper">
                <div class="about__gallery-main-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/ag1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/ag1.png" alt="">
                    </picture>
                </div>
                <div class="about__gallery-main-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/ag1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/ag1.png" alt="">
                    </picture>
                </div>
                <div class="about__gallery-main-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/ag1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/ag1.png" alt="">
                    </picture>
                </div>
                <div class="about__gallery-main-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/ag1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/ag1.png" alt="">
                    </picture>
                </div>
                <div class="about__gallery-main-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/ag1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/ag1.png" alt="">
                    </picture>
                </div>
            </div>
            <div class="about__gallery-pagination photo-slider-pagination"></div>
            <div class="about__gallery-btns">
                <button class="swiper-button-prev about__gallery-btn-prev"></button>
                <button class="swiper-button-next about__gallery-btn-next"></button>
            </div>
        </div>
        <div class="about__gallery-submain">
            <div class="about__gallery-main-wrapper">
                <div class="about__gallery-main-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/ag2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/ag2.png" alt="">
                    </picture>
                </div>
                <div class="about__gallery-main-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/ag3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/ag3.png" alt="">
                    </picture>
                </div>
                <div class="about__gallery-main-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/ag4.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/ag4.png" alt="">
                    </picture>
                </div>
                <div class="about__gallery-main-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/ag5.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/ag5.png" alt="">
                    </picture>
                </div>
                <div class="about__gallery-main-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/ag3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/ag3.png" alt="">
                    </picture>
                </div>
                <div class="about__gallery-main-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/ag2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/ag2.png" alt="">
                    </picture>
                </div>
                <div class="about__gallery-main-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/ag3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/ag3.png" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="about__staff about__staff__container">
        <h2 class="about__staff-title">
            С вами работают
        </h2>
        <div class="about__staff-slider">
            <div class="about__staff-wrapper">
                <div class="about__staff-slide staff__slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/as.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/as.png" alt="">
                    </picture>
                    <div class="staff__slide-content">
                        <p class="staff__slide-name">Агафонов Евгений Михайлович</p>
                        <span class="staff__slide-position">Директор</span>
                        <a class="staff__slide-tel" href="tel:+7 (912) 123-45-67">+7 (912) 123-45-67</a>
                        <a class="staff__slide-mail" href="mailto:mail@yandex.ru">mail@yandex.ru</a>
                    </div>
                </div>
                <div class="about__staff-slide staff__slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/as.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/as.png" alt="">
                    </picture>
                    <div class="staff__slide-content">
                        <p class="staff__slide-name">Агафонов Евгений Михайлович</p>
                        <span class="staff__slide-position">Директор</span>
                        <a class="staff__slide-tel" href="tel:+7 (912) 123-45-67">+7 (912) 123-45-67</a>
                        <a class="staff__slide-mail" href="mailto:mail@yandex.ru">mail@yandex.ru</a>
                    </div>
                </div>
                <div class="about__staff-slide staff__slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/as.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/as.png" alt="">
                    </picture>
                    <div class="staff__slide-content">
                        <p class="staff__slide-name">Агафонов Евгений Михайлович</p>
                        <span class="staff__slide-position">Директор</span>
                        <a class="staff__slide-tel" href="tel:+7 (912) 123-45-67">+7 (912) 123-45-67</a>
                        <a class="staff__slide-mail" href="mailto:mail@yandex.ru">mail@yandex.ru</a>
                    </div>
                </div>
                <div class="about__staff-slide staff__slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/as.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/as.png" alt="">
                    </picture>
                    <div class="staff__slide-content">
                        <p class="staff__slide-name">Агафонов Евгений Михайлович</p>
                        <span class="staff__slide-position">Директор</span>
                        <a class="staff__slide-tel" href="tel:+7 (912) 123-45-67">+7 (912) 123-45-67</a>
                        <a class="staff__slide-mail" href="mailto:mail@yandex.ru">mail@yandex.ru</a>
                    </div>
                </div>

                <div class="about__staff-slide staff__slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/as.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/as.png" alt="">
                    </picture>
                    <div class="staff__slide-content">
                        <p class="staff__slide-name">Агафонов Евгений Михайлович</p>
                        <span class="staff__slide-position">Директор</span>
                        <a class="staff__slide-tel" href="tel:+7 (912) 123-45-67">+7 (912) 123-45-67</a>
                        <a class="staff__slide-mail" href="mailto:mail@yandex.ru">mail@yandex.ru</a>
                    </div>
                </div>

                <div class="about__staff-slide staff__slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/as.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/as.png" alt="">
                    </picture>
                    <div class="staff__slide-content">
                        <p class="staff__slide-name">Агафонов Евгений Михайлович</p>
                        <span class="staff__slide-position">Директор</span>
                        <a class="staff__slide-tel" href="tel:+7 (912) 123-45-67">+7 (912) 123-45-67</a>
                        <a class="staff__slide-mail" href="mailto:mail@yandex.ru">mail@yandex.ru</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about__news about__news__container">
        <h2 class="about__news-title section__title">Новости компании</h2>
        <p class="about__news-subtitle">Публикуем актуальные события, мероприятия и дополнительную информацию</p>
        <div class="about__news-items about__news-slider">
            <div class="about__news-wrapper">
                <div class="about__news-item about__news-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/n1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/n1.png" alt=""
                            class="about__news-img">
                    </picture>
                    <span class="about__news-date">29.09.2023</span>
                    <p class="about__news-text">Новость о компании
                        в 1 строку или 2 строки</p>
                </div>

                <div class="about__news-item about__news-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/n2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/n2.png" alt=""
                            class="about__news-img">
                    </picture>
                    <span class="about__news-date">29.09.2023</span>
                    <p class="about__news-text">Новость о компании
                        в 1 строку или 2 строки</p>
                </div>

                <div class="about__news-item about__news-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/n3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/n3.png" alt=""
                            class="about__news-img">
                    </picture>
                    <span class="about__news-date">29.09.2023</span>
                    <p class="about__news-text">Новость о компании
                        в 1 строку или 2 строки</p>
                </div>
                <div class="about__news-item about__news-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/n1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/n1.png" alt=""
                            class="about__news-img">
                    </picture>
                    <span class="about__news-date">29.09.2023</span>
                    <p class="about__news-text">Новость о компании
                        в 1 строку или 2 строки</p>
                </div>

                <div class="about__news-item about__news-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/n2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/n2.png" alt=""
                            class="about__news-img">
                    </picture>
                    <span class="about__news-date">29.09.2023</span>
                    <p class="about__news-text">Новость о компании
                        в 1 строку или 2 строки</p>
                </div>

                <div class="about__news-item about__news-slide">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri() ?>/images/n3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri() ?>/images/n3.png" alt=""
                            class="about__news-img">
                    </picture>
                    <span class="about__news-date">29.09.2023</span>
                    <p class="about__news-text">Новость о компании
                        в 1 строку или 2 строки</p>
                </div>
            </div>
        </div>
    </section>


    <section class="about__contact">
        <div class="contact__container">
            <div class="contact__wrapper">
                <div class="contact__about">
                    <div class="contact__about-text">
                        <p>Контакты компании</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri() ?>/images/footer-logo.svg" alt="">
                </div>

                <div class="contact__cols">
                    <div class="contact__col">
                        <h3 class="contact__col-title">ОФИС</h3>
                        <div class="contact__col-inner">
                            <a class="contact__col-tel" href="tel:++7 (812) 123-45-67">+7 (812) 123-45-67</a>
                            <a class="contact__col-gmail" href="mailto:">info@sait.ru</a>
                        </div>

                        <div class="contact__col-inner">
                            <p class="contact__col-text"><span>Адрес: </span>29345, Санкт-Петербург, ул. Летчика
                                Бабушкина, д.39, офис А6И</p>
                        </div>

                        <div class="contact__col-inner">
                            <p class="contact__col-text"><span>Время работы: <br></span>пн-пт с 8-00 до 18-00</p>
                        </div>
                    </div>

                    <div class="contact__col">
                        <h3 class="contact__col-title">СКЛАД</h3>
                        <div class="contact__col-inner">
                            <a class="contact__col-tel" href="tel:++7 (812) 123-45-67">+7 (812) 123-45-67</a>
                            <p class="contact__col-text">Зав. складом Игорь Михайлов</p>
                        </div>

                        <div class="contact__col-inner">
                            <p class="contact__col-text"><span>Адрес: </span>М.О. Дмитровский р-он, п.Некрасовский,
                                ул.Заводская д.1</p>
                        </div>

                        <div class="contact__col-inner">
                            <p class="contact__col-text"><span>Время работы: <br></span>пн-пт с 8-00 до 18-00</p>
                        </div>
                    </div>


                    <div class="contact__col requisites__col">
                        <h3 class="contact__col-title">РЕКВИЗИТЫ ООО «КОМПАНИЯ»</h3>
                        <div class="contact__col-inner">
                            <p class="contact__col-text">ОГРН 123456778990</p>
                            <p class="contact__col-text">ИНН 12345677899</p>
                            <p class="contact__col-text">КПП 1233445566778</p>
                            <p class="contact__col-text">ОКПО 12344556788</p>
                        </div>

                        <div class="contact__col-inner">
                            <p class="contact__col-text"><span>Расчетный счет: </span>123344556778889900076</p>
                            <p class="contact__col-text"><span>АО </span>«АЛЬФА-БАНК»</p>
                            <p class="contact__col-text"><span>К/счет: </span>30101810200000000593</p>
                            <p class="contact__col-text"><span>БИК: </span>044525593</p>
                        </div>


                    </div>
                </div>
                <div class="about__contact-page contact__map contact__map-wrapper">
                    <div class="contact__map-contact map__contact">
                        <div class="map__contact-main">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri() ?>/images/leader.webp" type="image/webp"><img class="map__contact-img"
                                    src="<?php echo get_template_directory_uri() ?>/images/leader.png" alt="">
                            </picture>
                            <div class="map__contact-names">
                                <p class="map__contact-name">Ермолаев Константин Николаевич</p>
                                <span class="map__contact-position">Руководитель</span>
                            </div>
                        </div>
                        <p class="map__contact-text">Если у вас есть пожелания или претензия по качеству — напишите
                            руководителю:</p>
                        <button class="btn map__contact-btn">
                            Написать на почту руководителю
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 1L14 7M14 7L9 13M14 7H1" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>


                    <div id="map-test-about" class="map"></div>



                </div>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>