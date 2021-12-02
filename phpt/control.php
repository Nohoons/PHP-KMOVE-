<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Control</title>
</head>

<body>

<?php $var = 5; ?>

<?php if ($var > 6): ?>
변수의 값은 6보다 큽니다.	<!-- 이 부분은 HTML 구문임 -->
<?php elseif ($var == 6): ?>
변수의 값은 6입니다.		<!-- 이 부분은 HTML 구문임 -->
<?php elseif ($var < 6): ?>
변수의 값은 6보다 작습니다.	<!-- 이 부분은 HTML 구문임 -->
<?php endif; ?>

</body>

</html>