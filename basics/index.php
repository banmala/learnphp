<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn PHP</title>
</head>
<body>
	<?php
		// $a = 56;
		// $b = 96;
		// echo($a+$b);
		// $str = "H said,'I am a boy'";
		// // echo($str);
		// function func(){
		// 	// global $str;
		// 	echo($str);
		// }
		// func();
	?>

	<?php
		// function my_func(){
		// 	for($i=0;$i<10;$i++){
		// 		for($j=0;$j<$i;$j++){
		// 			echo($i." ");
		// 		}
		// 		echo("<br>");
		// 	}
		// }
		// my_func();
	?>

	<?php
		// $str="Hello i am sunil banmala from index page!!";
		// echo(str_replace("i","I",$str));

		ob_start();
		@header('location: login.php');
	?>
	<script src="js/main.js"></script>
</body>
</html>
	