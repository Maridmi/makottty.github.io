<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/404.css">
	<?php require_once "pages/widgets/allhead.html"; ?>
    <title>Message success</title>
</head>
<body class="all">
<?php require_once "pages/widgets/header.php"; ?>
<?php
define("DB_HOSTNAME", "127.0.0.1");
define("DB_USERNAME", "makotty");
define("DB_PASSWORD", "2203");
define("DB_DATABASE", "makotty");
$conn = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "INSERT INTO contact (name, email, comment) VALUES ('$name', '$email', '$comment')";
if (mysqli_query($conn, $sql)) {
      echo " ";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

<div class="success">
	<div><h2>Your message have been sent!</h2></div>
	<a href="/contact"><div class="btn">back</div></a>
</div>

<div class="bottom">
	<div class="bot">
		<div class="bot1">
			<a href="/about">About Makotty</a>
			<a href="/portfolio">Portfolio</a>
		</div>
		<a href="/"><img src="img/m.png" style="width: 90px; margin-left: 40px;"></a>
		<div class="bot1">
			<a href="/prices">Pricing</a>
			<a href="/contact">Contact</a>
			<a href="/contact">Help</a>
		</div>
	</div>
	<div class="copy" style="background-color: black; width: 100%; height: 100%; color:rgba(255,255,255,0.6); text-align: center; font-size: 15px; margin: 0">
		<footer>&copy2018 Makotty</footer>
	</div>
</div>
</body>
</html>
