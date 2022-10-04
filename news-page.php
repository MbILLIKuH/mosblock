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
            <a href="/news.php">Новости и статьи</a>
          </li>
          <li>Клинкерный кирпич от Kerma!</li>
        </ul>
      </div>
      <div class="article-page__title">
        <h1>Клинкерный кирпич от Kerma!</h1>
      </div>
      <div class="article-page__date">
        <span>10 июля 2021</span>
      </div>
      <div class="article-page__info">
        <div class="-mrg-block">
          <div class="-mrg-inner">
            <img src="/src/img/test-slide.png">
          </div>
        </div>
        <p>Завод ЗАО ЗСМ «Эталон», входящий в группу компаний «Керма», представляет новую линейку кирпича «Kerma Premium
          klinker».
        </p>
        <p>Расскажем о его особенностях:</p>
        <p>Клинкерный кирпич получают путем обжига отборных тугоплавких глин при температуре от +1000 ℃ до +1600 ℃ до
          полного спекания материала.</p>
        <p>Такая технология изготовления придает клинкеру множество уникальных свойств. Измельченная однородная глина,
          высокая температура обработки, вакуумное прессование дают возможность получения материала, обладающего
          значительной плотностью, без пустот и остеклования.</p>
        <div class="-mrg-block">
          <div class="-mrg-inner">
            <img src="/src/img/test-image.png">
            <p>Подпись к картинке</p>
          </div>
        </div>
        <h2>К неоспоримым достоинствам клинкерного кирпича можно отнести:</h2>
        <ul>
          <li>Высокую прочность – выдерживает нагрузки выше 40 МПа;</li>
          <li>Однородность структуры по всему объему</li>
          <li>Низкую степень водопоглощения – 2-6 %;</li>
          <li>Стойкость к химически агрессивным средам;</li>
          <li>Жаропрочность;</li>
          <li>Устойчивость к значительным колебаниям температуры;</li>
          <li>Разнообразие фактур поверхности;</li>
          <li>Широкую палитру цветов и оттенков;</li>
          <li>Длительный срок эксплуатации без потери технических характеристик.</li>
        </ul>
        <p class="-medium">Клинкер отличается привлекательным внешним видом. Это делает его востребованным для облицовки фасадов,
          цоколей, ограждающих конструкций. Кирпич выпускается в натуральном цвете от красно-терракотового до
          темно-коричневого. Но с применением специальных пигментов цветовая гамма значительно расширяется.</p>
      </div>
    </div>
  </section>
  <section class="article-page -section-default">
    <div class="container">
      <div class="article-page__title">
        <h2>Другие статьи</h2>
      </div>
      <div class="article-page__list">
        <?php include '/src/components/news/news-item.php'; ?>
        <?php include '/src/components/news/news-item.php'; ?>
        <?php include '/src/components/news/news-item.php'; ?>
      </div>
    </div>
  </section>
</div>
<?php include '/src/components/footer.php'; ?>
