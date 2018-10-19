<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once "pages/widgets/allhead.html"; ?>
    <title>M A K O T T Y</title>
</head>
<body style="background: linear-gradient( white 50%, gray)">
<?php require_once "pages/widgets/header.php"; ?>
<div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carousel1.jpg">
      <div class="carousel-caption">
    	<h1 class="h1 glow">M A K O T T Y</h1>
    	<h3 class="h3 glow">I got something for you.</h3>
  	  </div>
    </div>
    <div class="carousel-item">
      <img src="img/carousel2.JPG">
      <div class="carousel-caption">
    	<h1 class="h1 glow">New tattoo</h1>
    	<h3 class="h3 glow">Is the best way to solve all of your problems</h3>
  	  </div>
    </div>
    <div class="carousel-item">
      <img src="img/carousel.jpg">
      <div class="carousel-caption">
    	<h1 class="h1 glow">If you think about it</h1>
    	<h3 class="h3 glow">It's time to do it!</h3>
  	  </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<div class="media border p-3 about_makotty">  		
	<img src="img/photo.png">
  		<div class="media-body">
    	<h3>Hey! My name's Mary</h3>
    	<p><br/>I am from Chelyabinsk, Russia. Now I'm livin' in Saint Petersburg. Art is a part of my life and I love it. I finished a School of Fine Arts in my hometown. I studied there for five years. I think that means a lot for my skill. I draw as long as I can remember.<br/><br/>A year ago, I finished tattoo courses and during this year  I sketched and created pictures on the bodies. I acquired professional equipment and imbued with the subtleties of this art. <br/><br/>If you're dreaming about tattoo I will fulfill this dream. Dreams must come true.<br/>More information about me you may find <a href="/about" style="text-decoration: none;">here</a>.</p>
  		</div>
	</div>
</div>

<div class="contact_makotty">
	<?php require_once "pages/widgets/modal.html"; ?>
</div>

<div class="topic">
  <h2>What's my business?</h2>
  <p>My services:</p>
  <div class="bus">
    <a href="/services#tattoo" class="img_cont"><img src="img/tat.png">
    <div class="after glow1"><span style="display:block; margin-top:35%">tattooing</span></div></a>
    <a href="/services#sketch" class="img_cont"><img src="img/sketching.png">
    <div class="after glow1"><span style="display:block; margin-top:35%">sketches</span></div></a>
    <a href="/services#coverup" class="img_cont"><img src="img/coverup.png">
    <div class="after glow1"><span style="display:block; margin-top:35%">cover-up</span></div></a>
  </div>
</div>

<div class="topic">
	<h2>And if you want more...</h2>
	<p>Discounts special for you:</p>
	<div class="bus">
		<a href="/discounts#graphic" class="img_cont"><img src="img/graphic.png">
    <div class="after glow1"><span style="display:block; margin-top:12%">discount<br/>for graphic<br/>tattoos</span></div></a>
		<a href="/discounts#pair" class="img_cont"><img src="img/pairs.png">
    <div class="after glow1"><span style="display:block; margin-top:12%">discount<br/>for pair<br/>tattoos</span></div></a>
		<a href="/discounts#certificates" class="img_cont"><img src="img/sertif.png">
    <div class="after glow1"><span style="display:block; margin-top:20%">tattoo<br/>certificates</span></div></a>
	</div>
</div>

<?php require_once "pages/widgets/footer.html"; ?>
</body>
</html>