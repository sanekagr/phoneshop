<div class="container">

    <div class="row">

        <div class="col-sm-12">
            <h1 class="h1-content">Contact Us</h1>
        </div>

        <div class="col-sm-12">
            <h3 class="phone-contact">Customer service:<br class="visible-xs-inline-block"> <a href="tel:1700000000">1-700-000-000</a></h3>
            <h3 class="phone-contact">Email:<br class="visible-xs-inline-block"> <a href="mailto:c_service@phoneshop.com">c_service@phoneshop.com</a></h3><br>

            <button type="button" class="btn btn-primary btn-lg"
                    data-toggle="modal" data-target="#myModal2"
                    aria-label="Left Align" title="Click to send a message">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;
                Contact us
            </button>
            <br><br>
        </div>

    </div>
    <!--/.row -->

    <div class="row">
        <div class="col-sm-6 ">
            <address>
                <strong>Tel Aviv Main Office and Store</strong><br>
                Derech Menachem Begin 112,<br>
                Tel-Aviv-Yafo, 6701308<br>
                Phone: <a href="tel:035558888">03-5558888</a><br>
                Fax: 03-5558899
            </address>
            <br>

            <!--    map Tel-Aviv   -->

            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
            <div class="map-div">
                <div id="gmap_canvas" ></div>
                <style>#gmap_canvas img {
                        max-width: none !important;
                        background: none !important
                    }</style>
            </div>
            <br><br>

            <script type="text/javascript"> function init_map() {
                    var myOptions = {
                        zoom: 15,
                        center: new google.maps.LatLng(32.0706024, 34.7890347),
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                    marker = new google.maps.Marker({
                        map: map,
                        position: new google.maps.LatLng(32.0706024, 34.7890347)
                    });
                    infowindow = new google.maps.InfoWindow({content: "<b>Tel-Aviv</b><br/>Derech Menachem Begin  112<br/> Tel-Aviv"});
                    google.maps.event.addListener(marker, "click", function () {
                        infowindow.open(map, marker);
                    });
                    infowindow.open(map, marker);
                }
                google.maps.event.addDomListener(window, 'load', init_map);
            </script>


        </div>
        <!--/.col-sm-6-->

        <div class="col-sm-6 ">
            <address>
                <strong>Beer Sheva Store</strong><br>
                Grand Canyon Mall,<br>
                David Tuviyahu 125, 3d floor,<br>
                Beer Sheva<br>
                Phone: <a href="tel:085558888">08-5558888</a><br>
                Fax: 08-5558899
            </address>

            <!--    map Beer-Sheva  -->

            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
            <div class="map-div">
                <div id="gmap_canvas2"></div>
                <style>#gmap_canvas img {
                        max-width: none !important;
                        background: none !important
                    }</style>
            </div>
            <br><br>
            <script type="text/javascript"> function init_map() {
                    var myOptions = {
                        zoom: 14,
                        center: new google.maps.LatLng(31.25001581675265, 34.77230471960456),
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    map = new google.maps.Map(document.getElementById("gmap_canvas2"), myOptions);
                    marker = new google.maps.Marker({
                        map: map,
                        position: new google.maps.LatLng(31.25001581675265, 34.77230471960456)
                    });
                    infowindow = new google.maps.InfoWindow({content: "<b>Beer-Sheva</b><br/>David Tuviyahu ave 125,<br/> Beer Sheva"});
                    google.maps.event.addListener(marker, "click", function () {
                        infowindow.open(map, marker);
                    });
                    infowindow.open(map, marker);
                }
                google.maps.event.addDomListener(window, 'load', init_map);
            </script>


        </div>
        <!--/.col-sm-6-->

    </div>
</div>