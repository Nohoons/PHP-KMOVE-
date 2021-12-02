<!DOCTYPE html <head>
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
            echo "함수  cnt의 값은 {$cnt}입니다.<br>";
            echo "정적 변수의 초기화는 한번 만 합니다.<br>";

            $cnt++;
            
            $abc =6;
            echo "함수 내에서 호출한 지역 변수 abc의 값은 {$abc}입니다.<br>";
            echo "함수 내에서 호출한 전역 변수 var의 값은 {$GLOBALS['var']}입니다.<br>";
            echo "함수 내에서 호출한 전역 변수 var의 값은 {$var}입니다.<br>";
            global $var;	// 함수 내에서 사용할 전역 변수를 명시함
            echo "함수 내에서 호출한 전역 변수 var의 값은 {$var}입니다.<br>";
        }
        varFunc(); varFunc(); varFunc();
        echo "함수 밖에서 호출한 전역 변수 var의 값은 {$var}입니다.";
?>

</body>