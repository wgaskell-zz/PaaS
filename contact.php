<!doctype html>
<html class="no-js" lang="en">
<head>
<title>1020198</title>
<meta name="MobileOptimized" content="320">
<meta name="HandheldFriendly" content="True">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/fonts/raphaelicons.css">
<link rel="stylesheet" href="assets/css/main.css">
<link href="http://fonts.googleapis.com/css?family=Oswald:regular" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Junge' rel='stylesheet' type='text/css'>
<script src="assets/js/libs/modernizr-2.5.2.min.js"></script>
<script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyB917-a40gz0hTijBe9IY29OE_c6afqErM" type="text/javascript"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true&libraries=places"></script>
</head>
<body>
<header class="clearfix">
  <div class="container"> <a id="logo" href="index.php">1020198</a>
    <nav class="clearfix">
      <ul role="navigation">
        <li> <a href="index.php" class="activePage"><span class="icon"></span>Home</a> </li>
        <li> <a href="pistemap.php"><span class="icon"></span>Piste Maps</a> </li>
        <li> <a href="thegang.php"><span class="icon"></span>The Gang</a> </li>
        <li> <a href="blog.php"><span class="icon"></span>Blog</a> </li>
        <li> <a href="contact.php"><span class="icon"></span>Contact</a> </li>
      </ul>
    </nav>
  </div>
</header>
<section role="banner">
  <hgroup>
    <h1>Welcome to Wayne's Snowboarding Story Board</h1>
    <h2>A website of the places visited</h2>
  </hgroup>
  <article role="main" class="clearfix contact">
    <div class="post">
      <h2>Location</h2>
      <p>Currently based in Newport, Shropshire</p>
      <p><span class="icon">[</span>: +44 12345 987654<br />
        <span class="icon">M</span>: <strong><a href="#">w.g@wlv.ac.uk</a></p></strong>
      <p>&nbsp;</p>
	      </div>
    <div class="g-map"><img src="assets/images/map.jpg" alt=""></div>
  </article>
</section>
<!-- // banner ends -->
<section class="container">
  <footer class="foo-slogan">
    <form class="c-form" action="#">
      <h2>Find a gym near you</h2>
	  <p>The key to good form and an enjoyable holiday is fitness</p>
	  <p>Ensure to enable location sharing, below will show your location with nearby Gyms</p>
	  
</script>

<div id="map"></div>

<style>

div#map-canvas {
	width: 500px;
	height: 300px;
}
#map {
    height: 400px;
}
</style>
<script type="text/javascript">
     var infowindow,
      placemarkers = [];


      function placeSearch(map, request) {
          var map = map;
          var service = new google.maps.places.PlacesService(map);
          service.search(request,

          function (results, status) {
              if (status == google.maps.places.PlacesServiceStatus.OK) {
                  var bounds = new google.maps.LatLngBounds();
                  for (var i = 0; i < results.length; ++i) {
                      bounds.extend(results[i].geometry.location);
                      placemarkers.push(createMarker(results[i].geometry.location,
                      map,
                          'http://labs.google.com/ridefinder/images/mm_20_orange.png',
                      results[i].name,
                      false, {
                          fnc: function () {
                              infowindow.open();
                          }

                      }));
                  }
                  map.fitBounds(bounds);
              }
          });

      }

      function createMarker(latlng, map, icon, content, center, action) {


          var marker = new google.maps.Marker({
              map: map,
              position: latlng,
              content: content
          });
          if (icon) {
              marker.setIcon(icon);
          }

          if (center) {
              map.setCenter(latlng);
          }

          google.maps.event.addListener(marker, 'click', function () {
              infowindow.setContent(this.content);
              infowindow.open(map, this);
          });

          if (action) {
              action.fnc(map, action.args);
          }
          return marker;
      }

      function initialize() {

          var location = new google.maps.LatLng(52.496462, -1.893157),
              map = new google.maps.Map(document.getElementById('map'), {
                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                  center: location,
                  zoom: 15
              });
          infowindow = new google.maps.InfoWindow();
          navigator.geolocation.getCurrentPosition(function (place) {
              createMarker(
              new google.maps.LatLng(place.coords.latitude,
              place.coords.longitude),
              map,
              null,
                  'your current position',
              true, {
                  fnc: placeSearch,
                  args: {
                      radius: 7500,
                      types: ['gym'],
                      location: new google.maps.LatLng(place.coords.latitude,
                      place.coords.longitude)
                  }
              });
          });
      }
</script>
</head>
<body onload="initialize()" onunload="GUnload()">
<div id="map-canvas"></div>
</body>  
	  
    </form>
  </footer>
</section>
<footer role="contentinfo">
  <p> <span class="left">6CS007 - Project and Professionalism<a>   1020198</a> | by <a>Wayne Gaskell</a></span>
</footer>
<script src="assets/js/libs/jquery-1.7.1.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
