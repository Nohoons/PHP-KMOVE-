<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Operators</title>
</head>

<body>

<?php
	$num_01 = true;
	$num_02 = false;

	var_dump($num_01 and $num_02);		// true and false -> false
	echo "<br>";
	var_dump($num_01 or $num_02);		// true or false -> true
	echo "<br>";
	var_dump($num_01 xor $num_02);		// true xor false -> true
	echo "<br>";
	var_dump( (3 < 5) or ("12" > 20) );	// true or false -> true
?>

</body>

</html>