<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title>Sista Dansen: gallery</title>
<meta name="keywords" content="wellington,waterfront,ballet,photography,dance">
<meta name="description" content="This website is about ballet dancers outside the studio" />
<meta name="author" content="Francesca Moore" />
<meta name="copyright" content="Copyright 2014 Francesca Moore" />
<meta name="robots"content= "index, follow" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="css/mobile.css" media="only all and (max-width: 480px)" />
<link rel="stylesheet" href="css/tablet.css" media="only all and (min-width: 481px)" />
<link rel="stylesheet" href="css/laptop.css" media="only all and (min-width: 960px)" />
<link rel="stylesheet" href="css/default.css" />
<link href='http://fonts.googleapis.com/css?family=Allura&subset=latin,latin-ext' rel='stylesheet' type='text/css' />

<!-- the following script operates for older browsers -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5-els.js"></script>
<![endif]-->




	

<!--social networking section-->
	<!-- Place this tag in your head or just before your close body tag. -->
	<script type="text/javascript" src="https://apis.google.com/js/platform.js">
		{parsetags: 'explicit'}
	</script> <!--google+-->

	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><!--twitter-->


</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> <!--facebook-->
<!--end social networking section-->


<div id="container">
  <header>
   <hgroup>
	<h1>Sista Dansen</h1>
	<h2 class="no-mobile">You are here: gallery</h2>
   </hgroup>
  </header>

   <nav class="no-mobile">
	<ul>
	  <li><a href="index.php">Home</a></li>
	  <li><a href="gallery.php">Gallery</a></li>
	  <li><a href ="contact.php">Contact us</a></li>
	</ul>
  </nav>

  <article>
  
  <a class="mobile-only" href="#jumptonav"><img src="images/icons/arrow-down.jpg" alt="Go to navigation"></a>
  <a class="mobile-only" name="jumptop">
	<?php
			$dir_name = "images/thumbs";
			
			/*set up a variable for large images*/
			$large_img ="images/large";
	
		
			$directory = @opendir($dir_name);
			if (!$directory) {
			//there was no result
				echo "There is a problem with the website. ";
				die ("I suggest you try later.");
				}
		
			while ($file=@readdir($directory)) {
			
				if ($file =='.' || $file == '..' || $file =='thumbs.db') {
				continue; //skip current iteration of loop from here
				}
			
			/*  getting file name, removing extension*/
			$formatname = preg_replace('/\.[^.]+$/','',$file);
			
			echo '<a href='.$large_img.'/'.$file.' target="_blank"><figure><img id="image-format"; src="'.$dir_name . '/' . $file. '" alt='.$formatname.'><figcaption>'. $formatname.'</figcaption></figure></a>';}
	?>
   </article>
   <a class="mobile-only" name="jumptonav">
   <a class="mobile-only" href="#jumptop" ><img src="images/icons/arrow-up.jpg" alt="Back to top"></a>
   
	<footer>
	
	<ul class="mobile-only">
	  <li><a href="index.php">Home</a></li>
	  <li><a href="gallery.php">Gallery</a></li>
	  <li><a href ="contact.php">Contact us</a></li>
	</ul>
	
	
	<div class="no-mobile"><p>&copy; Francesca Moore</p> <?php echo date ("d/m/Y"); ?> <br></div>
	
	  
	  <div class="fb-like" data-href="http://francescam.freewebhost.co.nz/SistaDansen/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
	  
	  <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://francescam.freewebhost.co.nz/SistaDansen/" data-via="francescalmoore" data-hashtags="Dance, ballet, outsidethestudio">Tweet</a>
	  
	  <!-- Place this tag where you want the +1 button to render. -->
	<div class="g-plusone"></div>
    
	<!-- Place this render call where appropriate. -->
	<script type="text/javascript">gapi.plusone.go();</script>
  </footer>
 </body>
</html>
 
  