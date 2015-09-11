<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title>Sista Dansen: contact us</title>
<meta name="keywords" content="wellington,waterfront,ballet,photography,dance">
<meta name="description" content="This website is about ballet dancers outside the studio" />
<meta name="author" content="Francesca Moore" />
<meta name="copyright" content="Copyright 2014 Francesca Moore" />
<meta name="robots"content= "noindex, nofollow" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="css/mobile.css" media="only all and (max-width: 480px)" />
<link rel="stylesheet" href="css/tablet.css" media="only all and (min-width: 481px)" />
<link rel="stylesheet" href="css/laptop.css" media="only all and (min-width: 960px)" />
<link rel="stylesheet" href="css/default.css"/>
<link href='http://fonts.googleapis.com/css?family=Allura&subset=latin,latin-ext' rel='stylesheet' type='text/css' />

<!-- the following script operates for older browsers and mobile -->
<!--[if lt IE 9 & !IEMobile]>
		<link rel="stylesheet" href="css/tablet.css" />
		<link rel="stylesheet" href="css/desktop.css" />
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
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
	<h2 class="no-mobile">You are here:contact us</h2>
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
    <a  class="mobile-only" href="#jumpbottom" >To Navigation</a>
	<a class="mobile-only" name="jumptop"></a>
       <div id="contact">
		<h1>Get in touch with us</h1>
		<form method="post" action="contact.php">
			<p>
				<label for="name">Name</label>
				<input type="text" id="name" name="name" placeholder="Please enter your name"/>
			</p>
			<p>
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="Please enter your email"/>
			</p>
			<p>
				<label for="message">Message</label>
				<textarea id="message" name="message" rows="6" cols="30" placeholder="What's on your mind?"></textarea>
			</p>
			<p>
				<input type="submit" name="send" value="Send message" />
			</p>
		</form>
	</div>
	

<?php

// Test if the form has been submitted
if(isset($_POST['send'])) {
	// Prepare the email
	$to = 'francescalamoore';
	$subject = 'Message sent from website';
	$message = $_POST['message'];
	// Send it
	$sent = mail($to, $subject, $message);
	if($sent) {
		echo 'Your message has been sent, someone will get back to you as soon as possible';
	} else {
		echo 'Sorry, your message could not send. Please try again later.';
	}
}

?>
   </article>
   
   <a class="mobile-only" name="jumpbottom"></a>
   <a class="mobile-only" href="#jumptop" >Back to top</a>
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