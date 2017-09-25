function myMap() {
  var myCenter = new google.maps.LatLng(12.9874,79.9717);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 17};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}

$(document).ready(function(){
   myMap(); 
});