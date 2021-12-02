<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Operators</title>
</head>

<body>

<?php
	$num_01 = 15;
	$num_02 = 8;
	
	echo "~ 연산자에 의한 결과값은 ".(~$num_01)."입니다.<br>";		// 1의 보수
	echo "<< 연산자에 의한 결과값은 ".($num_02<<1)."입니다.<br>";	// 곱하기 2
	echo ">> 연산자에 의한 결과값은 ".($num_02>>1)."입니다.";		// 나누기 2
?>

</body>

</html>