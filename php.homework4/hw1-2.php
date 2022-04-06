<!DOCTYPE html>
<html>
<body>
    <?php
  if (isset($_GET['i'])) { // hw1-1.php 에서 입력한 name i값을 hw1-2.php에서 사용한다.
    $n = $_GET['i'];
    $sum = 0; // 변수 지정
    $mul = 1; // 변수 지정

    for ($i = 1; $i <= $n; $i++) { // (1부터 시작;조건식;1씩 상승)
        $sum += $i; //sum은 1씩 증가수를 더한다.
        $mul *= $i; //mul은 1씩 증가수를 곱한다.
    }
    echo ("입력한 숫자 : " . $n . "<br>");

        echo("합계 : ");
        for ($i = 1; $i <= $n; $i++) {
            echo($i);
            if ($i < $n) {
                echo(" + ");
            }
        }
        echo(" = " . $sum);

        echo("<br>"); 

        echo("팩토리얼 : ");
        for ($i = 1; $i <= $n; $i++) {
            echo($i);
            if ($i < $n) {
                echo(" * ");
            }
        }
        echo(" = " . $mul);
    }
?>
</body>
</html>
