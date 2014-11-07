<?php
    header("Content-type: text/css; charset: UTF-8");

   $boxColor = "#E8E8E8";
   $boxHeight = "700px";
   $imgPath = "";
   
?>

* {
	margin: 0;
    padding: 0;
    border: 0;
}

body {
	padding-top: 0px;
}

div#wrapper {
	position: relative;
	top: 50px;
	left: 0px;
	margin-right: auto;
	margin-left: auto;
	width: 1800px;
	white-space: nowrap;
	
}

div#frame {
	overflow: hidden;
	border: 2px solid black;
	width: 100%;
	height: <?php echo $boxHeight; ?>
	border-radius: 8px;
}

div#outerBox {
	position: relative;
    animation: mymove 200s 1;
    -webkit-animation: mymove 200s 1;  /* Chrome, Safari, Opera */
    animation-fill-mode: forwards;
    -webkit-animation-fill-mode: forwards; /* Chrome, Safari, Opera */
	animation-timing-function: linear;
	-webkit-animation-timing-function: linear;
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
	border-right: 1px solid black;
	border-left: 1px solid black;
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

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    from {right: -208px;}
    to {right: 1800px;} /* Lengt of animation in pixels */
}

@keyframes mymove {
    from {right: -208px;}
    to {right: 1800px;} /* Lenght of animation in pixels */
}