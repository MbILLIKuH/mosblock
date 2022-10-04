<div class="shop-cart__item">
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
