<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title>Sista Dansen</title>
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

<!-- the following script operates for older browsers incl. mobile -->
<!--[if lt IE 9 & !IEMobile]>
		<link rel="stylesheet" href="css/mobile.css" />
		<link rel="stylesheet" href="css/laptop.css" />
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
	<h2 class="no-mobile">You are here: login</h2>
   </hgroup>
  </header>

  <nav class="no-mobile">
	<ul>
	  <li><a href="index.php">Home</a></li>
	  <li><a href="gallery.php">Gallery</a></li>
	  <li><a href ="contact.php">Contact us</a></li>
	  <li><a href="login.php">Login</a></li>
	</ul>
  </nav>

  

<article>
    <a class="mobile-only" href="#jumpbottom">To bottom</a>
	<a class="mobile-only" name="jumptop"></a>


<script type = "text/javascript">

var count = 2;
function validate() {
var un = document.myform.username.value;
var pw = document.myform.pword.value;
var valid = false;

var unArray = ["admin"];  // as many as you like - no comma after final entry
var pwArray = ["dance1234"];  // the corresponding passwords;

for (var i=0; i <unArray.length; i++) {
if ((un == unArray[i]) && (pw == pwArray[i])) {
valid = true;
break;
}
}

if (valid) {
alert ("Login was successful");
var sessionTimeout = 5; //minutes
var loginDuration = new Date();
loginDuration.setTime(loginDuration.getTime()+(sessionTimeout*60*1000));
document.cookie = "SistDansenSession=Valid; expires="+loginDuration.toGMTString()+"; path=/"
window.location = "gallery.php";
return false;
}

var t = " tries";
if (count == 1) {t = " try"}

if (count >= 1) {
alert ("Invalid username and/or password.  You have " + count + t + " left.");
document.myform.username.value = "";
document.myform.pword.value = "";
setTimeout("document.myform.username.focus()", 25);
setTimeout("document.myform.username.select()", 25);
count --;
}

else {
alert ("Still incorrect! You have no more tries left!");
document.myform.username.value = "No more tries allowed!";
document.myform.pword.value = "";
document.myform.username.disabled = true;
document.myform.pword.disabled = true;
return false;
}

}

</script>
	   
	


<div id="login">
		<h1>Login to Sista Dansen</h1>
		<form name="login" action="gallery.php">
			<p>
				<label for="username">Username</label>
				<input type="text" name="username"/>
			
			</p>
			<p>
				<label for="Password">Password</label>
				<input type="password" name="pword" />
			</p>
			
			<button onclick="validate()">Login</button>
			
		</form>
 </article>
   
 <a class="mobile-only" name="jumpbottom"></a>
   <a class="mobile-only" href="#jumptop" >Back to top</a>
	<footer>
	<ul class="mobile-only">
	  <li><a href="index.php">Home</a></li>
	  <li><a href="gallery.php">Gallery</a></li>
	  <li><a href ="contact.php">Contact us</a></li>
	  <li><a href="login.php">Login</a></li>
	</ul>
	
	
	<div class="no-mobile"><p>&copy; Francesca Moore</p> <?php echo date ("d/m/Y"); ?> <br></div>
	
	  
	  <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
	  
	  <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://francescam.freewebhost.co.nz/DoctorWho/" data-via="francescalmoore" data-hashtags="DoctorWho">Tweet</a>
	  
	  <!-- Place this tag where you want the +1 button to render. -->
	<div class="g-plusone"></div>
    
	<!-- Place this render call where appropriate. -->
	<script type="text/javascript">gapi.plusone.go();</script>
  </footer>
 </body>
</html>