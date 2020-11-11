<?php
if(isset($_POST['submit'])){
function sound(){
$str1=$_POST['ho1'];
$str2=$_POST['ho2'];

echo metaphone($str1);
echo "<br>";
echo metaphone($str2);
echo "<br>";
echo "<br>";

echo soundex($str1);
echo "<br>";
echo soundex($str2);
}
sound();

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homophone Detector</title>
	<style>
		body{
			margin: 0;
			padding: 0;
		}
		h1{
			text-align: center;
			text-transform: uppercase;
			background-color: Orange;
			width: 85%;
			margin-left: 50px;
			color: #fff;
		}
		form{
			width: 40%;
			height: 200px;
			position: absolute;
			background-color: blue;
			right: 400px;
		}
		.text{
			width: 50%;
			height: 40px;
			margin-left: 30px;
			margin-top: 18px;
			border-radius: 5px;
			color: black;
			font-size: 20px;
		} 
		.submit{
			position: relative;
			top: 40px;
			left: 120px;
            width: 40%;
			height: 40px;
			background-color: rgb(25, 161, 95);
			color: white;
			border-radius: 20px;
			font-size: 25px;
		}
		.submit:hover{
			cursor: pointer;
			color: rgb(25, 161, 95);
			background-color: white;
		}
		.submit:active{
			cursor: progress;
			background-color: dark-gray;
			color: white;
		}
	</style>
</head>
<body>
<h1>Check for Homophones and Word Sounds</h1>
	<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
		<input type="text" name="ho1" class="text" placeholder="Type a word">
		<input type="text" name="ho2" class="text" placeholder="Type a word"><br><br>
		<input type="submit" name="submit" value="CHECK" class="submit">

	</form>
</body>
</html>