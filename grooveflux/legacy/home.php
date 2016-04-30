<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<title>Groove Flux</title>
		<link rel="stylesheet" type="text/css" href="css/jquery.gridster.min.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="js/jquery.gridster.min.js"></script>
	</head>
	<body>
		<script type="text/javascript">
			$(function(){ //DOM Ready

				$(".gridster ul").gridster({
					widget_margins: [5, 5],
					widget_base_dimensions:  [300, 48]
				});

			});
		</script>
		
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Groove-Flux</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="home.php">Home</a></li>
					<li><a href="collective.php">Collective</a></li>
					<li><a href="contact.php">Contact</a></li> 
					<li><a href="about.php">About Us</a></li> 
				</ul>
			</div>
		</nav>
		
		<!-- /gridster -->
		<div class="gridster" style="margin-top:55px">
			<ul>
				<li data-row="1" data-col="1" data-sizex="2" data-sizey="3"><a href="http://rex.greyareaprod.com/"><img src="img/rex.jpg"></a></li>
				<li data-row="1" data-col="3" data-sizex="1" data-sizey="3"><a href="http://222ormsby.tumblr.com/"><img src="img/ormsby.jpg"></a></li>
				<li data-row="1" data-col="4" data-sizex="1" data-sizey="2"><a href="https://soundcloud.com/obviouspgh"><img src="img/obvious.jpg"></a></li>
				<li data-row="3" data-col="2" data-sizex="3" data-sizey="2"><a href="https://soundcloud.com/buku"><img src="img/buku.jpg"></a></li>
				<li data-row="4" data-col="1" data-sizex="1" data-sizey="6"><a href="https://onwardprogress.bandcamp.com/"><img src="img/onward.jpg"></a></li>
				<li data-row="4" data-col="2" data-sizex="1" data-sizey="3"><a href="https://soundcloud.com/derleemusic"><img src="img/derlee.jpg"></a></li>
				<li data-row="5" data-col="2" data-sizex="2" data-sizey="3"><a href="http://www.thrivalfestival.com/"><img src="img/thrival.jpg"></a></li>	
			</ul>
		</div>

	</body>
</html>