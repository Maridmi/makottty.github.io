<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/services.css">
    <title>Discounts</title>
	<?php require_once "pages/widgets/allhead.html"; ?>
</head>
<body data-spy="scroll" data-target="#myScrollspy" class="all">
<?php require_once "pages/widgets/header.php"; ?>

<div class="cont">
	<nav id="myScrollspy" class="nav nav-pills nav-stacked" data-spy="affix">
		<div>
		<a href="#gift">Discounts and Gifts</a>
	  	<ul>
	        <li><a href="#graphic">Discount for graphic tattoos</a></li>
	        <li><a href="#pair">Tattoo for pairs</a></li>
	        <li><a href="#certificates">Tattoo sertificates</a></li>
		</ul>
		</div>
	</nav>

	<div class="scroll1">
   	  <div id="gift">    
        <h1>Discounts and Gifts</h1>
      </div>
      <div class="et" id="graphic">    
        <h2>Discount for graphic tattoos</h2>
        <p>Big sales for graphic tattoos: from 10% to 30%!!!</p>
        <div class="column1">
	        <a class="thumbnail" href="img/15.jpg" target="_blank">
	          <img src="img/15.jpg">
	        </a>
		</div>
      </div>
      <div class="et" id="pair"> 
        <h2>Tattoo for pairs</h2>
        <p>This is for you and your close friend. Do you want to have a part of the person always with you? It is a good oportunity to do this. 50% sale for pair tattoos!</p>
        <div class="column1">
	        <a class="thumbnail" href="img/17.jpg" target="_blank">
	          <img src="img/17.jpg">
	        </a>
		</div>
      </div>        
      <div class="et" id="certificates">
        <h2>Tattoo sertificates</h2>
        <p>The best gift is the gift for whole life.</p>
        <div class="column1">
	        <a class="thumbnail" href="img/2.jpg" target="_blank">
	          <img src="img/2.jpg">
	        </a>
		</div>
      </div>
	</div>
</div>
<?php require_once "pages/widgets/footer.html"; ?>
</body>
</html>