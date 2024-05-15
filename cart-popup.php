<div class="popup" data-popup="popup-4" data-close-overlay>
    <div class="popup__wrapper" data-close-overlay>
        <div class="poup__content-close">
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="45" height="45" rx="22.5" fill="#F1F1F1" />
                <path d="M29 16L17 28M29 28L17 16" stroke="#181818" stroke-width="2" stroke-linecap="round" />
            </svg>
        </div>
        <div class="popup__content cart__content">

            <div class="popup__cart">
                <h2 class="popup__cart-title">Вы добавили в заявку:</h2>
                <div class="popup__cart-wrapper">
                    <?php

                    defined('ABSPATH') || exit;

                    do_action('woocommerce_before_mini_cart'); ?>

                    <?php if (!WC()->cart->is_empty()): ?>

                        <ul
                            class="popup__cart-wrapper woocommerce-mini-cart cart_list product_list_widget <?php echo esc_attr($args['list_class']); ?>">
                            <?php
                            do_action('woocommerce_before_mini_cart_contents');

                            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                                $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                                $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                                if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                    /**
                                     * This filter is documented in woocommerce/templates/cart/cart.php.
                                     *
                                     * @since 2.1.0
                                     */
                                    $product_name = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);
                                    $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);
                                    $product_price = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
                                    $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                                    ?>
                                    <li
                                        class="popup__cart-product woocommerce-mini-cart-item <?php echo esc_attr(apply_filters('woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key)); ?>">
                                        <?php if (empty($product_permalink)): ?>
                                            <?php echo $thumbnail . wp_kses_post($product_name); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                        <?php else: ?>
                                            <p class="popup__cart-name" href="<?php echo esc_url($product_permalink); ?>">
                                                <?php echo  wp_kses_post($product_name); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                        </p>
                                        <?php endif; ?>
                                        <?php
                                        echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                            'woocommerce_cart_item_remove_link',
                                            sprintf(
                                                '<a href="%s" class="remove remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">
                                                    <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 5.02941H20M8.125 16.7941V9.73529M12.875 16.7941V9.73529M15.25 21.5H5.75C4.43832 21.5 3.375 20.4466 3.375 19.1471V6.20588C3.375 5.55614 3.90666 5.02941 4.5625 5.02941H16.4375C17.0933 5.02941 17.625 5.55614 17.625 6.20588V19.1471C17.625 20.4466 16.5617 21.5 15.25 21.5ZM8.125 5.02941H12.875C13.5308 5.02941 14.0625 4.50269 14.0625 3.85294V2.67647C14.0625 2.02672 13.5308 1.5 12.875 1.5H8.125C7.46916 1.5 6.9375 2.02672 6.9375 2.67647V3.85294C6.9375 4.50269 7.46916 5.02941 8.125 5.02941Z" stroke="#808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </a>',
                                                esc_url(wc_get_cart_remove_url($cart_item_key)),
                                                /* translators: %s is the product name */
                                                esc_attr(sprintf(__('Remove %s from cart', 'woocommerce'), wp_strip_all_tags($product_name))),
                                                esc_attr($product_id),
                                                esc_attr($cart_item_key),
                                                esc_attr($_product->get_sku())
                                            ),
                                            $cart_item_key
                                        );
                                        ?>
                                    </li>
                                    <?php
                                }
                            }

                            do_action('woocommerce_mini_cart_contents');
                            ?>
                        </ul>

                        <p class="woocommerce-mini-cart__total total">
                            <?php
                            /**
                             * Hook: woocommerce_widget_shopping_cart_total.
                             *
                             * @hooked woocommerce_widget_shopping_cart_subtotal - 10
                             */
                            // do_action('woocommerce_widget_shopping_cart_total');
                            ?>
                        </p>

                        <?php do_action('woocommerce_widget_shopping_cart_before_buttons'); ?>

                        <!-- <p class="woocommerce-mini-cart__buttons buttons">
                            <?php do_action('woocommerce_widget_shopping_cart_buttons'); ?></p> -->

                        <?php do_action('woocommerce_widget_shopping_cart_after_buttons'); ?>

                    <?php else: ?>

                        <p class="woocommerce-mini-cart__empty-message">
                            <?php esc_html_e('No products in the cart.', 'woocommerce'); ?></p>

                    <?php endif; ?>

                    <?php do_action('woocommerce_after_mini_cart'); ?>


                </div>
                <div class="popup__cart-phone">
                    <p>Если у вас есть срочный вопрос, <br> позвоните по телефону:</p>
                    <a href="tel:+7 (495) 255-32-12">+7 (495) 255-32-12</a>
                </div>
            </div>

            <div class="cart__form">
                <div class="cart__form-wrapper">
                    <h2 class="cart__form-title">Заполните форму, чтобы мы могли
                        <span class="orange__text">получить заявку</span>
                    </h2>
                    <h3 class="cart__form-subtitle">Вышлем вам несколько вариантов КП в течение 42 минут</h3>
                    <form action="" class="popup__form">
                        <label for="" class="popup__form-label">
                            <input type="text" class="popup__form-input cart__form-input"
                                placeholder="Укажите ИНН организации">
                        </label>
                        <label for="" class="popup__form-label">
                            <input type="text" class="popup__form-input cart__form-input"
                                placeholder="Укажите телефон для связи">
                        </label>
                        <button class="btn popup__form-btn cart__form-btn">
                            Отправить заявку
                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.66667 1L15.5 7M15.5 7L9.66667 13M15.5 7L1.5 7" stroke="white"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <p class="popup__form-politic cart__form-politic">
                            Нажимая на кнопку, вы даёте согласие на обработку персональных данных в соответствии <a
                                href="#">с Политикой конфиденциальности</a>
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>