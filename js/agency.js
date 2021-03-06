/*!
 * Start Bootstrap - Agency Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// Maps
function initMap() {

  // Create an array of styles.
  var styles = [
    {
      featureType: "all",
      stylers: [
       { saturation: -80 }
      ]
    },{
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [
        { hue: "#00ffee" },
        { saturation: 50 }
      ]
    },{
      featureType: "poi.business",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }

  ];
  var bounds = new google.maps.LatLngBounds();

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var mapOptions = {  
    zoom: 4,
	scrollwheel: false,
    center: new google.maps.LatLng(55.899444, -97.139167),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  


  
  var map = new google.maps.Map(document.getElementById('map'),
    mapOptions);
	
	// Multiple Markers
    var markers = [
        ['Oceanside Scooter Club, Parksville', 49.319389,-124.313637],
        ['Last Bastion Scooter Club, Nanaimo', 49.164167, -123.936389],
        ['The Worst Scooter Club Ever, Vancouver', 49.246292, -123.116226],
        ['The Capital City Scooter Club, Victoria', 48.412375, -123.339482],
        ['Crude City Scooter Club , Edmonton', 53.548034, -113.525672],
        ['Apocalypse Scooter Club , Calgary', 51.037375, -114.084306],
        ['Scootering Manitoba , Winnipeg', 49.899754, -97.137494],
        ['Toronto Moto Scooter Club , Toronto', 43.653226, -79.383184],
        ['Dogs Bollocks Scooter Club , London', 42.986950, -81.243177],
        ['Lambretta Club of Canada , Ottawa', 45.18841,-75.844315],
        ['Ottawa Valley Scooter Club, Ottawa', 45.476985, -75.701981],
        ['Vespa Club of Ottawa, Ottawa', 45.437008, -75.706787],
        ['Bitter End Scooter Club, Ottawa', 45.321415, -75.414619],
        ['Barking Mad Scooter Club, Bowmanville', 43.912604, -78.688019],
        ['Scooter Club Montreal, Montreal', 45.501689, -73.567256],
        ['East Coast Road Runners Scooter Club, Halifax', 44.679558, -63.477287],
        ['Toronto Scooter Club, Toronto', 43.639222, -79.515266],
		['Dancing Men Scooter Club, Winnipeg', 49.900237, -97.201023],
        ['Halifax Scooter Council, Halifax', 44.648862, -63.641911],
        ['Hammer Down Scooter Club, Hamilton', 43.25, -79.866667]
    ];
                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>Oceanside Scooter Club</h3>' +
        '<p>Scooter club based in Parksville.</p>' +        
        '<p>Email <a href="mailto:stulou99@gmail.com" target=_blank>stulou99@gmail.com</a> or visit tne <a href="https://www.facebook.com/OceansideScooterClub/" target=_blank>Oceanside Scooter Club Facebook Group</a> for more information.</p>' +        
        '<p>Email <a href="mailto:stulou99@gmail.com" target=_blank>stulou99@gmail.com</a> or visit tne <a href="https://www.facebook.com/OceansideScooterClub/" target=_blank>Oceanside Scooter Club Facebook Group</a> for more information.</p>' +        
		'</div>'],
    
        ['<div class="info_content">' +
        '<h3>Last Bastion Scooter Club</h3>' +
        '<p>Vintage scooter enthusiasts based in Nanaimo.</p>' +        
        '<p><a href="https://www.facebook.com/groups/lastbastionscooterclub/" target=_blank>More information</a></p>' +        
		'</div>'],
		
        ['<div class="info_content">' +
        '<h3>The Worst Scooter Club Ever</h3>' +
        '<p>Home to Canada\'s first and still largest scooter scene, as well as the annual Labour Day weekend rally. Check out the Worst Scooter Club Ever for details. </p>' +
		'<p><a href="http://worstscooterclubever.com/" target=_blank>More information</a></p>' +    
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>The Capital City Scooter Club</h3>' +
        '<p>The club hosts the legendary May long weekend rally every year. Meetings are held the last Monday of the month at the Ross Bay Pub, 1516 Fairfield Rd. in Victoria, B.C. </p>' +
		'<p><a href="http://capitalcityscooterclub.weebly.com/index.html" target=_blank>More information</a></p>' +    
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Crude City Scooter Club</h3>' +
        '<p>The Crude City Scooter Club meets Sundays 11:00am at Iconoclast Coffee (11807 105 Ave NW, Edmonton) for conversation and some riding. Come join us! </p>' +
		'<p><a href="http://www.crudecityscooterclub.com/" target=_blank>More information</a></p>' +    
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Apocalypse Scooter Club </h3>' +
        '<p>The Apocalypse Scooter Club meets for a group ride every Tuesday at 7pm at Vendome Cafe - 940 2 Ave NW. The general scooter-riding public are welcome to join us! (Club members also ride on Sundays after brunch).</p>' +
		'<p><a href="http://www.apocalypsesc.com/" target=_blank>More information</a></p>' +    
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Scootering Manitoba</h3>' +
        '<p>Check the Scootering Manitoba website for details on monthly rides.</p>' +
		'<p><a href="http://www.scooteringmanitoba.com/" target=_blank>More information</a></p>' +    
        '</div>'],
		
		['<div class="info_content">' +
        '<h3> Toronto Moto Scooter Club</h3>' +
        '<p>Check the Toronto Moto Scooter Club website for details on rides and memberships. </p>' +
		'<p><a href="http://www.meetup.com/toronto-moto-scooter-club/" target=_blank>More information</a></p>' +    
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Dogs Bollocks Scooter Club</h3>' +
        '<p>Check the Dogs Bollocks Scooter Club website for details on rides and memberships. </p>' +
		'<p><a href="http://www.dogsbollocks.ca/" target=_blank>More information</a></p>' +    
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Lambretta Club of Canada</h3>' +
        '<p>Check the club website for details on rides and memberships. </p>' +
		'<p><a href="https://www.facebook.com/pages/Lambretta-Club-of-Canada/1716112678615493/" target=_blank>More information</a></p>' +    
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Ottawa Valley Scooter Club</h3>' +
        '<p>Check the club website for details on rides and memberships. </p>' +
		'<p><a href="https://www.facebook.com/groups/117424818269206/" target=_blank>More information</a></p>' +    
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Vespa Club of Ottawa</h3>' +
        '<p>Check the club\'s Facebook page for details on rides and memberships. </p>' +
		'<p><a href="https://www.facebook.com/vespaclubottawa/?fref=ts" target=_blank>More information</a></p>' +    
        '</div>'],
		
		
		['<div class="info_content">' +
        '<h3>Bitter End Scooter Club</h3>' +
        '<p>Contact Corey Fraser for details on rides and memberships. </p>' +
		'<p><a href="mailto:Scooterfix@gmail.com" target=_blank>Email</a></p>' +    
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Barking Mad Scooter Club</h3>' +
        '<p>Check the club website for details on rides and memberships.</p>' +
		'<p><a href="https://www.facebook.com/profile.php?id=100008187579370" target=_blank>More information</a></p>' +    
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Scooter Club Montreal</h3>' +
        '<p>Check the club website for details on rides and memberships.</p>' +
		'<p><a href="http://scooterclubmontreal.blogspot.ca/" target=_blank>More information</a></p>' +    
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>East Coast Road Runners Scooter Club</h3>' + 
		'<p>Contact David Gage for details on rides and memberships. </p>' +
		'<p><a href="mailto:davidgage66@hotmail.com" target=_blank>Email</a></p>' + 		
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Toronto Scooter Club</h3>' + 
		'<p>Contact David Davidson for details on rides and memberships. </p>' +
		'<p><a href="mailto:TorontoScooterClub@gmail.com" target=_blank>Email</a></p>' + 		
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Dancing Men Scooter Club</h3>' + 
		'<p>Contact informat coming soon. </p>' +		
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Halifax Scooter Council</h3>' +
        '<p>Check the club website for details on weekly rides and annual rally in the Annapolis Valley.</p>' +
		'<p><a href="http://halifaxscootercouncil.com/" target=_blank>More information</a></p>' +    
        '</div>'],
		
		['<div class="info_content">' +
        '<h3>Hammer Down Scooter Club</h3>' +
        '<p>Contact the club for details on rides and memberships.</p>' +
		'<p><a href="mailto:hammerdownsc@hotmail.com" target=_blank>Email</a></p>' +    
        '</div>']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
}
}