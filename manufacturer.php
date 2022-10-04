<?php include '/src/components/header.php'; ?>
<div class="global">
  <section class="inner-page -image-header -image-header-manufacturer">
    <div class="inner-page__header" style="background-image: url('/src/img/test-banner.png')">
      <div class="container">
        <div class="inner-page__header-img">
          <div class="inner-page__header-img-inner" style="background-image: url('/src/img/test-manufacturer.png');"></div>
        </div>
        <div class="inner-page__header-info">
          <div class="breadcrumb">
            <ul class="-menu-mrg">
              <li>
                <a href="/">Главная</a>
              </li>
              <li>Kerma Premium Klinker</li>
            </ul>
          </div>
          <div class="inner-page__title">
            <h1>Kerma Premium klinker</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="inner-page__info">
      <div class="container">
        <p>По своей сути рыбатекст является альтернативой традиционному <a href="/">lorem ipsum</a>, который вызывает у
          некторых людей
          недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит
          любой макет непонятным смыслом и придаст неповторимый колорит советских времен.</p>
        <h3>H3 test</h3>
        <ul>
          <li>li test</li>
          <li>li test</li>
          <li>li test</li>
        </ul>
        <div class="-mrg-block">
          <div class="-mrg-inner">
            <img src="/src/img/test-image_1.png">
            <p>Подпись под фото</p>
          </div>
        </div>
        <div class="-mrg-block">
          <div class="-mrg-inner">
            <img src="/src/img/test-image_2.png">
            <p>Подпись под фото</p>
          </div>
          <div class="-mrg-inner">
            <img src="/src/img/test-image_3.png">
            <p>Подпись под фото</p>
          </div>
        </div>
        <h2>Продукция завода Kerma Premium Klinker</h2>
        <div class="inner-page__filter">
          <form class="inner-page__products-filter-form -selector">
            <input id="inner-page__products-filter-1" type="radio" name="categoryProducts" value="Все" checked>
            <label for="inner-page__products-filter-1">Все<span>25</span></label>
            <input id="inner-page__products-filter-2" type="radio" name="categoryProducts" value="Строительные блоки">
            <label for="inner-page__products-filter-2">Строительные блоки<span>5</span></label>
            <input id="inner-page__products-filter-3" type="radio" name="categoryProducts" value="Клинкерная плитка">
            <label for="inner-page__products-filter-3">Клинкерная плитка<span>5</span></label>
            <input id="inner-page__products-filter-4" type="radio" name="categoryProducts" value="Комплектующие для кровли">
            <label for="inner-page__products-filter-4">Комплектующие для кровли<span>5</span></label>
            <input id="inner-page__products-filter-5" type="radio" name="categoryProducts" value="Сетки кладочные и штукатурные">
            <label for="inner-page__products-filter-5">Сетки кладочные и штукатурные<span>5</span></label>
            <input id="inner-page__products-filter-6" type="radio" name="categoryProducts" value="Напольные покрытия">
            <label for="inner-page__products-filter-6">Напольные покрытия<span>5</span></label>
          </form>
        </div>
        <div class="inner-page__list -products">
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
