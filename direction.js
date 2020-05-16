<script>
function fun(){
  mapboxgl.accessToken = "pk.eyJ1IjoiYmhhdmFuaXJhbmdhc2FteSIsImEiOiJjazhlbzJmaW4xNzF3M2xvMWoxOWIzeHQxIn0.0cXeNxgvkrfwTH2nza0jEg";
        var map = new mapboxgl.Map({
            container: "map",
            style: "mapbox://styles/mapbox/streets-v11",
            center: [-79.4512, 43.6568],
            zoom: 13
        });
    
        map.on('load', function() {
  var directions = new MapboxDirections({
    accessToken: mapboxgl.accessToken
  });
  map.addControl(directions, "top-left");
  directions.setOrigin("Madurai,Tamil Nadu, India");

directions.setDestination("Theni Allinagaram, Tamil Nadu, India"); 
  });

}
    </script>
