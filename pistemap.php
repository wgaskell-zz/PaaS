<!doctype html>
<html class="no-js" lang="en">
<head>
<title>1020198</title>
<meta name="MobileOptimized" content="320">
<meta name="HandheldFriendly" content="True">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/fonts/raphaelicons.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/search.css">
<link href="http://fonts.googleapis.com/css?family=Oswald:regular" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Junge' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="assets/js/libs/modernizr-2.5.2.min.js"></script>
<script src="assets/js/libs/custom.js"></script>
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
  <article role="main" class="clearfix">
    <div class="post">
      <h2>Check out the piste maps</h2>
	  <h4>Just click on each image.</h4>
      <p><strong>Personally my favourite resort was Alp Duez,  this has a 16km black run which is the largest in Europe,  it's heavy on the legs but man you certainly gain some speed .. even when you're on your back sliding down uncontrollably after a fall :-))</strong></p>
      <p></p>
    </div>
  </article>
</section>
<!-- // banner ends -->
<section class="container">
<br><br>
  <ul class="thumb-list">
    <li>
      <h3><a href="http://www.about-morzine.co.uk/wp-content/uploads/2009/09/les-gets-piste-map-large.jpg" target="_blank">Morzine</a></h3>
      <figure> <a href="http://www.about-morzine.co.uk/wp-content/uploads/2009/09/les-gets-piste-map-large.jpg" target="_blank"><img src="assets/images/morzine.jpg" alt=""></a>
        <figcaption>
          <p>The Morzine and Les Gets piste map gives good detail of the local area, listing piste names as well as lifts. The larger Portes du Soleil piste map gives you a broad picture of how everything is connected.</p>
		  
        </figcaption>
      </figure>
    </li>
    <li>
      <h3><a href="http://www.igluski.com/images/_i57687.jpg" target="_blank">Borovets</a></h3>
      <figure> <a href="http://www.igluski.com/images/_i57687.jpg" target="_blank"><img src="assets/images/borovets.jpg" alt=""></a>
        <figcaption>
          <p>Borovets is the biggest mountain resort in Bulgaria. The 40km of pistes are spread over three sectors, two of which, Markoudjika and Yastrebets, are loosely linked.</p>
        </figcaption>
      </figure>
    </li>
    <li>
      <h3><a href="http://www.swisswintersports.co.uk/images/chamonix_pistebig.jpg" target="_blank">Andorra</a></h3>
      <figure> <a href="http://www.swisswintersports.co.uk/images/chamonix_pistebig.jpg" target="_blank"><img src="assets/images/pasdelacasa.jpg" alt=""></a>
        <figcaption>
          <p>Pas de la Casa is a large, varied and high altitude ski resort, with access to 205km of piste in the Grandvalira ski area. It is lively and affordable and linked to both the nearby resorts of Soldeu and El Tarter.</p>
        </figcaption>
      </figure>
    </li>
    <li>
      <h3><a href="http://www.piste-maps.co.uk/Piste-Maps/France/Alpe-dHuez-Piste-Map-2012-Large.jpg" target="_blank">Alp Duez</a></h3>
      <figure> <a href="http://www.piste-maps.co.uk/Piste-Maps/France/Alpe-dHuez-Piste-Map-2012-Large.jpg" target="_blank"><img src="assets/images/alpduez.jpg" alt=""></a>
        <figcaption>
          <p>Alpe d'Huez is made up of a collection of high altitude resorts, or villages, all linked by a free public transport system. Alpe d'Huez itself and the wider Oisans region offers a wide range of summer and winter activities.</p>
        </figcaption>
	  </figure>
    </li>
	<div id="main">
		<!-- Main Title -->
		<div class="icon"></div>
		<h2 class="title">My Fav Piste Run Live Search</h2>
		<h4 class="title">Search by piste name or resort, e.g Morzine or Chamois</h4>
		<h4 class="title">Result = Resort, Piste Name, Level and Length</h4>
		<!-- Main Input -->
		<input type="text" id="search" autocomplete="on">
		<!-- Show Results -->
		<h4 id="results-text">Showing results for: <b id="search-string">Array</b></h4>
		<ul id="results"></ul>
	</div>
  </ul>


<footer role="contentinfo">
  <p> <span class="left">6CS007 - Project and Professionalism<a>   1020198</a> | by <a>Wayne Gaskell</a></span>
</footer>
<script src="assets/js/script.js"></script>
<script>
$(document).ready(function () {
    function setBoxes() {
        var figBox = 0;
        $('.thumb-list li').each(
        function () {
            if (figBox < $(this).height()) {
                figBox = $(this).height();
            }
        })
        $('.thumb-list li').height(figBox);
    }
    $('.thumb-list li img').load(function () {
        setBoxes();
    });
});
</script>
</body>
</html>
