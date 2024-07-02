<!doctype html>
<html lang="ru">

<head>
  <style>
    .loaded {
      opacity: 1
    }
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css?_v=20240320102149">
  <title><?php esc_url(wp_title("", true)); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="header__container">
        <div class="header__main">
          <div class="header__logo-wrapper">
            <a href="../index.html" class="header__logo logo"><img
                src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt="Лого"></a>
            <a href="../index.html" class="header__logo logo header__logo-mb"><img
                src="<?php echo get_template_directory_uri() ?>/images/footer-logo.svg" alt="Лого"></a>
            <div class="header__main-about header__main-about__dt">
              <p>Адрес: Санкт-Петербург,</p>
              <p>ул. Заозерная, дом 8, корпус 1, офис 27</p>
              <p>Время работы: <span>пн-пт 09:00-18:00</span></p>
            </div>
            <div class="header__main-about header__main-about__mb">
              <p>Невский <br> металл</p>
            </div>
          </div>
          <button class="header__main-download" data-type="popup-2">
            Скачать прайс лист
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1 11.1703L1 14.2438C1 14.7095 1.19754 15.1562 1.54917 15.4856C1.90081 15.815 2.37772 16 2.875 16H14.125C14.6223 16 15.0992 15.815 15.4508 15.4856C15.8025 15.1562 16 14.7095 16 14.2438V11.1703M8.50105 1V10.9521M8.50105 10.9521L12.7868 7.14941M8.50105 10.9521L4.21533 7.14941"
                stroke="#FB7A32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
          <form method="post" action="<?php esc_url(home_url('/')); ?>" class="header__main-search">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M14.4855 14.6L18 18M16.8667 8.93333C16.8667 13.3148 13.3148 16.8667 8.93333 16.8667C4.55187 16.8667 1 13.3148 1 8.93333C1 4.55187 4.55187 1 8.93333 1C13.3148 1 16.8667 4.55187 16.8667 8.93333Z"
                stroke="#9D9D9C" stroke-width="2" stroke-linecap="round" />
            </svg>
            <input value="<?php get_search_query(); ?>" type="" name="s" placeholder="Искать в каталоге"
              data-type="popup-search">
            <div class="search-result"></div>
          </form>
          <a href="tel:+79669372311" class="header__main-tel">+7 966 937-23-11</a>
          <div class="header__cart-wrapper" data-type="popup-4">
            <div class="header__main-cart" data-type="popup-4">
              <span class="cart-quantity" data-type="popup-4">7</span>
            </div>
            <button class="header__burger icon-menu">
              <span></span>
            </button>
          </div>
        </div>



        <?php

        if( is_front_page() ) {
          wp_nav_menu(
            array(
              'menu' => 'Шапка',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
              // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
              'container' => 'nav',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
              'container_class' => 'header__menu menu',              // (string) class контейнера (div тега)
              'container_id' => '',              // (string) id контейнера (div тега)
              'menu_class' => 'menu__list menu__list-front',          // (string) class самого меню (ul тега)
              // (string) id самого меню (ul тега)
              'echo' => true,            // (boolean) Выводить на экран или возвращать для обработки
              'fallback_cb' => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
              'before' => '',              // (string) Текст перед <a> каждой ссылки
              'after' => '',              // (string) Текст после </a> каждой ссылки
              'link_before' => '',              // (string) Текст перед анкором (текстом) ссылки
              'link_after' => '',              // (string) Текст после анкора (текста) ссылки
              'depth' => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
              'walker' => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
              'theme_location' => 'top'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
            ));
          } else {
            wp_nav_menu(
              array(
                'menu' => 'Шапка',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
                // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                'container' => 'nav',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                'container_class' => 'header__menu menu',              // (string) class контейнера (div тега)
                'container_id' => '',              // (string) id контейнера (div тега)
                'menu_class' => 'menu__list',          // (string) class самого меню (ul тега)
                // (string) id самого меню (ul тега)
                'echo' => true,            // (boolean) Выводить на экран или возвращать для обработки
                'fallback_cb' => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
                'before' => '',              // (string) Текст перед <a> каждой ссылки
                'after' => '',              // (string) Текст после </a> каждой ссылки
                'link_before' => '',              // (string) Текст перед анкором (текстом) ссылки
                'link_after' => '',              // (string) Текст после анкора (текста) ссылки
                'depth' => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                'walker' => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
                'theme_location' => 'top'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
              ));
          }
          ?>

      </div>


    </header>
    <div class="header__mb">
      <div class="header__mb-wrapper header__mb__container">
        <div class="header__mb-phones">
          <p>Телефон</p>
          <a href="tel:+7 966 937-23-11">+7 966 937-23-11</a> <br>
          <a href="tel:+7 993 492-36-93">+7 993 492-36-93</a>
          <p>Закажите обратный звонок <br> <span class="orange__text">Перезвоним за 5 минут</span></p>
        </div>
        <div class="header__mb-list__wrapper">
          <div class="header__mb-nav">
            <p>Станки</p>
            <ul class="header__mb-list">
              <li class="header__mb-item">
                <a class="header__mb-link" href="../product.html">Трубы нержавеющие</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../product.html">Сортовой прокат</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../product.html">Лента и рулоны</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../product.html">Листовой прокат</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../product.html">Трубы электросварные</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../product.html">Профлист</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../product.html">Сетка сварная</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../product.html">Композитная арматура</a>
              </li>
            </ul>
          </div>
          <div class="header__mb-nav">
            <p>Покупателям</p>
            <ul class="header__mb-list">
              <li class="header__mb-item">
                <a class="header__mb-link" href="../contact.html">Контакты</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../shipment-page.html">Отгрузки</a>
              </li>
              <li class="header__mb-item">
                <a class="header__mb-link" href="../about-page.html">О компании</a>
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
              <circle cx="22.5" cy="22.5" r="22" stroke="#808080" />
              <path
                d="M32.8121 21.3339C33.212 20.8169 33.5296 20.402 33.764 20.089C35.4529 17.8437 36.1849 16.4094 35.9605 15.7841L35.8725 15.6376C35.814 15.5497 35.6624 15.4689 35.4186 15.3958C35.1744 15.3227 34.8621 15.311 34.4815 15.3593L30.2643 15.389C30.1666 15.3793 30.069 15.3816 29.9713 15.3958C29.8737 15.4106 29.8103 15.4255 29.7809 15.4397C29.7514 15.4546 29.7272 15.4666 29.7078 15.4763L29.6493 15.5202C29.6005 15.5494 29.5469 15.6008 29.4883 15.6742C29.4297 15.7476 29.3806 15.8326 29.3418 15.9306C28.883 17.1117 28.3608 18.2101 27.775 19.2254C27.4137 19.8307 27.0817 20.3558 26.7794 20.7994C26.4767 21.244 26.2229 21.571 26.0179 21.7804C25.8129 21.9903 25.6273 22.159 25.4615 22.2855C25.2953 22.4129 25.1685 22.4663 25.0809 22.4469C24.9929 22.4275 24.9099 22.4081 24.8319 22.388C24.6952 22.3004 24.5852 22.1811 24.5025 22.0294C24.4194 21.8785 24.3635 21.688 24.334 21.4584C24.3049 21.2292 24.2874 21.0313 24.2829 20.8651C24.2777 20.6993 24.2803 20.4652 24.2903 20.1622C24.3001 19.8595 24.3049 19.6549 24.3049 19.5472C24.3049 19.1766 24.3123 18.7738 24.327 18.3392C24.3415 17.905 24.3538 17.5606 24.3635 17.3067C24.3732 17.0532 24.378 16.7845 24.378 16.5013C24.378 16.2187 24.3609 15.9962 24.3265 15.8349C24.2922 15.6742 24.2408 15.518 24.1729 15.3664C24.1044 15.2154 24.0045 15.098 23.8725 15.0153C23.7407 14.9322 23.5773 14.8665 23.3821 14.8174C22.8644 14.7 22.2054 14.6372 21.4052 14.6269C19.5893 14.6082 18.4227 14.7252 17.9054 14.9787C17.7004 15.0864 17.5148 15.2325 17.3489 15.4181C17.173 15.6331 17.1488 15.7505 17.2759 15.7692C17.8617 15.8572 18.2763 16.0674 18.5204 16.3991L18.6084 16.5747C18.6766 16.7021 18.7448 16.9265 18.8133 17.2485C18.8816 17.5706 18.9256 17.9269 18.9453 18.3175C18.9941 19.0301 18.9941 19.64 18.9453 20.1479C18.8965 20.6559 18.8502 21.051 18.8063 21.3336C18.7623 21.6169 18.6963 21.8461 18.6087 22.0217C18.5207 22.1979 18.4622 22.3052 18.4328 22.3443C18.4034 22.3831 18.3791 22.4077 18.3597 22.4174C18.2327 22.4659 18.1011 22.4905 17.9643 22.4905C17.8275 22.4905 17.6616 22.4219 17.4664 22.2851C17.271 22.1491 17.0683 21.9609 16.8588 21.7216C16.6486 21.4827 16.4122 21.148 16.1484 20.7183C15.8849 20.2892 15.6113 19.7812 15.3284 19.1957L15.0943 18.7708C14.9478 18.4979 14.7476 18.0999 14.4938 17.5777C14.24 17.0555 14.0153 16.5504 13.8203 16.0619C13.7421 15.8572 13.625 15.701 13.4689 15.5934L13.3958 15.5494C13.347 15.5106 13.2687 15.4689 13.1614 15.4252C13.0537 15.3812 12.9418 15.3495 12.8245 15.3298L8.81215 15.3589C8.40217 15.3589 8.12411 15.4521 7.97765 15.6376L7.91912 15.7253C7.88953 15.7744 7.875 15.8527 7.875 15.9597C7.875 16.0674 7.90443 16.199 7.96297 16.3548C8.54883 17.7316 9.18584 19.0593 9.87389 20.3377C10.5623 21.6169 11.1602 22.647 11.6678 23.4279C12.1754 24.2094 12.6927 24.9459 13.2201 25.6392C13.7475 26.3324 14.0964 26.7763 14.2671 26.9713C14.4378 27.1669 14.572 27.3134 14.6696 27.4107L15.0357 27.7625C15.2698 27.9966 15.6141 28.2772 16.0681 28.6045C16.5221 28.9317 17.0246 29.2537 17.5765 29.5706C18.1278 29.8881 18.77 30.1464 19.502 30.3469C20.234 30.5474 20.9466 30.6279 21.6399 30.5884H23.3239C23.6656 30.5593 23.9242 30.4523 24.0999 30.2664L24.1584 30.1933C24.1971 30.1351 24.234 30.0446 24.2683 29.9226C24.3022 29.8008 24.3198 29.6662 24.3198 29.5201C24.3097 29.1005 24.3417 28.7215 24.4148 28.3852C24.4879 28.0483 24.5709 27.7948 24.6638 27.6235C24.7566 27.453 24.8613 27.3088 24.9786 27.1914C25.0958 27.074 25.1785 27.0039 25.2277 26.9793C25.2765 26.9554 25.3157 26.9383 25.3448 26.9279C25.5788 26.8499 25.8546 26.9256 26.1721 27.1549C26.4894 27.3848 26.7872 27.6674 27.0656 28.0043C27.3436 28.3412 27.6779 28.7192 28.0685 29.1392C28.4588 29.5588 28.8005 29.8712 29.0935 30.0762L29.3865 30.2524C29.5817 30.3691 29.8352 30.4765 30.1479 30.5745C30.4602 30.6718 30.7338 30.6964 30.9679 30.6476L34.7166 30.5887C35.0875 30.5887 35.3756 30.528 35.5807 30.4057C35.7856 30.2844 35.9076 30.1493 35.9467 30.0032C35.9855 29.8567 35.9881 29.6915 35.9541 29.5055C35.9199 29.3202 35.8856 29.1909 35.8517 29.1178C35.8175 29.0448 35.7857 28.9833 35.7562 28.9348C35.268 28.0563 34.3358 26.9773 32.9593 25.6985L32.9299 25.6694L32.9154 25.6546L32.9009 25.6403H32.8862C32.2612 25.0447 31.866 24.6444 31.7001 24.4391C31.3976 24.0492 31.329 23.6537 31.4952 23.2535C31.6116 22.9499 32.0507 22.3104 32.8121 21.3339Z"
                fill="#808080" />
            </svg>
          </a>
          <a href="http://">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="22.5" cy="22.5" r="22" stroke="#808080" />
              <path
                d="M17.1453 25.7211L16.7545 31.3749C17.3136 31.3749 17.5558 31.1278 17.8461 30.8312L20.4676 28.2544L25.8995 32.3459C26.8957 32.9169 27.5976 32.6162 27.8663 31.4032L31.4318 14.2192L31.4328 14.2182C31.7488 12.7035 30.9003 12.1111 29.9296 12.4827L8.9718 20.7356C7.54146 21.3066 7.56312 22.1267 8.72865 22.4983L14.0867 24.2125L26.5325 16.2026C27.1182 15.8037 27.6508 16.0244 27.2127 16.4234L17.1453 25.7211Z"
                fill="#808080" />
            </svg>
          </a>
          <a href="">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="22.5" cy="22.5" r="22" stroke="#808080" />
              <path
                d="M32.5769 17.5374C32.5268 16.4011 32.3431 15.6199 32.0798 14.943C31.8083 14.2245 31.3905 13.5812 30.8432 13.0464C30.3084 12.5033 29.6609 12.0813 28.9507 11.814C28.2699 11.5508 27.4927 11.367 26.3565 11.3169C25.2117 11.2626 24.8483 11.25 21.9448 11.25C19.0413 11.25 18.6779 11.2626 17.5374 11.3127C16.4011 11.3628 15.6199 11.5467 14.9431 11.8097C14.2245 12.0813 13.5812 12.4991 13.0464 13.0464C12.5033 13.5812 12.0815 14.2287 11.814 14.9389C11.5508 15.6199 11.367 16.3968 11.3169 17.5331C11.2626 18.6779 11.25 19.0413 11.25 21.9448C11.25 24.8483 11.2626 25.2117 11.3127 26.3522C11.3628 27.4885 11.5467 28.2697 11.8099 28.9466C12.0815 29.6651 12.5033 30.3084 13.0464 30.8432C13.5812 31.3863 14.2287 31.8083 14.9389 32.0756C15.6199 32.3388 16.3968 32.5226 17.5333 32.5727C18.6737 32.6229 19.0372 32.6353 21.9407 32.6353C24.8442 32.6353 25.2076 32.6229 26.3481 32.5727C27.4844 32.5226 28.2656 32.3388 28.9424 32.0756C30.3796 31.5199 31.5159 30.3837 32.0715 28.9466C32.3346 28.2656 32.5185 27.4885 32.5686 26.3522C32.6187 25.2117 32.6313 24.8483 32.6313 21.9448C32.6313 19.0413 32.627 18.6779 32.5769 17.5374ZM30.6511 26.2687C30.6051 27.3131 30.4297 27.8771 30.2835 28.253C29.9241 29.1847 29.1847 29.9241 28.253 30.2835C27.8771 30.4297 27.309 30.6051 26.2687 30.651C25.1407 30.7012 24.8024 30.7136 21.949 30.7136C19.0957 30.7136 18.7531 30.7012 17.6292 30.651C16.5848 30.6051 16.0208 30.4297 15.6449 30.2835C15.1812 30.1121 14.7592 29.8406 14.4167 29.4855C14.0616 29.1387 13.79 28.7209 13.6187 28.2573C13.4725 27.8813 13.297 27.3131 13.2512 26.2729C13.2009 25.1449 13.1885 24.8065 13.1885 21.9531C13.1885 19.0997 13.2009 18.7572 13.2512 17.6335C13.297 16.5891 13.4725 16.0251 13.6187 15.6491C13.79 15.1853 14.0616 14.7635 14.4209 14.4208C14.7676 14.0657 15.1853 13.7941 15.6491 13.6229C16.0251 13.4767 16.5933 13.3013 17.6335 13.2553C18.7615 13.2052 19.0999 13.1926 21.9531 13.1926C24.8107 13.1926 25.149 13.2052 26.2729 13.2553C27.3173 13.3013 27.8813 13.4767 28.2573 13.6229C28.7209 13.7941 29.1429 14.0657 29.4855 14.4208C29.8406 14.7676 30.1121 15.1853 30.2835 15.6491C30.4297 16.0251 30.6051 16.5932 30.6511 17.6335C30.7012 18.7615 30.7138 19.0997 30.7138 21.9531C30.7138 24.8065 30.7012 25.1407 30.6511 26.2687Z"
                fill="#808080" />
              <path
                d="M21.9467 16.4512C18.9139 16.4512 16.4531 18.9117 16.4531 21.9448C16.4531 24.9778 18.9139 27.4384 21.9467 27.4384C24.9798 27.4384 27.4404 24.9778 27.4404 21.9448C27.4404 18.9117 24.9798 16.4512 21.9467 16.4512ZM21.9467 25.5084C19.9792 25.5084 18.3832 23.9125 18.3832 21.9448C18.3832 19.977 19.9792 18.3812 21.9467 18.3812C23.9145 18.3812 25.5103 19.977 25.5103 21.9448C25.5103 23.9125 23.9145 25.5084 21.9467 25.5084Z"
                fill="#808080" />
              <path
                d="M28.9382 16.2347C28.9382 16.9429 28.364 17.5172 27.6556 17.5172C26.9473 17.5172 26.373 16.9429 26.373 16.2347C26.373 15.5262 26.9473 14.9521 27.6556 14.9521C28.364 14.9521 28.9382 15.5262 28.9382 16.2347Z"
                fill="#808080" />
            </svg>
          </a>
        </div>
      </div>
    </div>

    <?php 
          // add_action('woocommerce_before_shop_loop', 'woocommerce_breadcrumb', 30);
?>