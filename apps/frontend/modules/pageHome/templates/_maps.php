<section id="map" class="post-23 page type-page status-publish hentry scheme-default" style="min-height:400px;">
    <script type="text/javascript">

        function initialize() {

            // Create an array of styles.
            var styles = [
                {
                    stylers: [
                        {hue: "#dd3333"}, {saturation: 0}
                    ]
                }, {
                    featureType: "road",
                    elementType: "geometry",
                    stylers: [
                        {lightness: 100},
                        {visibility: "on"}
                    ]
                }
            ];

            // Create a new StyledMapType object, passing it the array of styles,
            // as well as the name to be displayed on the map type control.
            var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

            var mapOptions = {
                scrollwheel: false,
                zoom: 5,
                center: new google.maps.LatLng(52.2393167, 21.0214167),
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                }
            }
            var map = new google.maps.Map(document.getElementById('map-canvas-23'), mapOptions);

            //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');

            setMarkers(map, places);
            infowindow = new google.maps.InfoWindow({
                content: "loading..."
            });
        }

        var places = [['Moscow', 55.7600667, 37.6194667, 1, 'Suspendisse%20est%20dolor%2C%20adipiscing%20eget%20suscipit%20ac%2C%20gravida%20nec%20massa.%20Donec%20commodo%20erat%20eget%20nisi%20ultricies%20mattis.%20In%20molestie%20laoreet%20enim%2C%20et%20scelerisque%20sapien%20gravida%20in.%20Phasellus%20vestibulum%20scelerisque%20pulvinar.%20Integer%20lacinia%20tristique%20urna%20at%20dignissim.'], ['Warsaw', 52.2393167, 21.0214167, 1, 'Suspendisse%20est%20dolor%2C%20adipiscing%20eget%20suscipit%20ac%2C%20gravida%20nec%20massa.%20Donec%20commodo%20erat%20eget%20nisi%20ultricies%20mattis.%20In%20molestie%20laoreet%20enim%2C%20et%20scelerisque%20sapien%20gravida%20in.%20Phasellus%20vestibulum%20scelerisque%20pulvinar.%20Integer%20lacinia%20tristique%20urna%20at%20dignissim.'], ['Berlin', 52.52665, 13.3858, 1, 'Suspendisse%20est%20dolor%2C%20adipiscing%20eget%20suscipit%20ac%2C%20gravida%20nec%20massa.%20Donec%20commodo%20erat%20eget%20nisi%20ultricies%20mattis.%20In%20molestie%20laoreet%20enim%2C%20et%20scelerisque%20sapien%20gravida%20in.%20Phasellus%20vestibulum%20scelerisque%20pulvinar.%20Integer%20lacinia%20tristique%20urna%20at%20dignissim.'], ['Paris', 48.8582333, 2.3518167, 1, 'Suspendisse%20est%20dolor%2C%20adipiscing%20eget%20suscipit%20ac%2C%20gravida%20nec%20massa.%20Donec%20commodo%20erat%20eget%20nisi%20ultricies%20mattis.%20In%20molestie%20laoreet%20enim%2C%20et%20scelerisque%20sapien%20gravida%20in.%20Phasellus%20vestibulum%20scelerisque%20pulvinar.%20Integer%20lacinia%20tristique%20urna%20at%20dignissim.'],];

        function setMarkers(map, locations) {
            // Add markers to the map
            var image = {
                url: 'http://www.coffeecreamthemes.com/themes/magicreche/wordpress/wp-content/uploads/2014/03/marker.png',
                // This marker is 40 pixels wide by 42 pixels tall.
                size: new google.maps.Size(40, 42),
                // The origin for this image is 0,0.
                origin: new google.maps.Point(0, 0),
                // The anchor for this image is the base of the pin at 20,42.
                anchor: new google.maps.Point(15, 42)
            };

            for (var i = 0; i < locations.length; i++) {
                var place = locations[i];
                var myLatLng = new google.maps.LatLng(place[1], place[2]);
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image, title: decodeURIComponent(place[0]),
                    zIndex: place[3],
                    animation: google.maps.Animation.DROP,
                    html: decodeURIComponent(place[4])
                });

                google.maps.event.addListener(marker, "click", function () {
                    infowindow.setContent(decodeURIComponent(this.html));
                    infowindow.open(map, this);
                });

            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div class="google-map" id="map-canvas-23"></div>
    <div class="container"></div>
</section>