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
		<link type='text/css' rel='stylesheet' href='./css/bootstrap.min.css'>
		<link type='text/css' rel='stylesheet' href='./css/csshake.min.css'>
		<link type='text/css' rel='stylesheet' href='./css/style.css'>

	</head>
	<body>
		<?php 
			include("header.php"); 
		?>

		<!-- Jquery Parallax  -->
		<div id="landing-content">
    		<section class="slider">
    			<div id="main-title"> 
    				<h1> AnonyDesign </h1>
    				<hr>
	    			<h2> Tutorials for Digital Design and Developement</h2>
	    		</div>
        	</section>
        	<a href="#target"><span class="ico glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>  
    	</div>
    	<a name="target"></a>
    	<div class="main-desc col-md-12">
    		<div class="col-md-4">
    			<h3 class="desc-title"> Developpement </h3>
    			<span class="desc-ico glyphicon glyphicon-hdd" aria-hidden="true"></span>
    			<p class="desc"> Learn how to create nice and good function in your code, special trick and tutorial. Create scripting with PHP, Ajax and html.</p>
    		</div>
    		<div class="col-md-4 central-div">
    			<h3 class="desc-title"> Design </h3>
    			<span class="desc-ico glyphicon glyphicon-eye-open" aria-hidden="true"></span>
    			<p class="desc"> Learn to Create responsive, pretty and good design with CSS and Jquery. For a better template.</p>
    		</div>
    		<div class="col-md-4">
    			<h3 class="desc-title"> Animation </h3>
    			<span class="desc-ico glyphicon glyphicon-send" aria-hidden="true"></span>
    			<p class="desc"> Try to create nice animation, and interactive website with these tutorials for Jquery, CSS.</p>
    		</div>
    	</div>

    	<!-- Auto Writter Text (textdyna.js)-->
    	<div class="col-md-12">
			<div class="col-md-1"></div>
	    	<div class="last-desc col-md-10">
	    		<div class="col-md-1 gly">
		    		<p><span class="glyphicon glyphicon-console" aria-hidden="true"> $</span></p>
		    	</div>
		    	<div class="col-md-11">
		    		<p><div class="dyna-text"></div></p>
		    	</div>
	    	</div>
	    	<div class="col-md-1"></div>
	    </div>

	    <div clas="col-md-12">
	    	<div class="col-md-6 cita-div right-border">
	    		<div class="col-md-1">
	    			<p class="quote"> “ </p>
	    		</div>
	    		<div class="col-md-11">
		    		<p class="citation">Designers can create normalcy out of chaos; they can clearly communicate ideas through the organising and manipulating of words and pictures</p>
					<p class="author">- Jeffrey Veen</p>
				</div>
	    	</div>
	    	<div class="col-md-6 cita-div">
	    		<div class="col-md-1">
	    			<p class="quote"><i> “ </i></p>
	    		</div>
	    		<div class="col-md-11">
		    		<p class="citation">If you know how to use a pencil to draw, you could draw anything. Now apply that to everything in life</p>
					<p class="author">- Justin Durban</p>
				</div>
	    	</div>
	    </div>
	</body>

	<?php 
		include("footer.php"); 
	?>

</html>