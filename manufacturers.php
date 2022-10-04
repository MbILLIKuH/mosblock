<?php include '/src/components/header.php'; ?>
<div class="global">
  <section class="inner-page">
    <div class="container">
      <div class="breadcrumb">
        <ul class="-menu">
          <li>
            <a href="/">Главная</a>
          </li>
          <li>Производители</li>
        </ul>
      </div>
      <div class="inner-page__title">
        <h1>Производители</h1>
      </div>
      <div class="inner-page__content">
        <div class="inner-page__list -manufacturers">
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
          <?php include '/src/components/manufacturer/manufacturer-item.php'; ?>
          <?php include '/src/components/manufacturer/manufacturer-item.php'; ?>
        </div>
        <button class="inner-page__more-btn more-btn">Показать еще</button>
        <div class="inner-page__pagination-wrap pagination-block">
          <ul class="inner-page__pagination -pgn">
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
          <div class="inner-page__items-on-page items-on-page">
            <span>Элементов на странице</span>
            <button class="inner-page__items-on-page-btn">
              <span>12</span>
              <?php include '/src/components/icons/chevron-down.php'; ?>
            </button>
            <div class="inner-page__items-on-page-list">
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
  </section>
</div>
<?php include '/src/components/footer.php'; ?>
