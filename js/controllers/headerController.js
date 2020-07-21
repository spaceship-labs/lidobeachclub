app.controller("scrollCTL", function ($scope,$location) {

    var ventana_ancho = $(window).width();
    $scope.$watch(function () {
      return location.hash
    }, function (value) {
      var id = value.replace('#/','')
      $scope.scrollTo(id);
    });
    $scope.scrollTo = function(target){
      if (target) {
        setTimeout(
            function(){
                console.log($('#' + target).offset());
                $('html, body').animate({
                    scrollTop: $('#' + target).offset().top -110
                }, 600);
                if (ventana_ancho < 800 ) {
                  /*console.log('ancho menor a 800'); */
                  $('.links').css('left', '-100%'); 
                  $('.cerrar-menu').css('left', '-100%');
                }
            },
            300           
        );
      }
    }


    $(".click-time").click(function() {
        $(".click-time").removeClass('change');
        $(this).addClass('change');
    });

});