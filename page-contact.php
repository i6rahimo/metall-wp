<?php  get_header(); ?>



    <main class="page">
      <div class="breadcrumbs">
        <div class="breadcrumbs__container">
          <ul class="breadcrumbs__ul">
            <li class="breadcrumbs__li">
              <a class="breadcrumbs__link" href="index.html">Главная</a>
            </li>
            <li class="breadcrumbs__li">
              <a class="active breadcrumbs__link" href="index.html">Контакты</a>
            </li>
          </ul>
        </div>
      </div>
      <section class="contact">
        <div class="contact__container">
          <div class="contact__wrapper">
            <div class="contact__about">
              <div class="contact__about-text">
                <p>Контакты компании</p>
              </div>
              <img src="../images/footer-logo.svg" alt="">
            </div>

            <div class="contact__cols">
              <div class="contact__col">
                <h3 class="contact__col-title">ОФИС</h3>
                <div class="contact__col-inner">
                  <a class="contact__col-tel" href="tel:++7 (812) 123-45-67">+7 (812) 123-45-67</a>
                  <a class="contact__col-gmail" href="mailto:">info@sait.ru</a>
                </div>

                <div class="contact__col-inner">
                  <p class="contact__col-text"><span>Адрес: </span>29345, Санкт-Петербург, ул. Летчика Бабушкина, д.39,
                    офис А6И</p>
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
                  <p class="contact__col-text"><span>Адрес: </span>М.О. Дмитровский р-он, п.Некрасовский, ул.Заводская
                    д.1</p>
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
            <div class="contact__map">
              <div class="contact__map">
                <div id="map-test" class="map"></div>

              </div>
            </div>
          </div>
        </div>
      </section>

    </main>



<?php get_footer(); ?>