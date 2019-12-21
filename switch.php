<!DOCTYPE html>
<html>
<body>
<?php 
$favcolor = "black,red,green";
switch ($favcolor)
{
	case "black":
	   echo "my fav color is red!";
	   break;
	case "blue":
	   echo "my fav color is blue!";
	   break;
	case "green":
	   echo "my fav color is green!";
	   break;
	   default:
         echo "my fav color is neither red,blue,nor green!";
}
?>		 