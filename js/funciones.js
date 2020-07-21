function seccion_location() {

  window.onscroll = function () { scrollFunction() };

  function scrollFunction() {
    // console.log(document.documentElement.scrollTop);
    if (document.documentElement.scrollTop < 200) {
      $('.header').removeClass("change");
    } else {
      $('.header').addClass("change");
    }

    if (document.documentElement.scrollTop > 950 && document.documentElement.scrollTop < 960) {

      $('.lido-textura').css('bottom', '-165px');

    }

    if (document.documentElement.scrollTop > 960 && document.documentElement.scrollTop < 970) {

      $('.lido-textura').css('bottom', '-135px');

    }

    if (document.documentElement.scrollTop > 970 && document.documentElement.scrollTop < 980) {

      $('.lido-textura').css('bottom', '-105px');

    }

    if (document.documentElement.scrollTop > 980 && document.documentElement.scrollTop < 990) {

      $('.lido-textura').css('bottom', '-75px');

    }

    if (document.documentElement.scrollTop > 990) {

      $('.lido-textura').css('bottom', '-50px');

    }


  }

}

function cuadros() {
  setTimeout(function () {
    var cuadro_cont = parseInt($('.image').css('width'));
    // console.log(cuadro_cont);
    $('.image').css('height', cuadro_cont);
  }, 500);
}



function menu() {

  $(".open-menu").click(function (e) {
    // console.log('menu')
    $('.links').css('left', '0');
    $('.cerrar-menu').css('left', '0');
  })

  $(".cerrar-menu").click(function (e) {
    $('.links').css('left', '-100%');
    $('.cerrar-menu').css('left', '-100%');
  })

}

function home() {

  var owl = $(".slider-home");

  owl.owlCarousel({

    autoPlay: true, //Set AutoPlay to 3 seconds
    items: 4, //10 items above 1000px browser width
    itemsTablet: [600, 2], //2 items between 600 and 0
    itemsMobile: [400, 2], // itemsMobile disabled - inherit from itemsTablet option
    pagination: false

  });

}

function reviews() {

  var owl = $(".slide-reviews");

  owl.owlCarousel({

    autoPlay: true, //Set AutoPlay to 3 seconds
    singleItem: true,
    pagination: false

  });


}



function eventos() {

  var owl = $(".slider-eventos");

  owl.owlCarousel({

    autoPlay: true, //Set AutoPlay to 3 seconds
    items: 3, //10 items above 1000px browser width
    itemsTablet: [600, 2], //2 items between 600 and 0
    itemsMobile: [400, 1], // itemsMobile disabled - inherit from itemsTablet option
    pagination: false

  });

}

function masajes() {

  var owl = $(".slider-masajes");

  owl.owlCarousel({

    autoPlay: true, //Set AutoPlay to 3 seconds
    items: 3, //10 items above 1000px browser width
    itemsTablet: [600, 1], //2 items between 600 and 0
    itemsMobile: [400, 1], // itemsMobile disabled - inherit from itemsTablet option
    pagination: false

  });

  $(".next").click(function () {
    owl.trigger('owl.next');
  })
  $(".prev").click(function () {
    owl.trigger('owl.prev');
  })

}



$(document).ready(function () {

  menu();
  home();
  cuadros();
  eventos();
  masajes();
  seccion_location();
  reviews()


});

$(window).resize(function () {

  cuadros();

});

app.controller('instagramCTRL', ['$scope', 'instagramFactory', function ($scope, instagramFactory) {
  $scope.images = [];
  instagramFactory.getMediaFromUserById({
    userId: "552213517",
    access_token: "IGQVJVcmpQdGRSUlFDODhkSmgxOEFpWDlkTDA4ZAU9HYTVaYXNrN1p2OGdYMXlCRTFGZAl9QX2hhenducTI5VVlWVlVNU1ZA6VXdxVGJqOTJCVC1UNjlvWUkySWJJMmd1dlkybUdJVXdueXJwemQ3UW5YMwZDZD",
  }).then(function (_data) {
    // console.log(_data)
    $scope.images = _data.data.data;
  }).catch(function (_data) {
    //on error
  });

}]);