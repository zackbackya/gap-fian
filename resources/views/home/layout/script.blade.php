<script src="{{ asset('home-template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('home-template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<!--<script src="{{ asset('home-template/assets/vendor/php-email-form/validate.js') }}"></script>-->



<!-- Template Main JS File -->
<script src="{{ asset('home-template/assets/js/main.js') }}"></script>

<script type="text/javascript">
    $(function () {
      $('#myDiv').floatingWhatsApp({
        phone: '5491133359850'
      });
    });
  </script>

<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiemFja2JhY2t5YSIsImEiOiJjbGFqa3ZhNjUwZHYyM3ZwNjB0NHFkcTMxIn0.i65rBzYXz8mLLQisALEWBw';
const coordinates = document.getElementById('coordinates');

const longitude = document.getElementById('longitude');
const latitude = document.getElementById('latitude');

const map = new mapboxgl.Map({
container: 'map',
// Choose from Mapbox's core styles, or make your own style with Mapbox Studio
style: 'mapbox://styles/mapbox/streets-v11',
center: [longitude.value, latitude.value],
zoom: 16
});


//-8.168569, 113.702146
 
const marker = new mapboxgl.Marker()
.setLngLat([longitude.value, latitude.value])
.addTo(map);

</script>