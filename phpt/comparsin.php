<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>PHP Operators</title>
</head>

<body>

    <?php
	$num_01 = 3;
	$num_02 = 3.0;
	$num_03 = 3;

	echo "== 연산자에 의한 결과값은 ";
	var_dump($num_01 == $num_02);
	echo "입니다.<br>";

	echo "=== 연산자에 의한 결과값은 ";
	var_dump($num_01 === $num_02);
	echo "입니다.<br>";

	echo "!= 연산자에 의한 결과값은 ";
	var_dump($num_01 != $num_03);
	echo "입니다.<br>";


    var_dump(0 < true);				// true
	echo "<br>";
	var_dump("123abc" == 123);		// true
	echo "<br>";
	var_dump("123abc" === 123);		// false
	echo "<br><br>";

	$arr_01 = array("a" => 10);
	$arr_02 = array("a" => 5);
	$arr_03 = array("a" => 5, "c" => 7);


	var_dump($arr_01 >= $arr_02);	// true
	echo "<br>";
	var_dump($arr_01 >= $arr_03);	// false
	echo "<br>";
	var_dump("문자열" < $arr_01);	// true
?>

</body>

</html>