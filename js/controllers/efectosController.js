app.directive("efects", function ($window) {
    /*
    return function(scope, element, attrs) {
        angular.element($window).bind("scroll", function() {
            var offsets = this.pageYOffset;
            var ventana_alto = ($(window).height() / 2) + 100;
            var $element = $(element);
            var tamanoefect1 = parseInt($(element).css('height'));
            var $positiont = $element.offset().top - ventana_alto;
            var $positionb = ($positiont + tamanoefect1) + 200;
            var animation = attrs.animation
            //console.log("offset " + offsets ,"posicion t " + $positiont, "posicion b " + $positionb,"tamaño " + tamanoefect1,"ventana "+ ventana_alto)
            //console.log(attrs.animation);

            if (offsets < $positiont) {
                //$('#efect1').css({'transform' : 'rotateX(-90deg)', 'opacity' : '0'});
                $(element).removeClass(animation); 
            } 

            if (offsets >= $positiont & offsets < $positionb ){
                $(element).addClass(animation); 
                //$('#efect1').css({'transform' : 'rotateX(0deg)', 'opacity' : '1'});
            }

            if (offsets > $positionb){
                //$('#efect1').css({'transform' : 'rotateX(-90deg)', 'opacity' : '0'});
                $(element).removeClass(animation); 
            }

            scope.$apply();
        });
    };
    */
});