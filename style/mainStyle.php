<?php
    header("Content-type: text/css; charset: UTF-8");

   $boxColor = "#E8E8E8";
   $boxHeight = "400px";
   $imgPath = "";
   
   $dayLenghtHours = 6;
   $dayLenghtMin = $dayLenghtHours*60;
   $frameLenght = 1800;
   $pixelPerMin = $frameLenght/(2*60); //probs 15
   $totalTime = 3;
   
   $totalMin = 530;
   $totalSec = $totalMin*60;
   $totalPixels = $totalMin*15;
   
   $startingTime = "8:00";
   $startingHour = 15;
   $startingMin = 0;
   $startingSec = 0;
   
   // G = hours with without leading zeros, H = with zeroes, i = minuttes with zeroes
   $currentTime = date("G:i"); //fx 10:23
   $currentHour = idate("H");
   $currentMin = idate("i"); 
   
   //Calculates the current starting pixel position
   if(idate("H") >= $startingHour) {
		$pixelsToMoveHours = idate("H") - $startingHour;
	}
	else {
		$pixelsToMoveHours = 0;
	}
	if(idate("i") >= $startingMin) {
		$pixelsToMoveMins = idate("i") - $startingMin + $pixelsToMoveHours*60;
	}
	else {
		$pixelsToMoveMins = $pixelsToMoveHours*60;
	}
	if(idate("s") >= $startingSec) {
		$pixelsToMoveSecs = idate("s") - $startingSec + $pixelsToMoveMins*60;
	}
	else {
		$pixelsToMoveSecs = $pixelsToMoveMins*60;
	}
	$pixelsToMoveSecs = $pixelsToMoveMins*60 + idate("s");
	$pixelsToMove = ceil($pixelsToMoveSecs/4); //every 4th second it should move one pixel
	
	$animationSecs = $totalSec-$pixelsToMoveSecs;
   
   
?>

@font-face {
    font-family: robotoFont;
    src: url(Roboto-Condensed.ttf);
}

* {
	margin: 0;
    padding: 0;
    border: 0;
}

body {
	padding-top: 0px;
}

.arrow-up {
	width: 0; 
	height: 0; 
	border-left: 15px solid transparent;
	border-right: 15px solid transparent;
	
	border-bottom: 20px solid #262626;
	
	position:absolute;
	top: 384px;
	left: 186px;
	z-index:1;
}

div#date_time {
	position:absolute;
	top: 404px;
	left: 50px;
	z-index:1;
	width: 300px;
	height: 150px;
	background: #262626;
	
	line-height: 150px;
	font-family: robotoFont;
	font-weight: bold;
	font-size:120px;
	color: white;
	text-align: center;
}

div#wrapper::after { 
    /*content: "<?php echo "Current time: ".$currentTime; ?>";*/
}

div#wrapper {
	position: relative;
	top: 50px;
	left: 0px;
	margin-right: auto;
	margin-left: auto;
	width: <?php echo $frameLenght; ?>px;
	white-space: nowrap;
}

div#frame {
	overflow: hidden;
	border: 2px solid black;
	width: 100%;
	height: <?php echo $boxHeight; ?>;
	border-radius: 8px;
}

div#outerBox {
	position: relative;
	
	<?php
	$predefined_animation = "animation: mymove ".$animationSecs."s 1;";
	$predefined_animationFillMode = "animation-fill-mode: forwards;";
	$predefined_animationTimingFunction = "animation-timing-function: linear;";
	
	?>
	
	<?php echo $predefined_animation."\n"; ?>
	<?php echo "-webkit-".$predefined_animation."\n"; ?>
	<?php echo $predefined_animationFillMode."\n"; ?>
	<?php echo "-webkit-".$predefined_animationFillMode."\n"; ?>
	<?php echo $predefined_animationFillMode."\n"; ?>
	<?php echo "-webkit-".$predefined_animationTimingFunction."\n"; ?>
}

div#outerBox > div { /* Targets all divs one level inside outerBox */
	/* border: 1px solid black; */
	display: inline-block;
	box-sizing:border-box;
    -moz-box-sizing:border-box;
    -webkit-box-sizing:border-box;
	background: <?php echo $boxColor; ?>;
	height: <?php echo $boxHeight; ?>;
	background-repeat: no-repeat;
    background-position: center;
}

div.min20 {
	width: 300px;
}

div.min45 {
	width: 675px;
}

div.min60 {
	width: 900px;
}

div.pause {
	border-right: 2px solid #363636;
	border-left: 2px solid #363636;
}

div.freedom {
	width: 2700px;
}


img#seperator {
	position:absolute;
	top: 0px;
	left: 200px;
	z-index:1;
}


/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    from {right: <?php echo -208+$pixelsToMove; ?>px;}
    to {right: <?php echo $totalPixels; ?>px;} /* Lengt of animation in pixels */
}

@keyframes mymove {
    from {right: <?php echo -208+$pixelsToMove; ?>px;}
    to {right: <?php echo $totalPixels; ?>px;} /* Lenght of animation in pixels */
}