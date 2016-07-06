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
				<h3 class="tuto-title">Rating Star System</h3>
				<p class="tuto-text"> This tutorials is made for learn you how to make a rapid and easy rating star system in full CSS. </p>
				<p class="tuto-text"> The creation of this system is really easy, and take a really a little time. </p>
				<h4 class="tuto-sub-title">Demonstration : </h4>
				<div class="col-md-6">
		    		<div class="rating"><!--
					   --><a href="#5" title="Donner 5 étoiles">☆</a><!--
					   --><a href="#4" title="Donner 4 étoiles">☆</a><!--
					   --><a href="#3" title="Donner 3 étoiles">☆</a><!--
					   --><a href="#2" title="Donner 2 étoiles">☆</a><!--
					   --><a href="#1" title="Donner 1 étoile">☆</a>
					</div>
				</div>
				<div class="col-md-12">
					<h4 class="tuto-sub-title">HTML containt: </h4>
					<p class="tuto-text"> The HTML code is really basics, you have a first div with the class rating, for contains the 5stars.
					 Then you just have to put the five stars with a link with a marked. Each one of them have a class with the number of the 
					 stars. For now this code doesn't work, but no worry we are gonna to add some css for do this code work.</p>
					<textarea readonly class="rating-area-html">
1| 	<div class="rating">
2|      	<a href="#5" title="Donner 5 étoiles">☆</a>
3|      	<a href="#4" title="Donner 4 étoiles">☆</a>
4|      	<a href="#3" title="Donner 3 étoiles">☆</a>
5|      	<a href="#2" title="Donner 2 étoiles">☆</a>
6|      	<a href="#1" title="Donner 1 étoile">☆</a>
7| 	</div>
					</textarea>
				</div>
								<div class="col-md-12">
					<h4 class="tuto-sub-title">CSS containt: </h4>
					<p class="tuto-text"> The CSS is not really complicated, execpted direction attribute on the rating div. For explains 
						direction is here for said what direction use for read the a link, here rtl is for Right To Left. Then the rest of 
						the CSS is for configure the comportment of the links when they are hover or focus(active).</p>
					<textarea readonly class="rating-area-css">
  1|	.rating {
  2|	   direction: rtl;
  3|	}
  4|	.rating a {
  5|	   color: #aaa;
  6|	   text-decoration: none;
  7|	   font-size: 3em;
  8|	   transition: color .4s;
  9|	}
10| 	.rating a:hover,
11| 	.rating a:focus,
12| 	.rating a:hover ~ a,
13| 	.rating a:focus ~ a {
14| 	   color: orange;
15| 	   cursor: pointer;
16| 	}
					</textarea>
					<p class="tuto-text"> Well Done !! Now you know how to make a rating stars in CSS</p>
				</div>
	    	</div>
    	</div>

	</body>

	<?php 
		include("footer.php"); 
	?>

</html>