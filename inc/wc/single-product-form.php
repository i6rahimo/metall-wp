<section class="shipment__form ">
    <div class="shipment__form-content">
        <h3 class="shipment__form-title">Получите <span>расчет стоимости поставки</span></h3>
        <p class="shipment__form-subtitle">
            Оставьте контактные данные <br> или <span>напишите на почту</span>
        </p>
        <span class="shipment__form-sub-subtitle">Специалист свяжется с вами и:</span>
        <div class="shipment__form-items">
            <div class="shipment__form-item">
                <img src="<?php echo get_template_directory_uri() ?>/images/shi1.svg" alt="" class="shipment__form-item__img">
                <span class="shipment__form-item__text">Ответит на все вопросы технического характера</span>
            </div>
            <div class="shipment__form-item">
                <img src="<?php echo get_template_directory_uri() ?>/images/shi2.svg" alt="" class="shipment__form-item__img">
                <span class="shipment__form-item__text">Ответит на вопросы по доставке и оплате</span>
            </div>
            <div class="shipment__form-item">
                <img src="<?php echo get_template_directory_uri() ?>/images/shi3.svg" alt="" class="shipment__form-item__img">
                <span class="shipment__form-item__text">Подскажет, как лучше реализовать ваши задачи</span>
            </div>
            <div class="shipment__form-item">
                <img src="<?php echo get_template_directory_uri() ?>/images/shi4.svg" alt="" class="shipment__form-item__img">
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
                <path d="M9.66667 1L15.5 7M15.5 7L9.66667 13M15.5 7L1.5 7" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <p class="form__shipment-date">Нажимая на кнопку, вы даёте согласие на обработку персональных данных
            в соответствии <a class="form__shipment-datelink" href="#">с Политикой конфиденциальности</a></p>
    </form>
</section>