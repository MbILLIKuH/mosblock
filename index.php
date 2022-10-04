<?php include '/src/components/header.php'; ?>
<div class="global">
  <section class="banner">
    <div class="container">
      <div class="banner__main">
        <div class="banner__main-item"><a class="banner__item" href="/"
                                          style="background-image: url('/src/img/test-slide.png');"></a></div>
        <div class="banner__main-item"><a class="banner__item" href="/" style="background-color: #FF0000;"></a></div>
        <div class="banner__main-item"><a class="banner__item" href="/" style="background-color: #00FF00;"></a></div>
        <div class="banner__main-item"><a class="banner__item" href="/" style="background-color: #0000FF;"></a></div>
        <div class="banner__main-item"><a class="banner__item" href="/" style="background-color: #FF00FF;"></a></div>
      </div>
      <div class="banner__additional">
        <div class="banner__additional-item" data-add-slide="1">
          <div class="banner__item" style="background-color: #FF0000;"></div>
        </div>
        <div class="banner__additional-item" data-add-slide="2">
          <div class="banner__item" style="background-color: #00FF00;"></div>
        </div>
        <div class="banner__additional-item" data-add-slide="3">
          <div class="banner__item" style="background-color: #0000FF;"></div>
        </div>
        <div class="banner__additional-item" data-add-slide="4">
          <div class="banner__item" style="background-color: #FF00FF;"></div>
        </div>
        <div class="banner__additional-item" data-add-slide="0">
          <div class="banner__item" style="background-image: url('/src/img/test-slide.png');"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="products -section-default">
    <div class="container">
      <div class="products__top -top-block -tab-buttons">
        <div class="products__tab-buttons">
          <ul class="-tabs">
            <li class="products__tab-btn -tab-btn -active">Скидки</li>
            <li class="products__tab-btn -tab-btn">Новинки</li>
            <li class="products__tab-btn -tab-btn">Распродажа</li>
          </ul>
        </div>
        <div class="products__btn">
          <a class="btn-default btn-arrow" href="/shop-catalog.php">
            <span>Все предложения</span>
            <?php include '/src/components/icons/chevron-right.php'; ?>
          </a>
        </div>
      </div>
      <div class="products__tabs -tab-blocks">
        <div class="products__slider -tab-box -prod-slider -active">
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
        </div>
        <div class="products__slider -tab-box -prod-slider">
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
        </div>
        <div class="products__slider -tab-box -prod-slider">
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
          <?php include '/src/components/shop/shop-item.php'; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="popular-products -section-default">
    <div class="container">
      <div class="popular-products__title">
        <h2>Популярные товары по категориям</h2>
      </div>
      <div class="popular-products__filter">
        <div class="popular-products__filter-inner">
          <form class="popular-products__filter-form -selector">
            <input id="popular-products__filter-1" type="radio" name="categoryProducts" value="Кирпич" checked>
            <label for="popular-products__filter-1">Кирпич</label>
            <input id="popular-products__filter-2" type="radio" name="categoryProducts" value="Строительные блоки">
            <label for="popular-products__filter-2">Строительные блоки</label>
            <input id="popular-products__filter-3" type="radio" name="categoryProducts" value="Клинкерная плитка">
            <label for="popular-products__filter-3">Клинкерная плитка</label>
            <input id="popular-products__filter-4" type="radio" name="categoryProducts" value="Комплектующие для кровли">
            <label for="popular-products__filter-4">Комплектующие для кровли</label>
            <input id="popular-products__filter-5" type="radio" name="categoryProducts" value="Сетки кладочные и штукатурные">
            <label for="popular-products__filter-5">Сетки кладочные и штукатурные</label>
            <input id="popular-products__filter-6" type="radio" name="categoryProducts" value="Напольные покрытия">
            <label for="popular-products__filter-6">Напольные покрытия</label>
          </form>
        </div>
      </div>
      <div class="popular-products__list">
        <div class="popular-products__slider -prod-slider">
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
  <section class="popular-cat -section-default">
    <div class="container">
      <div class="popular-cat__top -top-block">
        <div class="popular-cat__title -top-flex-grow">
          <h2>Популярные категории</h2>
        </div>
        <div class="popular-cat__btn">
          <a class="btn-default btn-arrow" href="/shop-catalog.php">
            <span>Все категории</span>
            <?php include '/src/components/icons/chevron-right.php'; ?>
          </a>
        </div>
      </div>
      <div class="popular-cat__list">
        <div class="popular-cat__item">
          <div class="popular-cat__item-inner">
            <div class="popular-cat__item-title -img">
              <div class="popular-cat__item-img" style="background-image: url('/src/img/test-image.png')"></div>
              <h3>Кирпич</h3>
            </div>
            <div class="popular-cat__item-list">
              <ul class="-menu">
                <li>
                  <a href="/">Кирпич облицовочный<span>165</span></a>
                </li>
                <li>
                  <a href="/">Кирпич ручной формовки<span>28</span></a>
                </li>
                <li>
                  <a href="/">Клинкерный кирпич<span>58</span></a>
                </li>
                <li>
                  <a href="/">Ригельный кирпич<span>38</span></a>
                </li>
                <li class="-more">
                  <a href="/">Еще<span>4</span>категории</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="popular-cat__item">
          <div class="popular-cat__item-inner">
            <div class="popular-cat__item-title">
              <div class="popular-cat__item-img" style="background-image: url('/src/img/test-image.png')"></div>
              <h3>Сетки кладочные и штукатурные</h3>
            </div>
            <div class="popular-cat__item-list">
              <ul class="-menu">
                <li>
                  <a href="/">Кирпич облицовочный Кирпич облицовочный Кирпич облицовочный Кирпич облицовочный<span>165</span></a>
                </li>
                <li>
                  <a href="/">Кирпич ручной формовки<span>28</span></a>
                </li>
                <li>
                  <a href="/">Клинкерный кирпич<span>58</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="popular-cat__item">
          <div class="popular-cat__item-inner">
            <div class="popular-cat__item-title">
              <h3>Кирпич</h3>
            </div>
            <div class="popular-cat__item-list">
              <ul class="-menu">
                <li>
                  <a href="/">Кирпич облицовочный<span>165</span></a>
                </li>
                <li>
                  <a href="/">Кирпич ручной формовки<span>28</span></a>
                </li>
                <li>
                  <a href="/">Клинкерный кирпич<span>58</span></a>
                </li>
                <li>
                  <a href="/">Ригельный кирпич<span>38</span></a>
                </li>
                <li class="-more">
                  <a href="/">Еще<span>4</span>категории</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="popular-cat__item">
          <div class="popular-cat__item-inner">
            <div class="popular-cat__item-title">
              <h3>Кирпич</h3>
            </div>
            <div class="popular-cat__item-list">
              <ul class="-menu">
                <li>
                  <a href="/">Кирпич облицовочный<span>165</span></a>
                </li>
                <li>
                  <a href="/">Кирпич ручной формовки<span>28</span></a>
                </li>
                <li>
                  <a href="/">Клинкерный кирпич<span>58</span></a>
                </li>
                <li>
                  <a href="/">Ригельный кирпич<span>38</span></a>
                </li>
                <li class="-more">
                  <a href="/">Еще<span>4</span>категории</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="calculation -section-default">
    <div class="container">
      <div class="calculation__services">
        <div class="calculation__item">
          <div class="calculation__item-inner">
            <div class="calculation__info">
              <div class="calculation__title">
                <h3>Онлайн расчет доставки</h3>
              </div>
              <div class="calculation__desc">
                <p>Собственным транспортом по Москве и МО</p>
              </div>
            </div>
            <div class="calculation__btn">
              <a class="btn-default btn-arrow" href="/">
                <span>Расчет доставки</span>
                <?php include '/src/components/icons/chevron-right.php'; ?>
              </a>
            </div>
          </div>
        </div>
        <div class="calculation__item">
          <div class="calculation__item-inner">
            <div class="calculation__info">
              <div class="calculation__title">
                <h3>Онлайн расчет размеров</h3>
              </div>
              <div class="calculation__desc">
                <p>Калькулятор расчета размеров</p>
              </div>
            </div>
            <div class="calculation__btn">
              <a class="btn-default btn-arrow" href="/">
                <span>Расчет размеров</span>
                <?php include '/src/components/icons/chevron-right.php'; ?>
              </a>
            </div>
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
        <h2>Комплексная поставка строительных и отделочных материалов</h2>
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
        <p>Мы предлагаем вам весь комплекс материалов, необходимых для такого технологически сложного процесса, как
          строительство. Мы гордимся тем, что у нас один из самых широких ассортиментов строительных и отделочных
          материалов.</p>
        <p>У нас Вы можете купить строительные и отделочные материалы от лучших производителей с доставкой или
          самовывозом на самых выгодных условиях. При этом разгрузка манипулятором производится БЕСПЛАТНО!</p>
        <p>Специалисты компании «МОСБЛОК», всегда с удовольствием проконсультируют по всем возникающим вопросам по
          телефонам указанным на сайте, в офисе компании или вы можете заказать интересующий Вас заказ online.
          Ассортимент предлагаемой продукции постоянно расширяется. Это становится возможным, благодаря долгосрочным
          партнерским отношениям с заводами - производителями.</p>
      </div>
    </div>
  </section>
  <section class="news -section-default">
    <div class="container">
      <div class="news__top -top-block">
        <div class="news__title -top-flex-grow">
          <h2>Новости и статьи</h2>
        </div>
        <div class="news__btn">
          <a class="btn-default btn-arrow" href="/news.php">
            <span>Все новости</span>
            <?php include '/src/components/icons/chevron-right.php'; ?>
          </a>
        </div>
      </div>
      <div class="news__container">
        <?php include '/src/components/news/news-item.php'; ?>
        <?php include '/src/components/news/news-item.php'; ?>
        <?php include '/src/components/news/news-item.php'; ?>
      </div>
    </div>
  </section>
</div>
<?php include '/src/components/footer.php'; ?>
