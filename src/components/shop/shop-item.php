<div class="shop-item__block">
  <div class="shop-item__block-inner">
    <div class="shop-item__icons -discount -new">
      <div class="shop-item__icon -discount">
        <?php include '/src/components/icons/percent.php'; ?>
      </div>
      <div class="shop-item__icon -new">
        <?php include '/src/components/icons/new.php'; ?>
      </div>
      <div class="shop-product__icon -thumb-up">
        <?php include '/src/components/icons/thumbs-up.php'; ?>
      </div>
    </div>
    <button class="shop-item__compare shop__btn -full-screen" title="Добавить к сравнению">
      <?php include '/src/components/icons/bar-chart.php'; ?>
    </button>
    <div class="shop-item__top">
      <div class="shop-item__img">
        <div class="shop-item__img-inner" style="background-image: url('/src/img/test-image.png')"></div>
      </div>
      <div class="shop-item__available">
        <div class="shop-item__available-inner -available">
          <?php include '/src/components/icons/check.php'; ?>
          <span>В наличии</span>
        </div>
        <div class="shop-item__available-inner -not-available" style="display: none">
          <?php include '/src/components/icons/x.php'; ?>
          <span>Нет в наличии</span>
        </div>
      </div>
      <div class="shop-item__filter -common">
        <span class="shop-item__filter-title">Производитель:</span>
        <span class="shop-item__filter-value">Огнеупор Новомосковск</span>
      </div>
      <div class="shop-item__title">
        <a href="/shop-product.php">Кирпич печной полнотелый одинарный шамотный ША-8 М-200 НОВОМОСКОВСК</a>
      </div>
      <div class="shop-item__filter -compact">
        <span class="shop-item__filter-title">Цвет:</span>
        <span class="shop-item__filter-value">Каштан</span>
      </div>
      <div class="shop-item__filter -circle" style="display: none">
        <form>
          <input id="shop-item__color-1" type="radio" name="color" value="red" checked>
          <label for="shop-item__color-1" style="background-color: #FF0000">Красный</label>
          <input id="shop-item__color-2" type="radio" name="color" value="green">
          <label for="shop-item__color-2" style="background-color: #00FF00">Зеленый</label>
          <input id="shop-item__color-3" type="radio" name="color" value="blue">
          <label for="shop-item__color-3" style="background-color: #0000FF">Синий</label>
        </form>
      </div>
    </div>
    <div class="shop-item__bottom">
      <div class="shop-item__cost">
        <span class="shop-item__summary">68.69 ₽</span>
        <div class="shop-item__filter -tabs">
          <form class="-selector">
            <input id="shop-item__quantity-1" type="radio" name="quantity" value="1" checked>
            <label for="shop-item__quantity-1">1 шт.</label>
            <input id="shop-item__quantity-2" type="radio" name="quantity" value="pallet">
            <label for="shop-item__quantity-2">Поддон</label>
          </form>
        </div>
      </div>
      <div class="shop-item__additional">
        <div class="shop__quantity -shop-item">
          <button class="shop__btn -decrement">
            <?php include '/src/components/icons/minus.php'; ?>
          </button>
          <input name="quantity" value="1">
          <button class="shop__btn -increment">
            <?php include '/src/components/icons/plus.php'; ?>
          </button>
        </div>
        <button class="shop-item__compare shop__btn -mobile" title="Добавить к сравнению">
          <?php include '/src/components/icons/bar-chart.php'; ?>
        </button>
        <button class="shop__svg-btn shop__shop-cart -shop-item" title="Добавить в корзину">
          <?php include '/src/components/icons/shop-cart.php'; ?>
          <span>99 999 ₽</span>
        </button>
        <div class="shop__svg-btn shop-item__information">
          <?php include '/src/components/icons/info.php'; ?>
          <span>Товар продается поддонами</span>
        </div>
      </div>
    </div>
  </div>
</div>
