<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>PHP Control</title>
</head>

<body>

    <?php
	$arr = array(
		"둘" => 2,
		"넷" => 4,
		"여섯" => 6,
		"여덟" => 8,
	);

	foreach ($arr as $a => $b) {
		echo "배열 \$arr에서 키값 '{$a}'에 대한 값은 {$b}입니다.<br>";
	}
	unset($b);
?>

</body>

</html>