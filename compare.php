<?php include '/src/components/header.php'; ?>
<div class="global">
  <section class="inner-page">
    <div class="container">
      <div class="inner-page__top -top-block">
        <div class="inner-page__title -top-flex-grow">
          <h1>Сравнение товаров</h1>
          <span>10 товаров</span>
        </div>
        <div class="inner-page__top-info">
          <button class="btn-svg-icon -orange">
            <?php include '/src/components/icons/x.php'; ?>
            <span>Очистить всё</span>
          </button>
        </div>
      </div>
      <div class="inner-page__tab-buttons -tab-buttons">
        <ul class="-tabs">
          <li class="inner-page__tab-btn -tab-btn -active">
            <span>Кирпич</span>
            <span>4</span>
          </li>
          <li class="inner-page__tab-btn -tab-btn">
            <span>Тротуарная плитка</span>
            <span>6</span>
          </li>
        </ul>
      </div>
      <div class="inner-page__tabs -tab-blocks">
        <div class="inner-page__tab -tab-box -active">
          <div class="inner-page__table -compare">
            <div class="inner-page__table-overflow">
              <table>
                <thead>
                  <tr>
                    <th>Товар</th>
                    <th>Название</th>
                    <th>Стоимость</th>
                    <th>Производитель</th>
                    <th>Цвет</th>
                    <th>Вид размера</th>
                    <th>Поверхность</th>
                    <th>Основа</th>
                    <th>Характеристика</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td aria-label="Товар">
                      <div class="compare__img-wrap">
                        <div class="compare__img" style="background-image: url('/src/img/test-image.png')"></div>
                      </div>
                      <button class="compare__remove-product" title="Удалить">
                        <?php include '/src/components/icons/x.php'; ?>
                      </button>
                    </td>
                    <td aria-label="Название">Тротуарная плитка Braer "Ландхаус", Color Mix "Вечер" 80мм</td>
                    <td aria-label="Стоимость">
                      <span>16 650 ₽</span>
                      <span>за поддон</span>
                    </td>
                    <td aria-label="Производитель">Test Test Test Test Test</td>
                    <td aria-label="Цвет">Test Test Test Test Test</td>
                    <td aria-label="Вид размера">Test Test Test Test Test</td>
                    <td aria-label="Поверхность">Test Test Test Test Test</td>
                    <td aria-label="Основа">Test Test Test Test Test</td>
                    <td aria-label="Характеристика">Test Test Test Test Test</td>
                  </tr>
                  <tr>
                    <td aria-label="Товар">
                      <div class="compare__img-wrap">
                        <div class="compare__img" style="background-image: url('/src/img/test-image.png')"></div>
                      </div>
                      <button class="compare__remove-product" title="Удалить">
                        <?php include '/src/components/icons/x.php'; ?>
                      </button>
                    </td>
                    <td aria-label="Название">Тротуарная плитка Braer "Ландхаус", Color Mix "Вечер" 80мм</td>
                    <td aria-label="Стоимость">
                      <span>16 650 ₽</span>
                      <span>за поддон</span>
                    </td>
                    <td aria-label="Производитель">Тротуарная плитка Braer "Ландхаус", Color Mix "Вечер" 80мм</td>
                    <td aria-label="Цвет">Тротуарная плитка Braer "Ландхаус", Color Mix "Вечер" 80мм</td>
                    <td aria-label="Вид размера">Тротуарная плитка Braer "Ландхаус", Color Mix "Вечер" 80мм</td>
                    <td aria-label="Поверхность">Тротуарная плитка Braer "Ландхаус", Color Mix "Вечер" 80мм</td>
                    <td aria-label="Основа">Тротуарная плитка Braer "Ландхаус", Color Mix "Вечер" 80мм</td>
                    <td aria-label="Характеристика">Тротуарная плитка Braer "Ландхаус", Color Mix "Вечер" 80мм</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="inner-page__tab -tab-box">
          <p>test</p>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include '/src/components/footer.php'; ?>
