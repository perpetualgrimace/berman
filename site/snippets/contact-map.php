
<!-- https://developers.google.com/maps/documentation/javascript/styling#styling_the_default_map -->

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
  function initialize() {
    var mapCanvas = document.getElementById('map-canvas');var mapOptions = {
      center: new google.maps.LatLng(42.343317, -71.084156),
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
  }
   google.maps.event.addDomListener(window, 'load', initialize);


</script>

<section class="g-columns fixed-height">

   <div id="map-canvas"></div>

</section>
