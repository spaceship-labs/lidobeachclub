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
  // cuadros();
  eventos();
  masajes();
  seccion_location();
  reviews()
});

// $(window).resize(function () {
//   cuadros();
// });

app.controller('instagramCTRL', ['$scope', 'instagramFactory', '$http', function ($scope, instagramFactory, $http) {
  let token = 'IGQVJVOVJmd2djYzlCZA3pyOUR4SlF3Mm4tQUFiWXM2VE5qaUxaOUdJemdGUnZA2RDlRZAzl5ZAlA3cDZAHekNlNXhDRVJSRzFnWWlJbFk5UlE3ZAFgxTExNVE5pSDl4a0Q2clBtTzNBbjN3';
  let counter = 0;
  const userId = '17841400645518628';
  const $url = 'https://graph.instagram.com/'
  $scope.images = [];

  function getMedia() {
    $http
      .get($url + userId + '/media?fields=media_url,thumbnail_url,permalink&access_token=' + token)
      .then(
        function successCallback(res) {
          // console.log('INSTA', res)
          $scope.images = res.data.data || [];
        },
        function errorCallback() {
          if (counter < 5) refreshToken();
        }
      );
  }
  getMedia();
  function refreshToken() {
    conunter += 1;
    $http
      .get($url + userId + '/refresh_access_token?grant_type=ig_refresh_token&access_token=' + token)
      .then(
        function successCallback(res) {
          token = res.data.access_token;
          getMedia();
        }
      );
  }

}]);