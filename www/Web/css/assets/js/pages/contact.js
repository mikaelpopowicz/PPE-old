var Contact = function () {

    return {
        
        //Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat: 48.884878,
				lng: 2.293463
			  });
			  var contentString = '<div id="content">'+
			        '<h1 id="firstHeading" class="firstHeading">Ecole Iris</h1>'+
			        '<div id="bodyContent">'+
			        '<p>6-8 Impasse des 2 Cousins</br>'+
					'75017 Paris</br>'+
					'01 44 01 86 70</br>'+
					'<a href="http://ecoleiris.fr">ecoleiris.fr</a></p>'+
			        '</div>';
					var infowindow = new google.maps.InfoWindow({
					      content: contentString
					  });
			   var marker = map.addMarker({
		            lat: 48.884878,
					lng: 2.293463,
		            title: 'Ecole Iris'
		        });
				google.maps.event.addListener(marker, 'click', function() {
				    infowindow.open(map,marker);
				  });
			});
        }

    };
}();