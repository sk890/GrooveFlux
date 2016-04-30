<?php
//Handle User Authentication
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");
require_once("html/navbar.html");

//Load grid serialization 
$grid_file=fopen("scripts/grid.txt","r");
$grid=fread($grid_file,filesize("scripts/grid.txt"));
fclose($grid_file);
$json_grid = json_decode($grid, true);
?>

	<body>
        <?php require_once("html/upload_modal.html"); ?>
		
		<!-- /gridster -->
		<div class="gridster" style="margin-top:55px">
			<ul id="grid_widget">
			</ul>
		</div>

        <?php require_once("js/init_gridster_upload.php");?>

	</body>
</html>
