<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>PHP Variable Type</title>
</head>

<body>

    <?php
		$var = 10;			// 전역 변수로 선언함
        function varFunc()
        {

            #정적 변수  
            static $cnt =0;
            #지역 변수
            $localVar = 0;
            $cnt++;
            $localVar ++;
            echo " 변수 cnt의 값은 {$cnt}입니다.<br>";
            echo " 변수 localVar의 값은 {$localVar} 입니다. <br>";
        }

        varFunc();varFunc();varFunc();
            ?>



</body>