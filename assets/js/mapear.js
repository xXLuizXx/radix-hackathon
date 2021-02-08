function initMap() {
                
                var request = new XMLHttpRequest()

                request.open('GET', 'assets/json/data_teste.json', true)

                request.onload = function () {
                  // begin accessing JSON data here
                    var data = JSON.parse(this.response)
                    var uluru = [];
                    for (var i = 0; i < data.length; i++) {
                        uluru[i] = {lat : data[i].latitude, lng : data[i].longitude};
                        var map = new google.maps.Map(document.getElementById("map"), {
                            zoom: 10,
                            center: uluru[i],
                        });
                    }
                    for(var i = 0; i < data.length; i++){
                        //console.log(uluru)
                        var marker = new google.maps.Marker({
                            position: uluru[i],
                            map: map,
                        });
                    }
                }

                request.send()
            }