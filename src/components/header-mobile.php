<div class="header-mobile">
  <div class="container">
    <div class="header-mobile__info">
      <div class="header-mobile__menu-btn-wrap">
        <button class="header-mobile__menu-btn btn-header-mobile" title="Меню">
          <span class="header-mobile__menu-btn-icon"></span>
        </button>
      </div>
      <div class="header-mobile__logo">
        <a href="/" title="Мосблок">
          <img src="/src/img/02_logo-new.png">
        </a>
      </div>
    </div>
    <div class="header-mobile__buttons">
      <div class="header-mobile__button-wrap">
        <button class="header-mobile__info-btn btn-header-mobile" title="Телефон">
          <?php include '/src/components/icons/phone.php'; ?>
        </button>
        <div class="header-mobile__info-block -phone">
          <p>
            <a href="tel:+74955063344"><span>+7(495)</span> 506-33-44</a>
          </p>
          <p>
            <a href="tel:+74955428855"><span>+7(495)</span> 542-88-55</a>
          </p>
        </div>
      </div>
      <div class="header-mobile__button-wrap">
        <button class="header-mobile__info-btn btn-header-mobile" title="Поиск">
          <?php include '/src/components/icons/search.php'; ?>
        </button>
        <div class="header-mobile__info-block -search">
          <form>
            <button type="submit" title="Найти">
              <?php include '/src/components/icons/search.php'; ?>
            </button>
            <input id="search-input-mobile" placeholder="Поиск по каталогу">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="header-mobile__menu">
    <div class="header-mobile__menu-inner">
      <div class="header-mobile__menu-top">
        <div class="header-mobile__city">
          <button class="header-mobile__city-btn">
            <?php include '/src/components/icons/map-pin.php'; ?>
            <span>Москва</span>
          </button>
          <div class="header-mobile__city-list">
            <a href="/">Ставрополь</a>
            <a href="/">Воронеж</a>
          </div>
        </div>
        <div class="header-mobile__catalog-btn-wrap">
          <button class="header-mobile__catalog-btn">
            <?php include '/src/components/icons/menu.php'; ?>
            <span>Каталог</span>
          </button>
        </div>
        <div class="header-mobile__catalog-list header-mobile__catalog-block">
          <button class="header-mobile__catalog-back">Каталог</button>
          <ul class="-menu">
            <li class="-parent">
              <a class="-img" href="/shop-catalog.php">Кирпич Строительные блоки Строительные блоки</a>
              <div class="header-mobile__catalog-block">
                <button class="header-mobile__catalog-back">Кирпич Строительные блоки Строительные блоки</button>
                <ul>
                  <li>
                    <a href="/">Строительные блоки Строительные блоки Строительные блоки Строительные блоки<span>150</span></a>
                  </li>
                  <li>
                    <a href="/">Строительные<span>150</span></a>
                  </li>
                  <li>
                    <a href="/">Строительные блоки<span>150</span></a>
                  </li>
                  <li>
                    <a href="/">Строительные<span>150</span></a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="-parent">
              <a href="/">Строительные блоки</a>
              <div class="header-mobile__catalog-block">
                <button class="header-mobile__catalog-back">Кирпич Строительные блоки Строительные блоки</button>
                <ul>
                  <li>
                    <a href="/">Клинкерная плитка<span>50</span></a>
                  </li>
                  <li>
                    <a href="/">Клинкерная плитка<span>50</span></a>
                  </li>
                  <li>
                    <a href="/">Клинкерная плитка<span>50</span></a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="/">Клинкерная плитка</a>
            </li>
            <li>
              <a href="/">Тротуарная плитка</a>
            </li>
            <li>
              <a href="/">Клинкерная брусчатка</a>
            </li>
            <li>
              <a href="/">Дренажные системы</a>
            </li>
            <li>
              <a href="/">Кольца колодезные. ЖБИ</a>
            </li>
            <li>
              <a href="/">Сухие строительные смеси</a>
            </li>
            <li>
              <a href="/">Керамогранит</a>
            </li>
            <li>
              <a href="/">ЖБИ</a>
            </li>
            <li>
              <a href="/">Облицовочный камень</a>
            </li>
            <li>
              <a href="/">Напольные покрытия</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="header-mobile__menu-bottom">
        <div class="header-mobile__menu-list">
          <ul class="-menu">
            <li>
              <a href="/delivery.php">Доставка и оплата</a>
            </li>
            <li class="-parent">
              <a href="/">
                Услуги
                <?php include '/src/components/icons/menu-down.php'; ?>
              </a>
              <ul>
                <li>
                  <a href="/">Услуги строительства</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="/news.php">Статьи</a>
            </li>
            <li class="-parent">
              <a href="/">
                О компании
                <?php include '/src/components/icons/menu-down.php'; ?>
              </a>
              <ul>
                <li>
                  <a href="/">О нас</a>
                </li>
                <li>
                  <a href="/">Преимущества</a>
                </li>
                <li>
                  <a href="/">Комплектация строительных объектов</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="/contacts.php">Контакты</a>
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
        <div class="header-mobile__contacts">
          <div class="header-mobile__phone">
            <p>
              <a href="tel:+74955063344"><span>+7(495)</span> 506-33-44</a>
            </p>
            <p>
              <a href="tel:+74955428855"><span>+7(495)</span> 542-88-55</a>
            </p>
          </div>
          <div class="header-mobile__work-time">
            <?php include '/src/components/icons/clock.php'; ?>
            <span>9:00 - 21:00</span>
            <span>Без выходных</span>
          </div>
          <div class="header-mobile__socials">
            <a class="btn-social" href="https://vk.com/creativceramica" title="ВКонтакте">
              <?php include '/src/components/icons/vk.php'; ?>
            </a>
            <a class="btn-social -instagram" href="https://www.instagram.com/mosblok_official/" title="Instagram">
              <?php include '/src/components/icons/ig.php'; ?>
            </a>
            <a class="btn-social" href="https://youtube.com/channel/UCV2qgwurEIAd4ySmqqVf64A" title="YouTube">
              <?php include '/src/components/icons/youtube-play.php'; ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
