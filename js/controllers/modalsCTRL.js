app.controller('noticeCTL', function($scope) {
    
    $(".open-notice").click(function(e) {
        var id_notice = $(this).attr("notice");
        $('.cont-notice').css({'height' : '0', 'opacity' : '0'});
        $('.container-modal').css({'margin-top' : '100%'});
        if ($('.'+id_notice).css('height') == "0px"){
            $('.'+id_notice).css({'height' : '100%', 'opacity' : '1'});
            setTimeout(function() {
                $('.container-modal').css({'margin-top' : '0'});
            },500);
        }
    })

    $(".open-notice").click(function(e) {
        var id_aviso = $(this).attr("Aviso");
        console.log(id_aviso);
        $('.aviso-cont').css({'display' : 'none'});
        $('.'+id_aviso).css({'display' : 'inherit'});
    })

    $(".close-modals").click(function(e) {
        
        $('.container-modal').css({'margin-top' : '100%'});
        setTimeout(function() {
            $('.cont-notice').css({'height' : '0', 'opacity' : '0'});
        },500);
    })

});