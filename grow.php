<!DOCTYPE html>
<html>
	<head>
		<title>AnonyDesign</title>
		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		 <link rel="icon" type="image/x-icon" href="favicon.ico" />

		<!-- Font Family -->
		<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:500italic' rel='stylesheet' type='text/css'>

		<!-- Script et CSS  -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type='text/javascript' src='js/main.js'></script>
		<script type='text/javascript' src='js/parallax.js'></script>
		<script type='text/javascript' src='js/typed.js'></script>
		<script type='text/javascript' src='js/textdyna.js'></script>
		<link type='text/css' rel='stylesheet' href='css/bootstrap.min.css'>
		<link type='text/css' rel='stylesheet' href='css/csshake.min.css'>
		<link type='text/css' rel='stylesheet' href='css/style.css'>

	</head>
	<body>
		<?php 
			include("header.php"); 
		?>

		<div class="col-md-12 section-title">
			<h2> CSS design mode </h2>
		</div>
		<div class="col-md-12">
			<div class="col-md-3 tuto-list">
				<h3 class="list-title"> Basic Tricks : <h3>
				<ul>
					<a class="link-tuto-menu" href="rating.php"><li>Rating Star System</li></a>
					<a class="link-tuto-menu" href="grow.php"><li>Grow & Shrink</li></a>
					<a class="link-tuto-menu" href=""><li></li></a>
				</ul>
				<h3 class="list-title"> Medium Tricks : <h3>
				<ul>
					<a class="link-tuto-menu" href=""><li></li></a>
					<a class="link-tuto-menu" href=""><li></li></a>
					<a class="link-tuto-menu" href=""><li></li></a>
				</ul>
				<h3 class="list-title"> Hard Tricks : <h3>
				<ul>
					<a class="link-tuto-menu" href=""><li></li></a>
					<a class="link-tuto-menu" href=""><li></li></a>
					<a class="link-tuto-menu" href=""><li></li></a>
				</ul>
			</div>


			<div class="col-md-9">
				<h3 class="tuto-title">Grow & Shrink</h3>
				<p class="tuto-text"> This tutorials is made for learn you how to make a rapid and easy grow and shrink in full CSS. </p>
				<p class="tuto-text"> The creation of this system is really easy, and take a really a little time. </p>
				<h4 class="tuto-sub-title">Demonstration : </h4>
				<div class="col-md-6">
					<div class="col-md-3"></div>
		    		<div class="col-md-4 grow growshrink-content">
		    			<p> Grow</p>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-4 shrink growshrink-content">
		    			<p> Shrink</p>
					</div>
				</div>
				<div class="col-md-12">
					<h3 class="tuto-sub-title">Grow</h3>
					<h4 class="tuto-sub-title">HTML containt: </h4>
					<p class="tuto-text"> The grow is an easy trick in css that you can apply on everything: div, img or whatever you want.</p>
					<textarea readonly class="grow-area-html">
1| 	<div class="grow grow-content">
2| 	</div>
					</textarea>
				</div>
				<div class="col-md-12">
					<h4 class="tuto-sub-title">CSS containt: </h4>
					<p class="tuto-text"> The CSS is a really basic and just use transition and transform</p>
					<textarea readonly class="grow-area-css">
  1|.grow-content{
  2|    width:110px;
  3|    height:110px;
  4|    background:black;
  5|    transition:all 0.3s ease;
  6|    color: white;
  7|    text-align: center;
  8|    padding-top: 50px;
  9|}
10|.grow:hover {
11|    -webkit-transform: scale(1.3);
12|    -ms-transform: scale(1.3);
13|    transform: scale(1.3);
14|}
					</textarea>
				</div>

				<div class="col-md-12">
					<h3 class="tuto-sub-title">Shrink</h3>
					<h4 class="tuto-sub-title">HTML containt: </h4>
					<p class="tuto-text"> The shrink animation is nearly the same than grow, in css you can apply on everything too.</p>
					<textarea readonly class="grow-area-html">
1| 	<div class="shrink shrink-content">
2| 	</div>
					</textarea>
				</div>
				<div class="col-md-12">
					<h4 class="tuto-sub-title">CSS containt: </h4>
					<p class="tuto-text"> Like for the grow you use the same way with the transform and animation, but the scale value is not 1.3 but 0.8</p>
					<textarea readonly class="grow-area-css">
  1|.shrink-content{
  2|    width:110px;
  3|    height:110px;
  4|    background:black;
  5|    transition:all 0.3s ease;
  6|    color: white;
  7|    text-align: center;
  8|    padding-top: 50px;
  9|}
10|.shrink:hover {
11|    -webkit-transform: scale(0.8);
12|    -ms-transform: scale(0.8);
13|    transform: scale(0.8);
14|}
					</textarea>
					<p class="tuto-text"> Well Done !! Now you know how to make a Grow or a Shrink Animation in CSS</p>
				</div>
	    	</div>
    	</div>

	</body>

	<?php 
		include("footer.php"); 
	?>

</html>