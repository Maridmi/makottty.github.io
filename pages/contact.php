<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/contact.css">
	<?php require_once "pages/widgets/allhead.html"; ?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <title>Contact with makotty</title>
</head>
<body class="all">
<?php require_once "pages/widgets/header.php"; ?>

<div id="contact" class="container-fluid bg-grey">
  <h2 class="glow" style="margin: 30px">Contact</h2>
  <div class="row" style="margin: 20px;">
    <div class="left" style="margin: 1% 0 0 10%">
      <p><span class="glyphicon glyphicon-map-marker" style="opacity: 0.7">Russia, Saint-Petersburg</p></span>
      <p><span class="glyphicon glyphicon-phone" style="opacity: 0.7">Phone: </span><a href="tel:+79080934835">+7(908)-093-48-35</a></p>
      <p><span class="glyphicon glyphicon-envelope" style="opacity: 0.7">E-mail: </span><a href="http://www.gmail.com/">yarova0marina@gmail.com</a></p>
      <p><span class="glyphicon glyphicon-envelope" style="opacity: 0.7">Instagram: </span><a href="http://www.intagram.com/xsilxx/">xsilxx</a></p>
      <p><span class="glyphicon glyphicon-envelope" style="opacity: 0.7">Personal Instagram: </span><a href="http://www.intagram.com/_mari_rina_/">_mari_rina_</a>
      <p><span class="glyphicon glyphicon-envelope" style="opacity: 0.7">VK: </span><a href="https://vk.com/mari__rina">Marina Yarova</a></p>
      <p><span class="glyphicon glyphicon-envelope" style="opacity: 0.7">GitHub: </span><a href="https://www.github.com/Maridmi/">Maridmi</a></p>
    </div>
    <form action="/form" method="post" class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
        	<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
        	<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comment" name="comment" placeholder="Comment" type="text" rows="7"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div id="googleMap" style="height:400px;width:100%"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(59.916350, 30.318495);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-qtVI5Hzg5Y8rqEMUX-iFEHTekCnD24I&callback=myMap"></script>
<?php require_once "pages/widgets/footer.html"; ?>
</body>
</html>