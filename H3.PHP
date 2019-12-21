<!DOCTYPE html>
<html>
<body>
<?php
$t=date("H");
if($t < "12") {
	echo "have a good day!";
}elseif($t > "12" && $t >"3"){
	echo "good day!";
}	else
{
	echo "have a good night!";
}
	
?>