<!DOCTYPE HTML>
<?php

	function __autoload($class_name) {
    include "classes/".$class_name .".php";
	}
	
?>

<html>
	<head>
		<title>Visual Representation</title>
		<?php 
		if (empty($_GET['page'])) { 
    		$_GET['page']='slow'; 	
		}
		if($_GET["page"] == "fast") {
			header( "refresh:30;url=visualRepresentation.php?page=slow" );
		}
		?>
		<link href="style/mainStyle.php <?php  if($_GET["page"] == "fast") { echo "?page=fast"; } else { echo "?page=slow";} ?>" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="time.js"></script>
		<script type="text/javascript" src="keypress.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="frame">
				<img id="seperator" src="images/seperator.png" />
				<div class="arrow-up"></div>
				<div id="date_time"></div>
            	<script type="text/javascript">window.onload = date_time('date_time');</script>
            	<input type="text" class="textbox newTopicTextbox" />
				<div id="outerBox">
					<?php
					/*
					// fetch array of articles with less code
					$q = "SELECT * FROM lessons ORDER BY position";
					$a = $db->fetch_all_array($q);
					if (!empty($a)) {
					  foreach ($a as $k => $v) {
					    echo "{$v['classSubject']} has {$v['minuteLenght']}\n";
					  }
					}
					 * 
					 */
					// start database connection localhost, username, password, database_name
					$db = new SimpleDatabaseUtil('localhost', 'root', '', 'ScheduleForKids');
					// query database
					$q = "SELECT * FROM lessons ORDER BY position";
					$r = $db->query($q);
					
					$combinedTime = 8*60; //starting time
					// if we have a result loop over the result
					if ($db->num_rows($r) > 0) {
					  while ($a = $db->fetch_array_assoc($r)) { ?><div class="min<?php echo $a['minuteLenght']; ?>" style="background-color: <?php echo $a['bgcolor']; ?>; background-image: url(images/<?php echo $a['picture']; ?>.png);">
						<span class="scheduleClock"><?php echo floor($combinedTime/60) .":". sprintf("%02s", $combinedTime%60); $combinedTime += $a['minuteLenght']; ?></span>
						<!--<input type="text" class="textbox" /> -->
					</div><?php
					  }
					} ?><div class="freedom pause" style="background-color: #e1f0e3; background-image:url(images/home.png)">
						<span class="scheduleClock">13:50</span>
					</div>

					<!--
					<div class="min45" style="background-color: #eef2cc; background-image: url(images/matematikpicture.png);">
						<span>8:00</span>
					</div><div class="min45" style="background-color: #eef2cc; background-image: url(images/matematik2picture.png);">
						<span>8:45</span>
					</div><div class="min20 pause" style="background-color: #b9d7ee; background-image:url(images/pause2picture.png);">
						<span>9:30</span>
					</div><div class="min60" style="background-color: #fdece6; background-image: url(images/danskpicture.png);">
						<span>9:50</span>
					</div><div class="min45" style="background-color: #fdece6; background-image: url(images/dansk2picture.png);">
						<span>10:50</span>
					</div><div class="min45 pause" style="background-color: #e1f0e3; background-image: url(images/pausepicture.png);">
						<span>11:35</span>
					</div><div class="min45" style="background-color: #b9d7ee; background-image:url(images/kristendompicture.png);">
						<span>12:20</span>
					</div><div class="min45" style="background-color: #fdece6; background-image: url(images/dansk3picture.png);">
						<span>13:05</span>
					</div><div class="freedom pause" style="background-color: #e1f0e3; background-image:url(images/home.png)">
						<span>13:50</span>
					</div>
					
					// Kode for keywords fra DB
					<?php if(!empty($a['keywords'])) { ?><div class="keywords"><?php echo $a['keywords'] ?></div><?php } else { ?><div class="keywords"> </div><?php } ?>
					
					-->
                    
				</div>
			</div>
		</div>
		
		
	</body>
</html>