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
</head>
<body>
<header class="clearfix">
  <div class="container"> <a id="logo" href="index.php">1020198</a>
    <nav class="clearfix">
      <ul role="navigation">
        <li> <a href="index.php" class="activePage"><span class="icon"></span>Home</a> </li>
        <li> <a href="portfolio.php"><span class="icon"></span>Portfolio</a> </li>
        <li> <a href="page.php"><span class="icon"></span>Page</a> </li>
        <li> <a href="blog.php"><span class="icon"></span>Blog</a> </li>
        <li> <a href="contact.php"><span class="icon"></span>Contact us</a> </li>
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
      <h2>Working in the projects below made us learn more with challenge.</h2>
      <p>Cras aliquet accumsan molestie. Morbi purus odio, faucibus sit amet elementum in, interdum eu ipsum. Donec cursus pellentesque mauris vitae ultricies. Donec lacinia nunc in nisl hendrerit scelerisque. </p>
      <p></p>
    </div>
  </article>
</section>
<!-- // banner ends -->
<section class="container">
  <div class="sort-bar"> Filter: <a href="#">Private firms</a> | <a href="#">Government houses</a> | <a href="#">Corporate</a> | <a href="#">Industrials</a> </div>
  <ul class="thumb-list">
    <li>
      <h3><a href="#">Project name 1</a></h3>
      <figure> <a href="#"><img src="assets/images/city-2.jpg" alt=""></a>
        <figcaption>
          <p>Cursus pellentesque mauris vitae ultricies. Donec lacinia nunc in nisl hendrerit scelerisque</p>
        </figcaption>
      </figure>
    </li>
    <li>
      <h3><a href="#">Project name 2</a></h3>
      <figure> <a href="#"><img src="assets/images/city-2.jpg" alt=""></a>
        <figcaption>
          <p>Donec cursus pellentesque mauris vitae ultricies. Donec lacinia nunc in nisl hendrerit scelerisque</p>
        </figcaption>
      </figure>
    </li>
    <li>
      <h3><a href="#">Project name 3</a></h3>
      <figure> <a href="#"><img src="assets/images/city-2.jpg" alt=""></a>
        <figcaption>
          <p>Vitae ultricies. Donec lacinia nunc in nisl hendrerit scelerisque</p>
        </figcaption>
      </figure>
    </li>
    <li>
      <h3><a href="#">Project name 4</a></h3>
      <figure> <a href="#"><img src="assets/images/city-2.jpg" alt=""></a>
        <figcaption>
          <p>Faucibus sit amet elementum in, interdum eu ipsum. </p>
        </figcaption>
      </figure>
    </li>
    <li>
      <h3><a href="#">Project name 5</a></h3>
      <figure> <a href="#"><img src="assets/images/city-2.jpg" alt=""></a>
        <figcaption>
          <p>Cursus pellentesque mauris vitae ultricies. Donec lacinia nunc in nisl hendrerit scelerisque</p>
        </figcaption>
      </figure>
    </li>
    <li>
      <h3><a href="#">Project name 6</a></h3>
      <figure> <a href="#"><img src="assets/images/city-2.jpg" alt=""></a>
        <figcaption>
          <p>Donec cursus pellentesque mauris vitae ultricies. Donec lacinia nunc in nisl hendrerit scelerisque</p>
        </figcaption>
      </figure>
    </li>
    <li>
      <h3>Project name 7</h3>
      <figure> <a href="#"><img src="assets/images/city-2.jpg" alt=""></a>
        <figcaption>
          <p>Vitae ultricies. Donec lacinia nunc in nisl hendrerit scelerisque</p>
        </figcaption>
      </figure>
    </li>
    <li>
      <h3><a href="#">Project name 8</a></h3>
      <figure> <a href="#"><img src="assets/images/city-2.jpg" alt=""></a>
        <figcaption>
          <p>Faucibus sit amet elementum in, interdum eu ipsum. </p>
        </figcaption>
      </figure>
    </li>
  </ul>
  <footer class="foo-slogan">
    <h2>Pellentesque vestibulum erat eget urna pretium ultricies.</h2>
    <a href="contact.php" class="button orange">Contact me <span class="icon">M</span></a> </footer>
</section>
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
