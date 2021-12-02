<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>PHP Operators</title>
</head>

<body>

    <?php
	$arr_01 = array("PHP", "MySQL");
	$arr_02 = array("HTML", "CSS", "JavaScript");

	$result_01 = $arr_01 + $arr_02;
	echo "배열 arr_01과 배열 arr_02의 합집합은 다음과 같습니다.<br>";
	var_dump($result_01);
	
	echo "<br><br>";
	$result_02 = $arr_02 + $arr_01;
	echo "배열 arr_02와 배열 arr_01의 합집합은 다음과 같습니다.<br>";
	var_dump($result_02);
?>

</body>

</html>