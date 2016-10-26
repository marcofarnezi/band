
<section id="contact">
    @yield('contact_map')            
    <div class="contact-section">
        <div class="ear-piece">
            <img class="img-responsive" src="images/ear-piece.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-4">
                    @yield('contact_data')                            
                </div>
                <div class="col-sm-5">
                    <div id="contact-section">
                        <h3>Envie uma mensagem</h3>                        
                        <div class="status alert alert-success" style="display: none"></div>
                        @yield('contact_form')                                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#contact-->
<script type="text/javascript">
     // Google Map Customization
  (function(){

    var map;

    map = new GMaps({
        el: '#gmap',
        lat: @yield('map_lat'),
        lng: @yield('map_lng'),
        scrollwheel:false,
        zoom: 16,
        zoomControl : false,
        panControl : false,
        streetViewControl : false,
        mapTypeControl: false,
        overviewMapControl: false,
        clickable: false
    });

    var image = 'images/map-icon.png';
    map.addMarker({
        lat: @yield('map_lat'),
        lng: @yield('map_lng'),
        icon: image,
        animation: google.maps.Animation.DROP,
        verticalAlign: 'bottom',
        horizontalAlign: 'center',
        backgroundColor: '#3e8bff',
    });


    var styles = [ 

    {
        "featureType": "road",
        "stylers": [
        { "color": "#b4b4b4" }
        ]
    },{
        "featureType": "water",
        "stylers": [
        { "color": "#d8d8d8" }
        ]
    },{
        "featureType": "landscape",
        "stylers": [
        { "color": "#f1f1f1" }
        ]
    },{
        "elementType": "labels.text.fill",
        "stylers": [
        { "color": "#000000" }
        ]
    },{
        "featureType": "poi",
        "stylers": [
        { "color": "#d9d9d9" }
        ]
    },{
        "elementType": "labels.text",
        "stylers": [
        { "saturation": 1 },
        { "weight": 0.1 },
        { "color": "#000000" }
        ]
    }

    ];

    map.addStyle({
        styledMapName:"Styled Map",
        styles: styles,
        mapTypeId: "map_style"  
    });

    map.setStyle("map_style");
}());
</script>