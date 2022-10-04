<?php include '/src/components/header.php'; ?>
<div class="global">
  <section class="inner-page -image-header">
    <div class="inner-page__header" style="background-image: url('/src/img/test-banner.png')">
      <div class="container">
        <div class="breadcrumb">
          <ul class="-menu-mrg">
            <li>
              <a href="/">Главная</a>
            </li>
            <li>Начальная страница</li>
          </ul>
        </div>
        <div class="inner-page__title">
          <h1>Начальная страница</h1>
        </div>
      </div>
    </div>
    <div class="inner-page__info">
      <div class="container">
        <p>По своей сути рыбатекст является альтернативой традиционному <a href="/">lorem ipsum</a>, который вызывает у
          некторых людей
          недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит
          любой макет непонятным смыслом и придаст неповторимый колорит советских времен.</p>
        <h2>H2 test</h2>
        <ul>
          <li>li test</li>
          <li>li test</li>
          <li>li test</li>
        </ul>
        <h3>H3 test</h3>
        <ol>
          <li>ol test</li>
          <li>ol test</li>
          <li>ol test</li>
        </ol>
        <h4>H4 test</h4>
        <p class="-semibold">По своей сути рыбатекст является альтернативой традиционному <a href="/">lorem ipsum</a>,
          который вызывает у некторых людей
          недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит
          любой макет непонятным смыслом и придаст неповторимый колорит советских времен.</p>
        <h5>H5 test</h5>
        <h6>H6 test</h6>
        <blockquote>
          <h3>Льюис Кэрролл. Приключения Алисы в Стране чудес</h3>
          <p>От перца, верно, начинают всем перечить... От уксуса - куксятся, от горчицы - огорчаются, от лука -
            лукавят, от вина - винятся, а от сдобы - добреют. Как жалко, что никто об этом не знает... Всё было бы так
            просто! Ели бы сдобу и добрели!</p>
        </blockquote>
        <div class="-mrg-block">
          <div class="-mrg-inner">
            <img src="/src/img/test-image_1.png">
            <p>Подпись под фото</p>
          </div>
        </div>
        <div class="-mrg-block -light-gallery">
          <a class="-mrg-inner -light-gallery-item" href="/src/img/test-image_1.png" title="Подпись под фото">
            <img src="/src/img/test-image_1.png">
            <p>Подпись под фото</p>
          </a>
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
        <div class="-mrg-block">
          <div class="-mrg-inner -video">
            <div class="inner-page__video">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/IOcDWK5yh-k"
                      title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen></iframe>
            </div>
            <p>Подпись под видео</p>
          </div>
        </div>
      </div>
    </div>
    <div class="inner-page__info -slider">
      <div class="container">
        <h3>Слайдер с фото</h3>
      </div>
      <div class="-mrg-block -inner-page-slider">
        <div class="-mrg-inner -slider">
          <div class="-mrg-img" style="background-image: url('/src/img/test-image_1.png')"></div>
          <p>Подпись под фото</p>
        </div>
        <div class="-mrg-inner -slider">
          <div class="-mrg-img" style="background-image: url('/src/img/test-image_2.png')"></div>
        </div>
        <div class="-mrg-inner -slider">
          <div class="-mrg-img" style="background-image: url('/src/img/test-image_3.png')"></div>
        </div>
      </div>
    </div>
    <div class="inner-page__info -slider">
      <div class="container">
        <h3>Слайдер с фото</h3>
      </div>
      <div class="-mrg-block -inner-page-slider -light-gallery">
        <a class="-mrg-inner -slider -light-gallery-item" href="/src/img/test-image_1.png" title="Подпись под фото">
          <div class="-mrg-img" style="background-image: url('/src/img/test-image_1.png')"></div>
          <p>Подпись под фото</p>
        </a>
        <a class="-mrg-inner -slider -light-gallery-item" href="/src/img/test-image_2.png">
          <div class="-mrg-img" style="background-image: url('/src/img/test-image_2.png')"></div>
        </a>
        <a class="-mrg-inner -slider -light-gallery-item" href="/src/img/test-image_3.png">
          <div class="-mrg-img" style="background-image: url('/src/img/test-image_3.png')"></div>
        </a>
      </div>
    </div>
    <div class="inner-page__info">
      <div class="container">
        <div class="inner-page__form">
          <form>
            <h3>Заголовок формы</h3>
            <p class="inner-page__form-subtitle">Подзаголовок формы</p>
            <div class="-w-6 -icon -icon-person -icon-info">
              <input type="text" title="test-info" name="name" placeholder="Ваше имя">
            </div>
            <div class="-w-6 -icon -icon-phone -icon-info">
              <input type="text" title="test-info" name="phone" placeholder="Контактный телефон">
            </div>
            <div class="-w-6 -icon -icon-email">
              <input type="text" name="e-mail" placeholder="Контактный e-mail">
            </div>
            <div class="-w-6 -icon -icon-arrow">
              <select name="region">
                <option value="" hidden disabled selected>Регион</option>
                <option value="mosk-obl">Московская область</option>
                <option value="omsk-obl">Омская область</option>
              </select>
            </div>
            <div class="-dot">
              <p>Radio buttons:</p>
              <label>
                <input type="radio" name="radio1" value="radio1" checked>
                <span>Точка 1</span>
              </label>
              <label>
                <input type="radio" name="radio1" value="radio2">
                <span>Точка 2</span>
              </label>
            </div>
            <div class="-dot">
              <p>Checkbox buttons:</p>
              <label>
                <input type="checkbox" name="checkbox1" value="checkbox1">
                <span>Чекбокс 1</span>
              </label>
              <label>
                <input type="checkbox" name="checkbox2" value="checkbox2">
                <span>Чекбокс 2</span>
              </label>
              <label>
                <input type="checkbox" name="checkbox3" value="checkbox3">
                <span>Чекбокс 3</span>
              </label>
            </div>
            <input type="submit" value="Текст на кнопке">
            <div class="-switcher-ios">
              <label>
                <input type="checkbox">
                <span></span>
              </label>
              <p>Вы даёте Согласие на обработку Ваших персональных данных и принимаете <a href="/">Пользовательское соглашение</a>.</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include '/src/components/footer.php'; ?>
