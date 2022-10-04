$(document).ready(function () {
  scrollTopButton();

  phoneHover();

  headerCatalog();

  fixedHeaderMenu();

  mobileHeaderMenu();

  if ($('select').length) {
    selectStyle();
  }

  if ($('.-light-gallery').length) {
    lightGallery();
  }

  if ($('.-tab-buttons').length) {
    tabBlocks();
  }

  if ($('.-input-tab-wrap').length) {
    inputRadioTabs();
  }

  if ($('.banner__main').length) {
    bannerSliders();
  }

  if ($('.news__container').length) {
    newsHomeSlider();
  }

  if ($('.-prod-slider').length) {
    productsSlider();
  }

  if ($('.shop__btn.-decrement').length || $('.shop__btn.-increment').length) {
    shopItemQuantity();
  }

  if ($('.manufacturer__slider').length) {
    manufacturerSlider();
  }

  if ($('.shop-catalog__filter-title').length) {
    shopCatalogFilter();
  }

  if ($('.shop-catalog__filter-price').length) {
    shopCatalogFilterPrice();
  }

  if ($('.items-on-page').length) {
    itemsOnPage();
  }

  if ($('.shop-product__slide-main-img').length || $('.shop-product__slide-gallery-img').length) {
    shopProductsSlider();
  }

  if ($('.shop-catalog').length || $('.shop-cart').length) {
    mobilePopup();
  }

  if ($('.inner-page__accordion-title').length) {
    accordion();
  }

  if ($('.-inner-page-slider').length) {
    innerPageSlider();
  }
});

$(window).scroll(function () {
  hideScrollTopButton();
});

$(window).resize($.throttle(headerResize, 300));
$(window).resize($.throttle(mobilePopupResize, 300));

//Scroll to top button//
//Кнопка скролла наверх
function scrollTopButton() {
  $('#scroll-to-top').on('click', function () {
    $('body, html').animate({scrollTop: 0}, 1000);
  });
}

//Появление кнопки скролла наверх при скролле страницы
function hideScrollTopButton() {
  const $button = $('#scroll-to-top');

  $(this).scrollTop() > 200 ? $button.addClass('-visible') : $button.removeClass('-visible');
}

//Light Gallery//
//Всплывающая галерея
function lightGallery() {
  $('.-light-gallery').lightGallery({
    selector: '.-light-gallery-item',
    zoom: true,
    download: false,
    share: false,
  });
}

//Header//
//Смена цвета телефона при наведении
function phoneHover() {
  const $number = $('.header__phone-numbers a');
  const $code = $('.header__phone-code span');

  $number.hover(function () {
    $code.addClass('-hovering');
  }, function () {
    $code.removeClass('-hovering');
  });
}

//Каталог (раскрытие, смена категорий)
function headerCatalog() {
  const $button = $('.header__catalog-btn');
  const $buttonIcon = $('.header__catalog-btn-icon');
  const $catalog = $('.header__catalog-list');
  const $overlay = $('.menu-overlay');
  const $category = $('.header__catalog-list .container > ul > li');
  let timeOutId = null;
  const categoryMouseEnterTimeout = function () {
    $category.removeClass('-active');
    $(this).addClass('-active');
  };

  $button.on('click', function () {
    if ($button.hasClass('-active')) {
      $button.removeClass('-active');
      $buttonIcon.removeClass('-close');
      $catalog.removeClass('-visible');
      $overlay.removeClass('-active');
    } else {
      $button.addClass('-active');
      $buttonIcon.addClass('-close');
      $catalog.addClass('-visible');
      $overlay.addClass('-active');
    }
  });

  $overlay.on('click', function () {
    $button.removeClass('-active');
    $buttonIcon.removeClass('-close');
    $catalog.removeClass('-visible');
    $overlay.removeClass('-active');
  });

  $category.mouseenter(function () {
    if (timeOutId) {
      clearTimeout(timeOutId);
    }
    timeOutId = setTimeout(categoryMouseEnterTimeout.bind(this), 500);
  });
}

//Фиксирование нижней части шапки
function fixedHeaderMenu() {
  const $topWrapper = $('.top-wrapper');
  const $headerContainer = $('.header__container');
  const $headerCatalog = $('.header__menu');

  $(window).scroll(function () {
    if ($(this).scrollTop() > $topWrapper.outerHeight() + $headerContainer.outerHeight()) {
      $headerCatalog.addClass('-fixed');
    } else {
      $headerCatalog.removeClass('-fixed');
    }
  });
}

//Мобильное меню
function mobileHeaderMenu() {
  const $body = $('body');
  const $headerMobileCnt = $('.header-mobile .container')
  const $btn = $('.header-mobile__menu-btn');
  const $btnIcon = $('.header-mobile__menu-btn-icon');
  const $menu = $('.header-mobile__menu');
  const $infoBtn = $('.header-mobile__info-btn');
  const $infoBlock = $('.header-mobile__info-block');
  const $cityBtn = $('.header-mobile__city-btn');
  const $cityList = $('.header-mobile__city-list');
  const $catalogBtn = $('.header-mobile__catalog-btn');
  const $catalogList = $('.header-mobile__catalog-list');
  const $catalogBtnBack = $('.header-mobile__catalog-back');
  const $catalogBlock = $('.header-mobile__catalog-block');
  const $catalogLink = $catalogBlock.find('.-parent').children('a');
  const $menuListLink = $('.header-mobile__menu-list').find('.-parent').children('a');
  let flagListLink = false;
  const time = 500;

  $btn.on('click', function () { //выпадение бургер меню
    if ($btn.hasClass('-active')) {
      $body.removeClass('-hidden');
      $headerMobileCnt.removeClass('-foreground');
      $btn.removeClass('-active');
      $btnIcon.removeClass('-close');
      $menu.removeClass('-visible');
      $infoBtn.removeClass('-active');
      $infoBlock.removeClass('-visible');
      $catalogBlock.removeClass('-visible');
    } else {
      $body.addClass('-hidden');
      $btn.addClass('-active');
      $btnIcon.addClass('-close');
      $menu.addClass('-visible');
    }
  });

  $infoBtn.on('click', function () { //кнопки меню с информацией
    if ($(this).hasClass('-active')) {
      $headerMobileCnt.removeClass('-foreground');
      $infoBtn.removeClass('-active');
      $infoBlock.removeClass('-visible');
    } else {
      $headerMobileCnt.addClass('-foreground');
      $infoBtn.removeClass('-active');
      $infoBlock.removeClass('-visible');
      $(this).addClass('-active');
      $(this).siblings($infoBlock).addClass('-visible');
    }
  });

  $(document).on('click', function (e) {
    if ($infoBlock.hasClass('-visible') && !$infoBtn.is(e.target) && !$infoBlock.is(e.target)
      && $infoBtn.has(e.target).length === 0 && $infoBlock.has(e.target).length === 0) {
      $headerMobileCnt.removeClass('-foreground');
      $infoBtn.removeClass('-active');
      $infoBlock.removeClass('-visible');
    }
  });

  $cityBtn.on('click', function () { //список городов
    if ($cityBtn.hasClass('-active')) {
      $cityBtn.removeClass('-active');
      $cityList.removeClass('-visible');
    } else {
      $cityBtn.addClass('-active');
      $cityList.addClass('-visible');
    }
  });

  $(document).on('click', function (e) {
    if ($cityList.hasClass('-visible') && !$cityBtn.is(e.target) && !$cityList.is(e.target) && $cityBtn.has(e.target).length === 0) {
      $cityBtn.removeClass('-active');
      $cityList.removeClass('-visible');
    }
  });

  $catalogBtn.on('click', function () { //раскрытие каталога
    $catalogList.addClass('-visible');
  });

  $catalogBtnBack.on('click', function () {
    $(this).parent().removeClass('-visible');
  });

  $catalogLink.on('click', function (e) {
    e.preventDefault();
    e.stopPropagation();

    $(this).siblings($catalogBlock).addClass('-visible');
  });

  $menuListLink.on('click', function (e) { //раскрытие основного меню
    e.preventDefault();
    e.stopPropagation();

    if (flagListLink) return;
    flagListLink = true;

    if (flagListLink) {
      $(this).parent().toggleClass('-selected');
      $(this).next().toggle(time, function () {
        flagListLink = false;
      });
    }
  });
}

//Закрытие выпадающих меню шапки при смене разрешения экрана
function headerResize() {
  if (document.documentElement.clientWidth <= 768) {
    $('.header__catalog-btn').removeClass('-active');
    $('.header__catalog-btn-icon').removeClass('-close');
    $('.header__catalog-list').removeClass('-visible');
    $('.menu-overlay').removeClass('-active');
  } else {
    $('body').removeClass('-hidden')
    $('.header-mobile .container').removeClass('-foreground');
    $('.header-mobile__menu-btn').removeClass('-active');
    $('.header-mobile__menu-btn-icon').removeClass('-close');
    $('.header-mobile__menu').removeClass('-visible');
    $('.header-mobile__info-btn').removeClass('-active');
    $('.header-mobile__info-block').removeClass('-visible');
  }
}

//Tabs//
//Вкладки
function tabBlocks() {
  $('.-tab-btn').on('click', function () {
    let $parent = $(this).closest('.-tab-buttons');
    let $parentBlock = $parent.nextAll('.-tab-blocks').first();
    let index = $(this).index();

    $parent.find('.-tab-btn').removeClass('-active');
    $(this).addClass('-active');
    $parentBlock.find('.-tab-box').removeClass('-active');
    $parentBlock.find('.-tab-box:eq(' + index + ')').addClass('-active');
  });
}

//Радио вкладки (корзина)
function inputRadioTabs() {
  $('.-input-tab-wrap input[type="radio"]').on('click', function () {
    let $parent = $(this).closest('.-input-tab-wrap');
    let index = $(this).attr('data-input');

    $parent.find('.-input-tab').removeClass('-active');
    $parent.find('.-input-tab[data-tab="' + index + '"]').addClass('-active');
  });
}

//Pages//
//Слайдер товаров
function productsSlider() {
  $('.-prod-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: false,
    //autoplay: true,
    //autoplaySpeed: 5000,
    touchThreshold: 25,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 1441,
        settings: {
          arrows: false,
        }
      },
      {
        breakpoint: 1281,
        settings: {
          slidesToShow: 3,
          arrows: false,
        }
      },
      {
        breakpoint: 901,
        settings: {
          slidesToShow: 2,
          arrows: false,
        }
      },
      {
        breakpoint: 551,
        settings: {
          slidesToShow: 1,
          arrows: false,
        }
      },
    ],
  });
}

//Увеличение/уменьшение количества товаров
function shopItemQuantity() {
  $('.shop__btn.-decrement').on('click', function () {
    let $input = $(this).parent().find('input');
    let count = parseInt($input.val()) - 1;

    count = count < 1 ? 1 : count;
    $input.val(count);
  });

  $('.shop__btn.-increment').on('click', function () {
    let $input = $(this).parent().find('input');

    $input.val(parseInt($input.val()) + 1);
  });
}

//Слайдер производителей
function manufacturerSlider() {
  $('.manufacturer__slider').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    focusOnSelect: true,
    touchThreshold: 25,
    responsive: [
      {
        breakpoint: 1441,
        settings: {
          arrows: false,
        }
      },
      {
        breakpoint: 1201,
        settings: {
          slidesToShow: 5,
          arrows: false,
        }
      },
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 4,
          arrows: false,
        }
      },
      {
        breakpoint: 801,
        settings: {
          slidesToShow: 3,
          arrows: false,
        }
      },
      {
        breakpoint: 551,
        settings: {
          slidesToShow: 2,
          arrows: false,
        }
      },
      {
        breakpoint: 381,
        settings: {
          slidesToShow: 1,
          arrows: false,
        }
      },
    ],
  });
}

//Слайдер изображений на внутренних страницах
function innerPageSlider() {
  $('.-inner-page-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 5000,
    focusOnSelect: true,
    touchThreshold: 25,
  });
}

function selectStyle() {
  $('select').on('change', function () {
    $(this).css('color', '#241F1F');
  });
}

//Количество элементов на странице
function itemsOnPage() {
  const $button = $('.items-on-page > button');
  const $block = $('.items-on-page > div');
  const $quantity = $('.items-on-page > div > ul > li');

  $button.on('click', function () {
    if ($button.hasClass('-active')) {
      $button.removeClass('-active');
      $block.removeClass('-visible');
    } else {
      $button.addClass('-active');
      $block.addClass('-visible');
    }
  });

  $quantity.on('click', function () {
    $quantity.removeClass('-selected');
    $(this).addClass('-selected');
    $button.removeClass('-active');
    $block.removeClass('-visible');
  });

  $(document).on('click', function (e) {
    if ($block.hasClass('-visible') && !$button.is(e.target) && !$block.is(e.target) && $button.has(e.target).length === 0) {
      $button.removeClass('-active');
      $block.removeClass('-visible');
    }
  });
}

//Home//
//Слайдер секции banner
function bannerSliders() {
  const $bannerMain = $('.banner__main');
  const $bannerAdditional = $('.banner__additional');

  let optionsBannerMain = {
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
    fade: true,
    responsive: [
      {
        breakpoint: 1025,
        settings: {
          dots: true,
          fade: false,
          centerMode: true,
        }
      },
    ],
  }

  if ($('.banner__additional-item').length > 2) {
    $bannerAdditional.slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      asNavFor: '.banner__main',
      vertical: true,
      verticalSwiping: true,
      arrows: false,
      dots: true,
      touchThreshold: 25,
    });
    /*.on('setPosition', function (event, slick) {
      slick.$slides.css('height', slick.$slides.closest('.container').find('.banner__main .banner__item').outerHeight() / 2 + 2 % +'px');
    })*/

    optionsBannerMain.asNavFor = '.banner__additional';
  }

  $bannerMain.slick(optionsBannerMain);

  $bannerAdditional.on('click', '.banner__additional-item', function () {
    let slideNo = $(this).attr('data-add-slide');
    $bannerMain.slick('slickGoTo', slideNo);
  });
}

//Новостной слайдер
function newsHomeSlider() {
  $('.news__container').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    focusOnSelect: true,
    touchThreshold: 25,
    responsive: [
      {
        breakpoint: 1441,
        settings: {
          arrows: false,
        }
      },
      {
        breakpoint: 901,
        settings: {
          slidesToShow: 2,
          arrows: false,
        }
      },
      {
        breakpoint: 551,
        settings: {
          slidesToShow: 1,
          arrows: false,
        }
      },
    ],
  });
}

//Shop catalog//
//Раскрытие фильтра
function shopCatalogFilter() {
  $('.shop-catalog__filter-title').on('click', function () {
    if ($(this).hasClass('-active')) {
      $(this).removeClass('-active');
      $(this).siblings('.shop-catalog__filter-form').removeClass('-visible').slideUp(500);
    } else {
      $(this).addClass('-active');
      $(this).siblings('.shop-catalog__filter-form').addClass('-visible').slideDown(500);
    }
  });
}

//Диапазон цен
function shopCatalogFilterPrice() {
  $('.shop-catalog__filter-price').ionRangeSlider({
    type: 'double',
    skin: 'round',
    grid: true,
    min: 0,
    max: 1000,
    from: 200,
    to: 800,
    onStart: function (data) {
      $('#shop-catalog__filter-price-from').val(data.from);
      $('#shop-catalog__filter-price-to').val(data.to);
    },
    onChange: function (data) {
      $('#shop-catalog__filter-price-from').val(data.from);
      $('#shop-catalog__filter-price-to').val(data.to);
    },
  });

  $('.shop-catalog__filter-price-input').change(function () {
    let inputId = $(this).attr('id');
    let inputValue = $(this).val();
    let my_range = $('.shop-catalog__filter-price').data('ionRangeSlider');

    if (inputId === 'shop-catalog__filter-price-from') {
      my_range.update({
        from: inputValue
      });
    } else {
      my_range.update({
        to: inputValue
      });
    }
  });
}

//Shop product//
//Слайдеры на странице товара
function shopProductsSlider() {
  $('.shop-product__slide-main-img').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.shop-product__slide-gallery-img',
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    touchThreshold: 25,
  });

  $('.shop-product__slide-gallery-img').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.shop-product__slide-main-img',
    autoplay: true,
    autoplaySpeed: 5000,
    touchThreshold: 25,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 3,
        }
      },
    ],
  });
}

//Popup меню в мобильной версии для фильтра на странице каталога и для товаров на странице корзины
function mobilePopup() {
  const $body = $('body');
  const $mobilePopupWrap = $('.-mobile-popup-wrap');
  const $mobilePopup = $('.-mobile-popup');
  const $mobilePopupOpenBtn = $('.-mobile-popup-open');
  const $mobilePopupClsBtn = $('.-mobile-popup-close');

  $mobilePopupOpenBtn.on('click', function() {
    if ($mobilePopupOpenBtn.hasClass('-active')) {
      $body.removeClass('-popup');
      $mobilePopupOpenBtn.removeClass('-active');
      $mobilePopupWrap.removeClass('-visible');
    } else {
      $body.addClass('-popup');
      $mobilePopupOpenBtn.addClass('-active');
      $mobilePopupWrap.addClass('-visible');
    }
  });

  $mobilePopupClsBtn.on('click', function() {
    $body.removeClass('-popup');
    $mobilePopupOpenBtn.removeClass('-active');
    $mobilePopupWrap.removeClass('-visible');
  });

  $mobilePopupWrap.on('click', function(e) {
    if ($mobilePopupWrap.hasClass('-visible') && !$mobilePopup.is(e.target) && $mobilePopup.has(e.target).length === 0) {
      $body.removeClass('-popup');
      $mobilePopupOpenBtn.removeClass('-active');
      $mobilePopupWrap.removeClass('-visible');
    }
  });
}

function mobilePopupResize() {
  if (document.documentElement.clientWidth > 1200) {
    $('body').removeClass('-popup');
    $('.-mobile-popup-open').removeClass('-active');
    $('.-mobile-popup-wrap').removeClass('-visible');
  }
}

//Accordion//
//Раскрывающийся блок
function accordion() {
  let flag = false;
  const time = 500;
  const $info = '.inner-page__accordion-info';

  $('.inner-page__accordion-title').on('click', function () {
    if (flag) return;
    flag = true;
    if ($(this).parent().hasClass('-active')) {
      $(this).parent().removeClass('-active');
      $(this).siblings($info).slideUp(time, function () {
        flag = false;
      });
    } else {
      $(this).parent().addClass('-active');
      $(this).siblings($info).slideDown(time, function () {
        flag = false;
      });
    }
  });
}
