<?php
require_once("models/config.php"); 
if(isUserLoggedIn()){
    require_once("models/header.php");
    require_once("html/navbar.html");
    require_once("html/upload_modal.html"); 

} 
else{ 
   require_once("html/header_unsecure.html");
   require_once("html/navbar_unsecure.html"); 
} 

?>

	<body>
    <center><img id="page_header" src="img/page_header.jpg" ></center>

	<div class="well well-lg" >
		<h1>Groove-Flux</h1>
		<p>Groove Flux is a social network that aims to strengthen the local music scene by providing a platform for musicians to deliver their music to the local populace,  promotion companies to publish their local event and fans to discover local musicians/events quickly and easily.</p>
	</div>
	
    <script type='text/javascript'>
        $('#aboutus').addClass('active');
    </script>
	</body>
</html>