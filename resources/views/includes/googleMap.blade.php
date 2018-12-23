<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
            myCenter = new google.maps.LatLng(31.286640, 75.551430);
            var mapOptions = {
                center: myCenter,

                zoom: 12,
                scrollwheel: false,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
                animation: google.maps.Animation.BOUNCE,
            });
            marker.setMap(map);
        }map
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBYyj0lk0Lp8wR1wxnUGPvkt4caXJAeIs&callback=myMap"></script>


