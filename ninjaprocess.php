<?php 
session_start();

echo "<pre>";
echo "in Process <br>";
echo "-----POST-----<br>";
var_dump($_POST);
echo "----SESSION----" . "<br>";
var_dump($_SESSION); 


if(!isset($_SESSION['totalgold'])) 
{
	$_SESSION['totalgold'] = 0;
}

if(!isset($_SESSION['message']))
{
	$_SESSION['message'] = "Hello! You have zero G";
}



$date = date("l") . ", " . date("m/d/Y") . "<br>";




if(isset($_POST['building']) && $_POST['building'] == 'Village')
{

	echo "POSTED from Village ";
	$gold = rand(10,20);
	$_SESSION['totalgold'] = $_SESSION['totalgold'] + $gold;
	echo $_SESSION['totalgold']; 
	$_SESSION['message'] = $_SESSION['message'] . "You've entered a Village and earned" . $gold . "gold on: $date"; 
}

else if(isset($_POST['building']) && $_POST['building'] == 'Car')
{
	echo "POSTED from Car ";
	$gold = rand(5,10);
	$_SESSION['totalgold'] = $_SESSION['totalgold'] + $gold;
	echo $_SESSION['totalgold']; 
	$_SESSION['message'] = $_SESSION['message'] . "You've entered a Village and earned" . $gold . "gold on: $date"; 
}	

else if(isset($_POST['building']) && $_POST['building'] == 'house')
{
	echo "POSTED from house ";
	$gold = rand(2,5);
	$_SESSION['totalgold'] = $_SESSION['totalgold'] + $gold;
	$_SESSION['message'] = $_SESSION['message'] . "You've entered a House and earned" . $gold . "gold on: $date";
	echo $_SESSION['totalgold']; 
}	

else if(isset($_POST['building']) && $_POST['building'] == 'casino')
{
	echo "POSTED from Casino! ";
	$gold = rand(-50,50);
	$_SESSION['totalgold'] = $_SESSION['totalgold'] + $gold;
	$_SESSION['message'] = $_SESSION['message'] . "You've entered a Village and earned " . $gold . " gold on : $date ";
	echo $_SESSION['totalgold']; 
}


if(isset($_POST['building']) && $_POST['building'] == 'RESET')
{
	$_SESSION['totalgold'] = 0;
	$_SESSION['message'] = "Your Gold Has Been Stolen!" ;
}
// $_SESSION['message'] =$message ;  
// // $_SESSION['date'] = $date;
// 

header ('Location: ninjagame.php'); 

?>