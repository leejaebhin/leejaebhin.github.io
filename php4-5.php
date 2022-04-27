<!DOCTYPE html>
<html lang="en">
<head>
<style>
.error {color: #FF0000;}
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
</style>
    <meta charset="UTF-8">
    <title>calendar</title>
    <style type="text/css">
        table {
            border-spacing: 0;
        }
        table td {
            text-align: center;
        }
    </style>
</head>
<?php 
$name = $year = $month = "";
$yearErr = $monthErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["year"])) {
      $yearErr = "year is required";
    } else {
      $year = isset($_POST['year']) ? $_POST['year'] : date('Y');// POST으로 넘겨 받은 year값이 있다면 넘겨 받은걸 year변수에 적용하고 없다면 현재 년도
    }
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["month"])) {
      $monthErr = "month is required";
    } else {
      $month = isset($_POST['month']) ? $_POST['month'] : date('m');// POST으로 넘겨 받은 month값이 있다면 넘겨 받은걸 month변수에 적용하고 없다면 현재 월
    }
  }

    $date = "$year-$month-01"; // 현재 날짜
    $time = strtotime($date); // 현재 날짜의 타임스탬프
    $start_week = date('w', $time); // 1. 시작 요일
    $total_day = date('t', $time); // 2. 현재 달의 총 날짜
    $total_week = ceil(($total_day + $start_week) / 7);  // 3. 현재 달의 총 주차

?>


<h2>문제 5 : Calendar<br>
몇년 몇월을 입력받아 아래와 같은 달력 테이블을 완성하시오.</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  년도 입력 : <input type="text" name="year" value="<?php echo $name;?>">
  <span class="error">* <?php echo $yearErr;?></span>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  월 입력 : <input type="text" name="month" value="<?php echo $name;?>">
  <span class="error">* <?php echo $monthErr;?></span>
  <br>
  <input type="submit" name="확인" value="확인">
</form>




<body>
<h2>calendar 출력</h2>
<?php echo "$year year $month month" ?>
    <table border="7">
        <tr> 
            <th>일</th> 
            <th>월</th> 
            <th>화</th> 
            <th>수</th> 
            <th>목</th> 
            <th>금</th> 
            <th>토</th> 
        </tr> 

        <!-- 총 주차를 반복합니다. -->
        <?php for ($n = 1, $i = 0; $i < $total_week; $i++): ?> 
            <tr> 
                <!-- 1일부터 7일 (한 주) -->
                <?php for ($k = 0; $k < 7; $k++): ?> 
                    <td> 
                        <!-- 시작 요일부터 마지막 날짜까지만 날짜를 보여주도록 -->
                        <?php if ( ($n > 1 || $k >= $start_week) && ($total_day >= $n) ): ?>
                            <!-- 현재 날짜를 보여주고 1씩 더해줌 -->
                            <?php echo $n++ ?>
                        <?php endif ?>
                    </td> 
                <?php endfor; ?> 
            </tr> 
        <?php endfor; ?> 
    </table>
    }

</body>
</html>
