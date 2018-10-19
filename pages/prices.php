<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/prices.css">
	<?php require_once "pages/widgets/allhead.html"; ?>
    <title>Prices</title>
</head>
<body class="all">
<?php require_once "pages/widgets/header.php"; ?>

<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2 style="margin: 35px 0 10px 0">Pricing</h2>
    <h4>Services I offer and prices</h4>
  </div>
  <div class="row slideanim">
      <div class="panel1 panel-default text-center">
        <div class="heading">
          <h1>Tattoo</h1>
        </div>
        <div class="panel-body">
	      <ul>
	          <li><p>Minimal price<br/><strong>1000 rub</strong></p></li>
	          <li><p>One session (2 hours)<br/><strong>2000 rub</strong></p></li>
	          <li><p>After three sessions<br/><strong>1500 rub</strong></p></li>
	      </ul>
        </div>
        <div class="panel-footer">
          <h4>5%</h4>
          <h5>Sale for regular customers</h5>
          <button class="btn btn-lg glow"><a href="/contact">Contact</a></button>
        </div>
      </div>      
      <div class="panel2 panel-default text-center">
        <div class="heading">
          <h1>Drawing</h1>
        </div>
        <div class="panel-body">
	      <ul>
	          <li><p>Portraits (pencils, watercolor)<br/><strong>From 700 rub</strong> </p></li>
	          <li><p>Portraits (oil)<br/><strong>From 2000 rub</strong></p></li>
	          <li><p>Any other painting<br/><strong>There's no fixed price</strong></p></li>
	      </ul>
        </div>
        <div class="panel-footer">
          <h4>10%</h4>
          <h5>Sale for regular customers</h5>
          <button class="btn btn-lg glow"><a href="/contact">Contact</a></button>
        </div>
      </div>      
    </div> 
<p class="description">* Services are paid after provision.</p>      
</div>

<?php require_once "pages/widgets/footer.html"; ?>
</body>
</html>