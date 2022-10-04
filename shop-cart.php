<?php include '/src/components/header.php'; ?>
<div class="global">
  <section class="shop-cart">
    <div class="container">
      <div class="shop-cart__order-forms">
        <div class="shop-cart__title">
          <h1>Корзина</h1>
          <span>3 товара</span>
        </div>
        <div class="shop-cart__products shop-cart__wrap -input-tab-wrap -mobile-popup-open">
          <div class="shop-cart__products-info">
            <div class="shop-cart__products-amount">
              <p>3 товара</p>
            </div>
            <div class="shop-cart__products-cost">
              <p>1 600 564 ₽</p>
            </div>
          </div>
          <div class="shop-cart__products-btn-wrap">
            <button class="shop-cart__products-btn shop__btn" title="Показать список"></button>
          </div>
        </div>
        <div class="shop-cart__customer shop-cart__wrap -input-tab-wrap">
          <div class="shop-cart__wrap-title">
            <h3>Покупатель</h3>
          </div>
          <form class="shop-cart__tabs-btn -switcher">
            <input id="shop-cart__customer-1" type="radio" name="customer" value="physical" data-input="0" checked>
            <label for="shop-cart__customer-1">Физическое лицо</label>
            <input id="shop-cart__customer-2" type="radio" name="customer" value="juridical" data-input="1">
            <label for="shop-cart__customer-2">Юридическое лицо</label>
          </form>
          <div class="shop-cart__tab -input-tab -active" data-tab="0">
            <form>
              <input type="text" name="person" placeholder="Контактное лицо">
              <div class="-w-6 -icon -icon-info">
                <input type="text" name="phone" title="Какая-то информация" placeholder="Контактный телефон">
              </div>
              <div class="-w-6 -icon -icon-info">
                <input type="text" name="e-mail" title="И здесь тоже" placeholder="Контактный e-mail">
              </div>
              <textarea name="comment" placeholder="Комментарий к заказу"></textarea>
            </form>
          </div>
          <div class="shop-cart__tab -input-tab" data-tab="1">
            <form>
              <input class="-w-6" type="text" name="company" placeholder="Название компании">
              <div class="-w-6 -icon -icon-info">
                <input type="text" name="inn" title="Какая-то информация" placeholder="ИНН">
              </div>
              <input type="text" name="person" placeholder="Контактное лицо">
              <input class="-w-6" type="text" name="phone" placeholder="Контактный телефон">
              <input class="-w-6" type="text" name="e-mail" placeholder="Контактный e-mail">
              <textarea name="comment" placeholder="Комментарий к заказу"></textarea>
            </form>
          </div>
        </div>
        <div class="shop-cart__delivery shop-cart__wrap -input-tab-wrap">
          <div class="shop-cart__wrap-title">
            <h3>Способ получения</h3>
          </div>
          <form class="shop-cart__tabs-btn -dot">
            <label>
              <input type="radio" name="delivery" value="delivery" data-input="0" checked>
              <span>Доставка</span>
            </label>
            <label>
              <input type="radio" name="delivery" value="self-pickup" data-input="1">
              <span>Самовывоз</span>
            </label>
          </form>
          <div class="shop-cart__tab -input-tab -active" data-tab="0">
            <form>
              <div class="-w-6 -icon -icon-arrow">
                <select name="region">
                  <option value="" hidden disabled selected>Регион</option>
                  <option value="mosk-obl">Московская область</option>
                  <option value="omsk-obl">Омская область</option>
                </select>
              </div>
              <div class="-w-6 -icon -icon-arrow">
                <select name="city">
                  <option value="" hidden disabled selected>Город</option>
                  <option value="mosk">Москва</option>
                  <option value="omsk">Омск</option>
                </select>
              </div>
              <input type="text" name="address" placeholder="Адрес (улица, дом, кв.)">
              <textarea name="delivery" placeholder="Комментарий к доставке"></textarea>
            </form>
          </div>
          <div class="shop-cart__tab -input-tab" data-tab="1">
            <form>
              <div class="-icon -icon-arrow">
                <select name="region">
                  <option value="" hidden disabled selected>Пункт самовывоза</option>
                  <option value="point-1">Пункт 1</option>
                  <option value="point-2">Пункт 2</option>
                </select>
              </div>
              <p class="-icon-pin">
                <?php include '/src/components/icons/map-pin.php'; ?>
                <span>41 км. МКАД. Сектор СП, ряд №1, места №3 №5 №7. (Напротив «ФУД СИТИ»)</span>
              </p>
            </form>
          </div>
        </div>
        <div class="shop-cart__pay shop-cart__wrap">
          <div class="shop-cart__wrap-title">
            <h3>Оплата</h3>
          </div>
          <form class="shop-cart__tabs-btn -dot">
            <label>
              <input type="radio" name="pay" value="cash" checked>
              <span>Наличный расчет</span>
            </label>
            <label>
              <input id="shop-cart__pay-2" type="radio" name="pay" value="cashless">
              <span>Безналичный расчет</span>
            </label>
          </form>
          <a class="shop-cart__order-form-btn btn-default" href="/shop-order.php">Оформить заказ</a>
          <p class="shop-cart__order-agreement">Нажимая «Заказать», Вы даёте Согласие на обработку Ваших персональных данных и принимаете <a href="/">Пользовательское соглашение</a>.</p>
        </div>
      </div>
      <div class="shop-cart__order-list-wrap -mobile-popup-wrap">
        <div class="shop-cart__order-list -mobile-popup">
          <button class="shop-cart__order-back -mobile-popup-close">Закрыть</button>
          <div class="shop-cart__order-list-inner">
            <div class="shop-cart__order">
              <span class="shop-cart__order-title">Ваш заказ</span>
              <button class="shop-cart__order-decline">Очистить корзину</button>
            </div>
            <div class="shop-cart__list">
              <?php include '/src/components/shop/shop-cart-item.php'; ?>
              <?php include '/src/components/shop/shop-cart-item.php'; ?>
              <?php include '/src/components/shop/shop-cart-item.php'; ?>
              <div class="shop-cart__item -deleted">
                <div class="shop-cart__item-desc">
                  <div class="shop-cart__item-img" style="background-image: url('/src/img/test-image.png')"></div>
                  <div class="shop-cart__item-info">
                    <a class="shop-cart__item-title" href="/">Тестовое описание Тестовое описание Тестовое описание</a>
                    <div class="shop-cart__item-filter -common">
                      <span class="shop-product__filter-title">Цвет:</span>
                      <span class="shop-product__filter-value">Синий</span>
                    </div>
                    <div class="shop-cart__item-filter -circle" style="display: none;">
                      <form>
                        <input id="shop-cart__color-1" type="radio" name="color" value="red" checked>
                        <label for="shop-cart__color-1" style="background-color: #FF0000">Красный</label>
                        <input id="shop-cart__color-2" type="radio" name="color" value="green">
                        <label for="shop-cart__color-2" style="background-color: #00FF00">Зеленый</label>
                        <input id="shop-cart__color-3" type="radio" name="color" value="blue">
                        <label for="shop-cart__color-3" style="background-color: #0000FF">Синий</label>
                      </form>
                    </div>
                  </div>
                  <div class="shop-cart__item-cost">
                    <span class="shop-cart__item-price">1000 ₽</span>
                    <span class="shop-cart__item-amount">за 1 шт.</span>
                  </div>
                </div>
                <div class="shop-cart__item-btn">
                  <div class="shop__quantity -shop-cart">
                    <button class="shop__btn -decrement -shop-cart">
                      <?php include '/src/components/icons/minus.php'; ?>
                    </button>
                    <input name="quantity" value="1">
                    <button class="shop__btn -increment -shop-cart">
                      <?php include '/src/components/icons/plus.php'; ?>
                    </button>
                  </div>
                  <button class="shop-cart__item-delete shop__svg-btn -shop-cart" title="Удалить">
                    <?php include '/src/components/icons/trash.php'; ?>
                  </button>
                  <button class="shop-cart__item-recover shop__svg-btn -shop-cart" title="Восстановить">
                    <?php include '/src/components/icons/rotate-cw.php'; ?>
                  </button>
                </div>
              </div>
            </div>
            <div class="shop-cart__promo-code">
              <div class="shop-cart__promo-code-input-wrap">
                <input class="shop-cart__promo-code-input" type="text" name="promo-code" placeholder="Промокод">
              </div>
              <button class="shop-cart__promo-code-btn">Применить</button>
            </div>
            <div class="shop-cart__price -common -cost">
              <span class="shop-cart__price-title">Сумма:</span>
              <span class="shop-cart__price-amount">1 600 564 ₽</span>
            </div>
            <div class="shop-cart__price -common -delivery">
              <span class="shop-cart__price-title">Доставка:</span>
              <span class="shop-cart__price-amount">-</span>
            </div>
            <div class="shop-cart__price -summary">
              <span class="shop-cart__price-title">Итого:</span>
              <span class="shop-cart__price-amount">1 600 564 ₽</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include '/src/components/footer.php'; ?>
