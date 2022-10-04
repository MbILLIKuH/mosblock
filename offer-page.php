<?php include '/src/components/header.php'; ?>
<div class="global">
  <section class="article-page -section-default">
    <div class="container -narrow">
      <div class="breadcrumb">
        <ul class="-menu-mrg">
          <li>
            <a href="/">Главная</a>
          </li>
          <li>
            <a href="/offers.php">Акции</a>
          </li>
          <li>Название акции</li>
        </ul>
      </div>
      <div class="article-page__title">
        <h1>Название акции</h1>
      </div>
      <div class="article-page__date">
        <span>Действует до 10 июля 2021</span>
      </div>
      <div class="article-page__info">
        <img src="/src/img/test-slide.png">
        <p>Завод ЗАО ЗСМ «Эталон», входящий в группу компаний «Керма», представляет новую линейку кирпича «Kerma Premium
          klinker».
        </p>
        <p>Расскажем о его особенностях:</p>
        <p>Клинкерный кирпич получают путем обжига отборных тугоплавких глин при температуре от +1000 ℃ до +1600 ℃ до
          полного спекания материала.</p>
        <p>Такая технология изготовления придает клинкеру множество уникальных свойств. Измельченная однородная глина,
          высокая температура обработки, вакуумное прессование дают возможность получения материала, обладающего
          значительной плотностью, без пустот и остеклования.</p>
      </div>
    </div>
  </section>
  <section class="article-page -section-btm-pad">
    <div class="container">
      <div class="article-page__title">
        <h2>Товары, участвующие в акции</h2>
      </div>
      <div class="article-page__slider -prod-slider">
        <?php include '/src/components/shop/shop-item.php'; ?>
        <?php include '/src/components/shop/shop-item.php'; ?>
        <?php include '/src/components/shop/shop-item.php'; ?>
        <?php include '/src/components/shop/shop-item.php'; ?>
        <?php include '/src/components/shop/shop-item.php'; ?>
        <?php include '/src/components/shop/shop-item.php'; ?>
      </div>
    </div>
  </section>
  <section class="article-page -section-default">
    <div class="container">
      <div class="article-page__title">
        <h2>Другие акции</h2>
      </div>
      <div class="article-page__list">
        <?php include '/src/components/offers/offer-item.php'; ?>
        <?php include '/src/components/offers/offer-item.php'; ?>
        <?php include '/src/components/offers/offer-item.php'; ?>
      </div>
    </div>
  </section>
</div>
<?php include '/src/components/footer.php'; ?>
