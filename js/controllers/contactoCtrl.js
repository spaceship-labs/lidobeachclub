app.controller('mapa', function($scope , $location) {

// This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.

      function initMap() {
        var uluru = {lat: 21.122229, lng: -86.833106};
        var map = new google.maps.Map(document.getElementById('mapa_div'), {
          zoom: 16,
          center: uluru
        });

        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<div id="bodyContent" layout="column" layout-align="center center">'+
            '<img class="logo-contactp" src="http://meracorporation.com/wp-content/themes/meracorporation/img/MERA2017.png" alt="">'+
            '<p class="dierrc" >Av. 16 de Abril lote 5 mz. 12 sm 10.  C.P. 77503 Cancún, Quintana Roo, México</p>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: 'Meracorporation'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
initMap()

});