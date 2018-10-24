<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/services.css">
    <title>Services</title>
	<?php require_once "pages/widgets/allhead.html"; ?>
</head>
<body data-spy="scroll" data-target="#myScrollspy" class="all">
<?php require_once "pages/widgets/header.php"; ?>

<div class="cont">
	<nav id="myScrollspy" class="nav nav-pills nav-stacked" data-spy="affix">
		<div>
		<a href="#services">Services</a>
	    <ul>
	        <li><a href="#tattoo">Tattooing</a></li>
	        <li><a href="#sketch">Sketching</a></li>
	        <li><a href="#coverup">Cover-up</a></li>
	        <li><a href="#correction">Tattoo correction</a></li>
	    </ul>
		</div>
	</nav>

	<div class="scroll1">
      <div id="services">
        <h1>Services</h1>
      </div>  
      <div class="et" id="tattoo">
        <h2>Tattoo</h2>
        <p>Any complexity, overlapping / correction of old and poor-quality tattoos, tattoo on postoperative scars, chemical and thermal burns, traces of stitches. I am working in different styles (techniques, directions): old school, tribal, celtic, Black & Gray, oriental, dot work, black work, ornamental, etc.</p>
        <div class="column1">
	        <a class="thumbnail" href="img/1.jpg" target="_blank">
	          <img src="img/1.jpg">
	        </a>
		</div>
      </div>      
      <div class="et" id="sketch">
        <h2>Sketching</h2>
        <p>I will draw for you an individual tattoo sketch!</p>
        <div class="column1">
	        <a class="thumbnail" href="img/24.jpg" target="_blank">
	          <img src="img/24.jpg">
	        </a>
		</div>
      </div>    
      <div class="et" id="coverup">
        <h2>Cover-up</h2>
        <p>With a beautiful tattoo I will cover your old irrelevant tattoos, as well as mask the scars and skin defects of various origins.</p>
        <div class="column1">
	        <a class="thumbnail" href="img/12.jpg" target="_blank">
	          <img src="img/12.jpg">
	        </a>
		</div>
      </div>
      <div class="et" id="correction">
        <h2>Tattoo correction</h2>
        <p>I will correct the existing and faded tattoo - if you really like it, and you just want to give yoyr tattoo a new life.</p>
        <div class="column1">
	        <a class="thumbnail" href="img/5.jpg" target="_blank">
	          <img src="img/5.jpg">
	        </a>
		</div>
      </div>  
	</div>
</div>
<?php require_once "pages/widgets/footer.html"; ?>
</body>
</html>