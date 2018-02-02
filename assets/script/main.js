'use strict';

function bgControl() {
  $('.arrow.prev').on('click', function () {
    $('.gallery').vegas('previous');
  });
  $('.arrow.next').on('click', function () {
    $('.gallery').vegas('next');
  });
}
bgControl();

// toggle active
function active(obj) {
  $(obj).on('click', function () {
    $(this).toggleClass('active');
    hamberger();
  });
}
active('.hamberger');

function hamberger() {
  if ($('.hamberger').hasClass('active')) {
    $('.header').slideDown();
  } else {
    $('.header').slideUp();
  }
}

$('.header .nav').find('li:last-child a').addClass('en');

// owner tabs
$('.owner-nav li').on('click', function (e) {
  e.preventDefault();
  $(this).addClass('active').siblings().removeClass('active');
  var tab = $('.form').find('.tab.active');
  $('.tab').addClass('active');
  tab.removeClass('active');
});

// inview
function isScrolledIntoView(elem) {
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();
  var elemTop = $(elem).offset().top;
  var elemBottom = elemTop + $(elem).height();
  return elemBottom <= docViewBottom && elemTop >= docViewTop;
}

$(window).scroll(function () {
  $('.text-wrap').each(function () {
    if (isScrolledIntoView(this) === true) {
      $(this).addClass('animated fadeInUp');
    } else {
      $(this).removeClass('fadeInUp');
    }
  });
  $('.image , .section-concept .box img').each(function () {
    if (isScrolledIntoView(this) === true) {
      $(this).addClass('color');
    } else {
      $(this).removeClass('color');
    }
  });
});
$("img").on("contextmenu", function () {
  return false;
});