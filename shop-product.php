<?php include '/src/components/header.php'; ?>
<div class="global">
  <section class="shop-product">
    <div class="container">
      <div class="breadcrumb">
        <ul class="-menu-mrg">
          <li>
            <a href="/">Главная</a>
          </li>
          <li>
            <a href="/">Каталог</a>
          </li>
          <li>
            <a href="/shop-catalog.php">Кирпич</a>
          </li>
          <li>Кирпич печной полнотелый одинарный шамотный ША-8 М-200 НОВОМОСКОВСК</li>
        </ul>
      </div>
      <div class="shop-product__header">
        <div class="shop-product__title">
          <h1>Кирпич печной полнотелый одинарный шамотный ША-8 М-200 НОВОМОСКОВСК</h1>
        </div>
        <div class="shop-product__manufacturer-img-wrap">
          <div class="shop-product__manufacturer-img" style="background-image: url('/src/img/test-manufacturer.png');"></div>
        </div>
      </div>
      <div class="shop-product__gallery -shop-product-block">
        <div class="shop-product__main-img-wrap">
          <div class="shop-product__main-img" style="display: none;">
            <div class="shop-product__main-img-inner" style="background-image: url('/src/img/test-image.png')"></div>
          </div>
          <div class="shop-product__slide-main-img">
            <div class="shop-product__slide-img">
              <div class="shop-product__slide-img-inner" style="background-image: url('/src/img/test-image.png');">
                <span class="shop-product__slide-img-desc">Блок</span>
              </div>
            </div>
            <div class="shop-product__slide-img">
              <div class="shop-product__slide-img-inner" style="background-color: #FF0000;">
                <span class="shop-product__slide-img-desc">Красный</span>
              </div>
            </div>
            <div class="shop-product__slide-img">
              <div class="shop-product__slide-img-inner" style="background-color: #00FF00;"></div>
            </div>
            <div class="shop-product__slide-img">
              <div class="shop-product__slide-img-inner" style="background-color: #0000FF;"></div>
            </div>
            <div class="shop-product__slide-img">
              <div class="shop-product__slide-img-inner" style="background-color: #FFFF00;"></div>
            </div>
          </div>
          <div class="shop-product__icons -new">
            <div class="shop-product__icon -discount">
              <?php include '/src/components/icons/percent.php'; ?>
            </div>
            <div class="shop-product__icon -new">
              <?php include '/src/components/icons/new.php'; ?>
            </div>
            <div class="shop-product__icon -thumb-up">
              <?php include '/src/components/icons/thumbs-up.php'; ?>
            </div>
          </div>
          <div class="shop-product__available-mobile">
            <div class="shop-product__available-mobile-inner -available">
              <?php include '/src/components/icons/check.php'; ?>
              <span>В наличии</span>
            </div>
            <div class="shop-product__available-mobile-inner -not-available" style="display: none">
              <?php include '/src/components/icons/x.php'; ?>
              <span>Нет в наличии</span>
            </div>
          </div>
          <button class="shop-product__compare-mobile shop__btn" title="Добавить к сравнению">
            <?php include '/src/components/icons/bar-chart.php'; ?>
          </button>
        </div>
        <div class="shop-product__slide-gallery-img">
          <div class="shop-product__slide-img">
            <div class="shop-product__slide-img-inner" style="background-image: url('/src/img/test-image.png');"></div>
          </div>
          <div class="shop-product__slide-img">
            <div class="shop-product__slide-img-inner" style="background-color: #FF0000;"></div>
          </div>
          <div class="shop-product__slide-img">
            <div class="shop-product__slide-img-inner" style="background-color: #00FF00;"></div>
          </div>
          <div class="shop-product__slide-img">
            <div class="shop-product__slide-img-inner" style="background-color: #0000FF;"></div>
          </div>
          <div class="shop-product__slide-img">
            <div class="shop-product__slide-img-inner" style="background-color: #FFFF00;"></div>
          </div>
        </div>
      </div>
      <div class="shop-product__info">
        <div class="shop-product__info-block -shop-product-block -top">
          <div class="shop-product__info-block-inner">
            <div class="shop-product__price">
              <div class="shop-product__filter -price">
                <span class="shop-product__filter-title">Цена за ед.</span>
                <div class="shop-product__filter-value"><span>68.69 ₽</span></div>
              </div>
              <div class="shop-product__filter -price">
                <span class="shop-product__filter-title">Цена за поддон (455 шт.)</span>
                <div class="shop-product__filter-value">
                  <div class="shop-product__filter-value-icon"><?php include '/src/components/icons/percent.php'; ?></div>
                  <span class="shop-product__filter-value-new">20 930 ₽</span>
                  <span class="shop-product__filter-value-old">20 930 ₽</span>
                </div>
              </div>
            </div>
            <div class="shop-product__about">
              <div class="shop-product__available">
                <div class="shop-product__available-inner -available">
                  <?php include '/src/components/icons/check.php'; ?>
                  <span>В наличии</span>
                </div>
                <div class="shop-product__available-inner -not-available" style="display: none">
                  <?php include '/src/components/icons/x.php'; ?>
                  <span>Нет в наличии</span>
                </div>
              </div>
              <button class="shop-product__compare shop__btn" title="Добавить к сравнению">
                <?php include '/src/components/icons/bar-chart.php'; ?>
              </button>
            </div>
          </div>
        </div>
        <div class="shop-product__info-block -shop-product-block -bottom">
          <div class="shop-product__filter-block">
            <div class="shop-product__filter -circle">
              <span class="shop-product__filter-title">Цвет:</span>
              <form>
                <input id="shop-product__color-1" type="radio" name="color" value="red" checked>
                <label for="shop-product__color-1" style="background-color: #FF0000">Красный</label>
                <input id="shop-product__color-2" type="radio" name="color" value="green">
                <label for="shop-product__color-2" style="background-color: #00FF00">Зеленый</label>
                <input id="shop-product__color-3" type="radio" name="color" value="blue">
                <label for="shop-product__color-3" style="background-color: #0000FF">Синий</label>
              </form>
            </div>
            <div class="shop-product__filter -tabs">
              <span class="shop-product__filter-title">Вариант отгрузки:</span>
              <form class="-selector">
                <input id="shop-product__quantity-1" type="radio" name="quantity" value="1" checked>
                <label for="shop-product__quantity-1">1 шт.</label>
                <input id="shop-product__quantity-2" type="radio" name="quantity" value="pallet">
                <label for="shop-product__quantity-2">Поддон</label>
              </form>
            </div>
            <div class="shop-product__filter -common">
              <span class="shop-product__filter-title">Тестовый заголовок:</span>
              <span class="shop-product__filter-value">Тест</span>
            </div>
          </div>
          <div class="shop-product__shop-cart">
            <div class="shop-product__quantity-wrap">
              <div class="shop__quantity -shop-product">
                <button class="shop__btn -decrement">
                  <?php include '/src/components/icons/minus.php'; ?>
                </button>
                <input name="quantity" value="1">
                <button class="shop__btn -increment">
                  <?php include '/src/components/icons/plus.php'; ?>
                </button>
              </div>
              <div class="shop-product__params">
                <?php include '/src/components/icons/info.php'; ?>
                <span>0.65 м³ / 7.98 м² / 1160.25 кг.</span>
              </div>
            </div>
            <button class="shop__svg-btn shop__shop-cart -shop-product" title="Добавить в корзину">
              <?php include '/src/components/icons/shop-cart.php'; ?>
              <span>99 999 ₽</span>
            </button>
          </div>
          <div class="shop-product__characteristics">
            <div class="shop-product__characteristics-title">
              <h4>Характеристики</h4>
            </div>
            <div class="shop-product__characteristics-items">
              <div class="shop-product__filter -list">
                <span class="shop-product__filter-title">Производитель</span>
                <div class="shop-product__filter-value"><a href="/">Технониколь</a></div>
              </div>
              <div class="shop-product__filter -list">
                <span class="shop-product__filter-title">Производитель</span>
                <div class="shop-product__filter-value"><span>Россия</span></div>
              </div>
              <div class="shop-product__filter -list">
                <span class="shop-product__filter-title">Основа</span>
                <div class="shop-product__filter-value"><span>Стеклохолст</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="shop-product__add-info -shop-product-block">
        <div class="shop-product__tab-buttons -tab-buttons">
          <ul class="-tabs">
            <li class="shop-product__tab-btn -tab-btn -active">Описание</li>
            <li class="shop-product__tab-btn -tab-btn">Способы оплаты</li>
            <li class="shop-product__tab-btn -tab-btn">Стоимость доставки</li>
          </ul>
        </div>
        <div class="shop-product__tabs -tab-blocks">
          <div class="shop-product__tab -tab-box -active">
            <p>Клинкерный кирпич Kerma Premium klinker "Коричневый Гладкий WDF" является оптимальным вариантом для
            строительства и облицовки зданий различного назначения, особенно его свойства будут иметь значение при его
            использовании в местах с агрессивной окружающей средой. Благодаря разнообразию фактур, обширной оттеночной
            палитре и декоративной привлекательности кирпичная кладка будет смотреться максимально гармонично в любом
              экстерьере.</p>
            <p>Дополнительной особенностью кирпича является высокая прочность (марка прочности — до 400) и способность
            сохранять свои эксплуатационные свойства в течение десятков лет. Величина водопоглощения керамического
            кирпича Klinker варьируется от 2 до 6%. Благодаря этому он успешно используется для обустройства цоколей,
            заборов, придорожных столбов, регулярно подвергающихся воздействию осадков. Изделие может похвастаться
              высокой устойчивостью к воздействию агрессивных химических средств.</p>
            <p>Kerma Premium klinker также может использоваться для возведения печей, каминов и барбекю, в качестве печного
            кирпича, в том числе в полнотелом исполнении. Его главными преимуществами являются жаропрочность и
              способность выдерживать резкие температурные колебания.</p>
          </div>
          <div class="shop-product__tab -tab-box">
            <p>Способы оплаты</p>
          </div>
          <div class="shop-product__tab -tab-box">
            <p>Стоимость доставки</p>
          </div>
        </div>
      </div>
      <div class="shop-product__related">
        <div class="shop-product__related-title">
          <h2>С этим товаром покупают</h2>
        </div>
        <div class="shop-product__related-slider -prod-slider">
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
        </div>
      </div>
      <div class="shop-product__related">
        <div class="shop-product__related-title">
          <h2>Похожие товары</h2>
        </div>
        <div class="shop-product__related-slider -prod-slider">
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
        </div>
      </div>
      <div class="shop-product__related">
        <div class="shop-product__related-title">
          <h2>Ранее вы смотрели</h2>
        </div>
        <div class="shop-product__related-slider -prod-slider">
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include '/src/components/footer.php'; ?>
