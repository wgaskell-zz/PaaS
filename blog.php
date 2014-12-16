<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = $_POST['password'];
        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysql_query($query);
        if($result){
            $msg = "User Created Successfully.";
        }
    }
    ?>

<!doctype html>
<html class="no-js" lang="en">
<head>
<title>1020198</title>
<meta name="MobileOptimized" content="320">
<meta name="HandheldFriendly" content="True">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/register.css">
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
      <h2>Forum</h2>
      <p>Want to share some of your knowledge,  Register an account and create an article</p>
    </div>
  </article>
</section>
<!-- // banner ends -->
<section class="container clearfix">
  <aside role="complementary">
    <h2>What's on your mind?</h2>
	
<figure>
<br><strong>Nightlife?</strong><br>
    <img src='http://s5.postimg.org/extfzvl03/nightlife.jpg' alt="Nightlife"/><br>
<br><strong>Food?</strong><br>
    <img src='http://s5.postimg.org/j5jmuvx1v/food.jpg' alt="Food"/><br>
<br><strong>Equipment?</strong><br>
    <img src='http://s5.postimg.org/cqg0kh0yb/equipment.jpg' alt="Equipment"/><br>
<p>
</figure>

    <p></p>

  </aside>
 
  <article class="post content">
		
<div class="register-form">
<?php
        if(isset($msg) & !empty($msg)){
                echo $msg;
        }
 ?>
<h1>Register</h1>
<form action="" method="POST">
    <p><label>User Name : </label>
	<input id="username" type="text" name="username" placeholder="username" /></p>
	
	<p><label>E-Mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
	<input id="password" type="email" name="email"/></p>
 
        <p><label>Password&nbsp;&nbsp; : </label>
	<input id="password" type="password" name="password" placeholder="password" /></p>
 
    <a class="btn" href="login.php">Login</a>
    <input class="btn register" type="submit" name="submit" value="Register" />
</form>
</div>
		
</ul>
 </article>
  
</section>
<footer role="contentinfo">
  <p> <span class="left">6CS007 - Project and Professionalism<a>   1020198</a> | by <a>Wayne Gaskell</a></span>
</footer>
<script src="assets/js/libs/jquery-1.7.1.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
