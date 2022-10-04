<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
  <title>Строительные материалы в Москве! Заказать доставку: +7 (495) 542-88-55</title>
  <link rel="stylesheet" type="text/css" href="/src/css/materialdesignicons.css">
  <link rel="stylesheet" type="text/css" href="/src/modules/slick-1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="/src/modules/slick-1.8.1/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="/src/modules/lightGallery/css/lightgallery.css">
  <link rel="stylesheet" type="text/css" href="/src/modules/lightGallery/css/lg-transitions.css">
  <link rel="stylesheet" type="text/css" href="/src/modules/lightGallery/css/lg-fb-comment-box.css">
  <link rel="stylesheet" type="text/css" href="/src/modules/ion.rangeSlider-2.3.1/css/ion.rangeSlider.css">
  <link rel="stylesheet" type="text/css" href="/src/css/style.css">
</head>
<body>
<header class="header">
  <div class="header__desktop">
    <div class="top-wrapper">
      <div class="container">
        <div class="top-wrapper__container">
          <div class="top-wrapper__menu">
            <ul class="-menu">
              <li>
                <a class="btn-svg-icon" href="/">
                  <?php include '/src/components/icons/map-pin.php'; ?>
                  <span>Москва</span>
                </a>
                <div class="top-wrapper__city">
                  <div class="top-wrapper__city-wrap">
                    <a href="/">Ставрополь</a>
                    <a href="/">Воронеж</a>
                  </div>
                </div>
              </li>
              <li>
                <a href="/">Обмен и возврат</a>
              </li>
              <li>
                <a href="/">Партнеры</a>
              </li>
              <li>
                <a href="/reviews.php">Отзывы</a>
              </li>
              <li>
                <a href="/FAQ.php">FAQ</a>
              </li>
            </ul>
          </div>
          <div class="top-wrapper__socials">
            <a class="btn-social" href="https://vk.com/creativceramica" title="ВКонтакте">
              <?php include '/src/components/icons/vk.php'; ?>
            </a>
            <a class="btn-social" href="https://www.instagram.com/mosblok_official/" title="Instagram">
              <?php include '/src/components/icons/ig.php'; ?>
            </a>
            <a class="btn-social" href="https://youtube.com/channel/UCV2qgwurEIAd4ySmqqVf64A" title="YouTube">
              <?php include '/src/components/icons/youtube-play.php'; ?>
            </a>
          </div>
        </div>
        <div class="top-wrapper__work-time">
          <?php include '/src/components/icons/clock.php'; ?>
          <span>9:00 - 21:00</span>
          <span>Без выходных</span>
        </div>
      </div>
    </div>
    <div class="header__container">
      <div class="container">
        <div class="header__logo">
          <a href="/" title="Мосблок">
            <img src="/src/img/02_logo-new.png">
          </a>
        </div>
        <div class="header__search -search">
          <form>
            <button type="submit" title="Найти">
              <?php include '/src/components/icons/search.php'; ?>
            </button>
            <input id="search-input" placeholder="Поиск по каталогу">
          </form>
        </div>
        <div class="header__phone">
          <div class="header__phone-code">
            <span>+7 (495)</span>
          </div>
          <div class="header__phone-numbers">
            <p>
              <a href="tel:+74955063344">506-33-44</a>
            </p>
            <p>
              <a href="tel:+74955428855">542-88-55</a>
            </p>
          </div>
        </div>
        <div class="header__shop-buttons">
          <div class="header__compare">
            <a class="btn-qnt" href="/compare.php" title="Сравнение товаров" data-count="0">
              <?php include '/src/components/icons/bar-chart.php'; ?>
              <span class="btn-qnt__counter">0</span>
            </a>
          </div>
          <div class="header__shopping-cart">
            <a href="/shop-cart.php" title="Корзина" data-count="0">
              <div class="header__shopping-cart-btn btn-qnt">
                  <?php include '/src/components/icons/shop-cart.php'; ?>
                  <span class="btn-qnt__counter">0</span>
              </div>
              <div class="header__shopping-cart-info">
                <p>Корзина:</p>
                <p>
                  <span>0</span>
                  <span>₽</span>
                </p>
              </div>
            </a>
            <div class="header__shopping-cart-list">
              <div class="header__shopping-cart-list-wrap">
                <?php include '/src/components/shop/shop-cart-item-header.php'; ?>
                <?php include '/src/components/shop/shop-cart-item-header.php'; ?>
                <div class="header__shopping-cart-summary">
                  <span>Итого:</span>
                  <span>20 000 руб.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include '/src/components/menu.php'; ?>
  </div>
  <?php include '/src/components/header-mobile.php'; ?>
</header>
