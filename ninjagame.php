<?php

session_start();

?>


<html>
<head>
	<title> Ninja Gold </title>
	<link rel="stylesheet" type="text/css" href="ninjastyle.css">

</head>
<body>

<?php

if(!isset($_SESSION['totalgold'])) 
{
	$_SESSION['totalgold'] = 0;
}

if(!isset($_SESSION['message']))
{
	$_SESSION['message'] = "";
}

?>

	<div class="container"> 
		<div class="header"> 
			<h1> Total Gold Won: </h1>
			<h2> <?php echo $_SESSION['totalgold']; ?> </h2>
		</div>

		<div class="body">
			<div class ="box"> 
			<h1>Village</h1>
			<p> (Earns 10-20 golds)</p>
			<form action="ninjaprocess.php" method="post">
			    <input type="hidden" name="building" value="village">
			    <input type="submit" value="Find Gold!">
			</form>

			</div>

			<div class ="box">
				<h1>Car</h1>
				<p> (Earns 5-10 golds) </p>
				<form action="ninjaprocess.php" method="post">
				    <input type="hidden" name="building" value="car">
				    <input type="submit" value="Find Gold!">
				</form>
	
			</div>

			<div class ="box">
				<h1> House </h1>
				<p> (Earns 2-5 golds) </p>
				<form action="ninjaprocess.php" method="post">
				    <input type="hidden" name="building" value="house">
				    <input type="submit" value="Find Gold!">
				</form>
			</div>

			<div class ="box">
			<h1> Casino! </h1>
			<p> (Earns/Takes 0 - 50 golds) </p>
			<form action="ninjaprocess.php" method="post">
				    <input type="hidden" name="building" value="casino">
				    <input type="submit" value="Find Gold!">
			</form>
			</div>
		</div>

		<br>
			<div class="footer">
				<form action="ninjaprocess.php" method="post">
				    <input type="hidden" name="building" value="RESET">
				    <input type="submit" value="RESET">
				</form>
				<label> Activities </label>
			
				<br>

				<div class="messages">
	 			<?php echo $_SESSION['message'] ?> 
				</div>
	
			</div>
	</div>


</body>
</html>