<?php
    header("Content-type: text/css; charset: UTF-8");

   $boxColor = "#E8E8E8";
   $boxHeight = "300px";
   $imgPath = "";
   
   $dayLenghtHours = 6;
   $dayLenghtMin = $dayLenghtHours*60;
   $frameLenght = 1800;
   $pixelPerMin = $frameLenght/(2*60); //probs 15
   $totalTime = 3;
   
   $startingTime = "8:00";
   $startingHour = 8;
   $startingMin = 0;
   
   // G = hours with without leading zeros, H = with zeroes, i = minuttes with zeroes
   $currentTime = date("G:i"); //fx 10:23
   $currentHour = idate("H");
   $currentMin = idate("i");
   
   
   
?>

* {
	margin: 0;
    padding: 0;
    border: 0;
}

body {
	padding-top: 0px;
}

div#wrapper::after { 
    content: "<?php echo "Current time: ".$currentTime; ?>";
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
	$predefined_animation = "animation: mymove 200s 1;";
	$predefined_animationFillMode = "animation-fill-mode: forwards;";
	$predefined_animationTimingFunction = "animation-timing-function: linear;";
	
	?>
	
	<?php echo $predefined_animation."\n"; ?>
	<?php echo "-webkit-".$predefined_animation."\n"; ?>
	<?php echo $predefined_animationFillMode."\n"; ?>
	<?php echo "-webkit-".$predefined_animationFillMode."\n"; ?>
	<?php echo $predefined_animationFillMode."\n"; ?>
	<?php echo "-webkit-".$predefined_animationFillMode."\n"; ?>
}

div#outerBox > div { /* Targets all divs one level inside outerBox */
	/* border: 1px solid black; */
	display: inline-block;
}

div#box1 {
	background: <?php echo $boxColor; ?>;
	width: 400px;
	height: <?php echo $boxHeight; ?>;
	background-image: url('../images/books-icon.png');
	background-repeat: no-repeat;
    background-position: center; 
}

div#box2 {
	background: <?php echo $boxColor; ?>;
	width: 400px;
	height: <?php echo $boxHeight; ?>;
	background-image: url('../images/math-icon.png');
	background-repeat: no-repeat;
    background-position: center; 
}

div#box3 {
	background: <?php echo $boxColor; ?>;
	width: 400px;
	height: <?php echo $boxHeight; ?>;
	border-right: 2px solid black;
	border-left: 2px solid black;
}

div#box4 {
	background: <?php echo $boxColor; ?>;
	width: 200px;
	height: <?php echo $boxHeight; ?>;
}

div#box5 {
	background: <?php echo $boxColor; ?>;
	width: 600px;
	height: <?php echo $boxHeight; ?>;
}



img#seperator {
	position:absolute;
	top: -7px;
	left: 200px;
	z-index:1;
}

<?php
	$pixelsToMoveHours = $startingHour - idate("H");
	$pixelsToMoveMins = $startingMin;

?>


/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    from {right: -208px;}
    to {right: 1800px;} /* Lengt of animation in pixels */
}

@keyframes mymove {
    from {right: -208px;}
    to {right: 1800px;} /* Lenght of animation in pixels */
}