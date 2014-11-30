<!doctype html>
<html class="no-js" lang="en">
<head>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/fonts/raphaelicons.css">
<link rel="stylesheet" href="assets/css/main.css">
<link href="http://fonts.googleapis.com/css?family=Oswald:regular" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Junge' rel='stylesheet' type='text/css'>
<script src="assets/js/libs/modernizr-2.5.2.min.js"></script>
<meta name="MobileOptimized" content="320">
<meta name="HandheldFriendly" content="True">


</head>
  <hgroup>
<h3>Create a new Blog</h3>
  </hgroup>
<head>
<style>
body {
    background-image: url("assets/images/snow.jpg");
}
</style>
</head>



<script type='text/javascript'>
     //Closes the window
     function closeWindow() {
         windowOpened.close();
     }
</script>


<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

<form id=message>

  <fieldset>
    <ol>
		<label for="title">Blog Title</label>
        <input id=name type="input" name="title" /><br /><br>
    </ol>
  </fieldset>
  <fieldset>
    <ol>
        <label for="text">Blog Content</label>
        <textarea name="text"></textarea><br />
    </ol>
       
   </fieldset>
   <fieldset>
	     <input id=name type="submit" name="submit" value="Create news item" />
         <button type="button" onclick="javascript:window.close()">Discard</button>
   </fieldset>

</form>
</html>
