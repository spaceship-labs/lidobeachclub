app.controller('SendCtrl', function($scope,$timeout, $attrs) {

  $scope.show = function(){

    $('.send-mail').addClass('active');
    $timeout( function(){
        $('.box-mail').addClass('active');
    }, 700 );

  }

  $scope.hidde = function(){

    $('.box-mail').removeClass('active');
    $timeout( function(){
        $('.send-mail').removeClass('active');
    }, 700 );

    $scope.puesto = "";

  }

  $scope.events = {}

  $scope.filter = "ofert";
  
  $scope.events.filter = function(p){

    //console.log(p);

    /*
    $('.vacante').removeClass('active');
    $timeout( function(){
        $('.'+p).addClass('active');
    }, 50 );
    */

    $scope.filter = p;
    console.log($scope.filter);

  }

  $scope.events.postular = function(p){

    console.log(p);
    $scope.puesto = p;
    //console.log($scope.puesto)

    $scope.show();

  }

  $scope.que = "ofert";
  $scope.donde = "buscar";

  $(".open-que").click(function(e) {

    $('.que').addClass('active');
    $('.cerrar-fil').addClass('active');

  })

  $(".cerrar-fil").click(function(e) {

    $('.que').removeClass('active');
     $('.cerrar-fil').removeClass('active');

  })

  $(".open-donde").click(function(e) {

    $('.donde').addClass('active');

  })

  $scope.events.job = function(p){

    $scope.que = p;
    $('.que').removeClass('active');

  }

  $scope.events.donde = function(p){

    $scope.donde = p;
    $('.donde').removeClass('active');

  }

  $scope.events.search = function(){

    $scope.filter = p;
    console.log($scope.filter);

    $('.vacante').removeClass('active');
    $timeout( function(){
        $('.'+p).addClass('active');
    }, 50 );

  }
  

});