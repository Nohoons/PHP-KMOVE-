<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Constant Test</title>
</head>

<body>
    <?php
             function magicconstants(){
                echo "현재라인수",__LINE__,"입니다. <br>";     // 파일의 현재 줄 번호를 반환함.
                echo "현재 함수 이름 :",__FUNCTION__,"<br> 메소드 이름:",__METHOD__,"<br> 디렉토리 경로",__DIR__;            
             }
            magicconstants();
            ?>
</body>

</html>