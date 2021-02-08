<!DOCTYPE html>
<html>
    <head>
        <title>Mapeamento</title>
        <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEquPMPpj7R_x3IUFQJASlZg_suMJz_b0&callback=initMap">
        </script>
        <script>
            function initMap() {
                
                var request = new XMLHttpRequest()

                request.open('GET', 'assets/json/data_teste.json', true)

                request.onload = function () {
                  // begin accessing JSON data here
                    var data = JSON.parse(this.response)
                    var uluru = [];

                    for (var i = 0; i < data.length; i++) {
                        //vol[i] = data[i].volume;
                        uluru[i] = {lat : data[i].latitude, lng : data[i].longitude};
                        var map = new google.maps.Map(document.getElementById("map"), {
                            zoom: 10,
                            center: uluru[i],
                        });
                        
                    }
                    for(var i = 0; i < data.length; i++){
                        var marker = new google.maps.Marker({
                            position: uluru[i],
                            map: map,
                        });
                    }
                    
                }
                
                request.send()
            }
        </script>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <!--<script src="assets/js/mapear.js"></script>-->
    </head>
    <body>
        <h3></h3>
        <!--The div element for the map -->
        <div id="map"></div>
    </body>
</html>