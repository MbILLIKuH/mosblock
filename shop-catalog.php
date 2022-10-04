<?php include '/src/components/header.php'; ?>
<div class="global">
  <section class="shop-catalog">
    <div class="container">
      <div class="breadcrumb">
        <ul class="-menu-mrg">
          <li>
            <a href="/">Главная</a>
          </li>
          <li>
            <a href="/">Каталог</a>
          </li>
          <li>Кирпич</li>
        </ul>
      </div>
      <div class="shop-catalog__top -top-block -tab-buttons">
        <div class="shop-catalog__title -top-flex-grow">
          <h1>Кирпич</h1>
        </div>
        <div class="shop-catalog__tab-buttons">
          <ul class="-tabs">
            <li class="shop-catalog__tab-btn -tab-btn -active">Товары</li>
            <li class="shop-catalog__tab-btn -tab-btn">Коллекции</li>
            <li class="shop-catalog__tab-btn -tab-btn">Категории</li>
          </ul>
        </div>
      </div>
      <div class="shop-catalog__tabs -tab-blocks">
        <div class="shop-catalog__tab -tab-box -active">
          <div class="shop-catalog__filter-wrap -mobile-popup-wrap">
            <div class="shop-catalog__filter -mobile-popup">
              <button class="shop-catalog__filter-back -mobile-popup-close">Закрыть</button>
              <div class="shop-catalog__filter-inner">
                <div class="shop-catalog__filter-item">
                  <div class="shop-catalog__filter-title -active">
                    <span>Цена</span>
                  </div>
                  <div class="shop-catalog__filter-form -visible" style="display: block;">
                    <div class="shop-catalog__filter-price-input-block">
                      <div class="shop-catalog__filter-price-input-wrap">
                        <label for="shop-catalog__filter-price-from">от</label>
                        <input type="number" step="1" min="0" max="2000" class="shop-catalog__filter-price-input" id="shop-catalog__filter-price-from">
                      </div>
                      <div class="shop-catalog__filter-price-input-wrap">
                        <label for="shop-catalog__filter-price-to">до</label>
                        <input type="number" step="1" min="0" max="2000" class="shop-catalog__filter-price-input" id="shop-catalog__filter-price-to">
                      </div>
                    </div>
                    <div class="shop-catalog__filter-price"></div>
                  </div>
                </div>
                <div class="shop-catalog__filter-item">
                  <div class="shop-catalog__filter-switch">
                    <div class="shop-catalog__filter-switch-title">
                      <span>Лучшая цена</span>
                      <span class="shop-catalog__filter-switch-quantity">54</span>
                    </div>
                    <form class="-switcher-ios">
                      <label class="shop-catalog__filter-switch-toggle-wrap">
                        <input type="checkbox">
                        <span class="shop-catalog__filter-switch-toggle"></span>
                      </label>
                    </form>
                  </div>
                </div>
                <div class="shop-catalog__filter-item">
                  <div class="shop-catalog__filter-title">
                    <span>Производитель</span>
                  </div>
                  <div class="shop-catalog__filter-form">
                    <form class="-selector">
                      <input id="item-1__filter-1" type="checkbox" name="prod" value="test">
                      <label for="item-1__filter-1">test</label>
                      <input id="item-1__filter-2" type="checkbox" name="prod" value="test test test test test">
                      <label for="item-1__filter-2">test test test test test</label>
                    </form>
                    <button class="filter-more-btn">
                      <span>Показать все</span>
                      <span class="filter-more-btn__quantity">99</span>
                    </button>
                  </div>
                </div>
                <div class="shop-catalog__filter-item">
                  <div class="shop-catalog__filter-title">
                    <span>Цвет</span>
                  </div>
                  <div class="shop-catalog__filter-form">
                    <form class="-selector">
                      <input id="item-2__filter-1" type="checkbox" name="color" value="blue">
                      <label for="item-2__filter-1">blue</label>
                      <input id="item-2__filter-2" type="checkbox" name="color" value="red">
                      <label for="item-2__filter-2">red</label>
                    </form>
                    <button class="filter-more-btn">
                      <span>Свернуть</span>
                    </button>
                  </div>
                </div>
                <div class="shop-catalog__filter-buttons">
                  <button class="shop-catalog__filter-submit-btn">Показать<span>130</span></button>
                  <button class="shop-catalog__filter-clear-btn">Очистить все</button>
                </div>
              </div>
            </div>
          </div>
          <div class="shop-catalog__products">
            <button class="shop-catalog__filter-btn btn-svg-icon -mobile-popup-open">
              <?php include '/src/components/icons/sliders.php'; ?>
              Фильтры
            </button>
            <div class="shop-catalog__products-filter">
              <form class="shop-catalog__products-filter-form -selector">
                <input id="shop-catalog__products-filter-item-1" type="checkbox" name="sale" value="Распродажа">
                <label for="shop-catalog__products-filter-item-1">Распродажа</label>
                <input id="shop-item__products-filter-item-2" type="checkbox" name="test" value="test">
                <label for="shop-item__products-filter-item-2">Test</label>
                <input id="shop-item__products-filter-item-3" type="checkbox" name="test" value="test">
                <label for="shop-item__products-filter-item-3">Test</label>
                <input id="shop-item__products-filter-item-4" type="checkbox" name="test" value="test">
                <label for="shop-item__products-filter-item-4">Test</label>
                <input id="shop-item__products-filter-item-5" type="checkbox" name="test" value="test">
                <label for="shop-item__products-filter-item-5">Test</label>
                <input id="shop-item__products-filter-item-6" type="checkbox" name="test" value="test">
                <label for="shop-item__products-filter-item-6">Test</label>
                <button><?php include '/src/components/icons/more-horizontal.php'; ?></button>
              </form>
            </div>
            <div class="shop-catalog__sort">
              <div class="shop-catalog__sort-title">
                <span>Сортировка:</span>
              </div>
              <div class="shop-catalog__sort-list">
                <a class="shop-catalog__sort-item -active -big-to-small" href="/">Популярность</a>
                <a class="shop-catalog__sort-item -small-to-big" href="/">Цена</a>
                <a class="shop-catalog__sort-item -big-to-small" href="/">Скидка</a>
                <a class="shop-catalog__sort-item -big-to-small" href="/">Алфавит</a>
              </div>
            </div>
            <div class="shop-catalog__products-list">
              <?php include '/src/components/shop/shop-item.php'; ?>
              <?php include '/src/components/shop/shop-item.php'; ?>
              <?php include '/src/components/shop/shop-item.php'; ?>
              <?php include '/src/components/shop/shop-item.php'; ?>
              <?php include '/src/components/shop/shop-item.php'; ?>
              <?php include '/src/components/shop/shop-item.php'; ?>
            </div>
            <button class="shop-catalog__more-btn more-btn">Показать еще</button>
            <div class="shop-catalog__pagination-wrap pagination-block">
              <ul class="shop-catalog__pagination -pgn">
                <li class="-disable">
                  <?php include '/src/components/icons/chevron-left.php'; ?>
                </li>
                <li class="-active">1</li>
                <li><a href="/">2</a></li>
                <li><a href="/">3</a></li>
                <li>
                  <a href="/"><?php include '/src/components/icons/chevron-right.php'; ?></a>
                </li>
              </ul>
              <div class="shop-catalog__items-on-page items-on-page">
                <span>Элементов на странице</span>
                <button class="shop-catalog__items-on-page-btn">
                  <span>12</span>
                  <?php include '/src/components/icons/chevron-down.php'; ?>
                </button>
                <div class="shop-catalog__items-on-page-list">
                  <ul class="-menu">
                    <li class="-selected">
                      <a href="/">12</a>
                    </li>
                    <li>
                      <a href="/">24</a>
                    </li>
                    <li>
                      <a href="/">36</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="shop-catalog__tab -tab-box">
          <div class="shop-catalog__collection">
            <?php include '/src/components/shop/shop-collection.php'; ?>
            <?php include '/src/components/shop/shop-collection.php'; ?>
            <?php include '/src/components/shop/shop-collection.php'; ?>
            <?php include '/src/components/shop/shop-collection.php'; ?>
            <?php include '/src/components/shop/shop-collection.php'; ?>
            <?php include '/src/components/shop/shop-collection.php'; ?>
          </div>
        </div>
        <div class="shop-catalog__tab -tab-box">
          <div class="shop-catalog__category">
            <?php include '/src/components/shop/shop-category.php'; ?>
            <?php include '/src/components/shop/shop-category.php'; ?>
            <?php include '/src/components/shop/shop-category.php'; ?>
            <?php include '/src/components/shop/shop-category.php'; ?>
            <?php include '/src/components/shop/shop-category.php'; ?>
            <?php include '/src/components/shop/shop-category.php'; ?>
            <?php include '/src/components/shop/shop-category.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="manufacturer -section-default">
    <div class="container">
      <div class="manufacturer__top -top-block">
        <div class="manufacturer__title -top-flex-grow">
          <h2>Наши производители</h2>
        </div>
        <div class="manufacturer__btn">
          <a class="btn-default btn-arrow" href="/manufacturers.php">
            <span>Все производители</span>
            <?php include '/src/components/icons/chevron-right.php'; ?>
          </a>
        </div>
      </div>
      <div class="manufacturer__slider">
        <div class="manufacturer__item">
          <a class="manufacturer__item-inner" href="/">
            <div class="manufacturer__img-wrap">
              <div class="manufacturer__img" style="background-image: url('/src/img/test-manufacturer.png');"></div>
            </div>
            <p>Kerma Premium klinker</p>
          </a>
        </div>
        <?php include '/src/components/manufacturer/manufacturer-item.php'; ?>
        <?php include '/src/components/manufacturer/manufacturer-item.php'; ?>
        <?php include '/src/components/manufacturer/manufacturer-item.php'; ?>
        <?php include '/src/components/manufacturer/manufacturer-item.php'; ?>
        <?php include '/src/components/manufacturer/manufacturer-item.php'; ?>
        <?php include '/src/components/manufacturer/manufacturer-item.php'; ?>
        <?php include '/src/components/manufacturer/manufacturer-item.php'; ?>
      </div>
    </div>
  </section>
  <section class="information -section-default">
    <div class="container">
      <div class="information__title">
        <h2>Комплексная поставка кирпича</h2>
      </div>
      <div class="information__desc">
        <p>ООО «МОСБЛОК» 19 лет работает на рынке строительных материалов. Мы представляем собой крупную компанию,
          имеющую штат квалифицированных сотрудников, собственные склады на МКАДе с постоянным наличием необходимого
          запаса строительных материалов.</p>
        <p>За время работы у нас сложились партнерские отношения с ведущими российскими производителями кирпича и
          газосиликатных блоков, позволяющие предоставлять стройматериалы высокого качества по низким ценам. Кроме того,
          мы имеем собственное производство пескоцементных и керамзитобетонных блоков!</p>
        <p>Те, кто сталкивался со стройкой, знают, насколько это трудоемкое и кропотливое занятие. А начинается стройка
          с тщательного подбора строительных материалов, ведь от их качества напрямую зависит то, насколько добротным
          будет здание и как долго оно будет вам служить.</p>
      </div>
    </div>
  </section>
</div>
<?php include '/src/components/footer.php'; ?>
