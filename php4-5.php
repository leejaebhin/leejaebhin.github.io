<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>달력</title>
</head>
<body>
    <?php
    if(empty($_GET['date'])){ // 입력값이 없으면 오늘을 기준으로 한다
        $thisDay = date("Y-m-d");    
    } else {
        if(isset($_GET['btn'])){
            if($_GET['btn'] == 'prev'){ // 이전달 구하기
                $thisDay = date("Y-m-d", strtotime($_GET['date']." -1 month"));
            } elseif($_GET['btn'] == 'next'){ // 다음달 구하기
                $thisDay = date("Y-m-d", strtotime($_GET['date']." +1 month"));
            }
        } else {
            $thisDay = $_GET['date']; //입력한 날짜 가져오기
        }
    }
    
    $thisDayArry = explode('-', $thisDay);
    $thisY = $thisDayArry[0];
    $thisM = $thisDayArry[1];
    $thisD = $thisDayArry[2];

    $maxDay = date("t", strtotime($thisDay)); // 총일수
    $startWeek = date("w", strtotime($thisY."-".$thisM."-01")); // 1일은 무슨 요일인가
    $maxWeek = ceil(($maxDay+$startWeek)/7); // 총주수
    $endWeek = date("w", strtotime($thisY."-".$thisM."-".$maxDay));// 마지막일은 무슨 요일인가

    ?>
    <form action="./cal.php" method="GET">
        <a href="./cal.php?date=<?php echo $thisDay?>&btn=prev">prev</a>
        <input type="text" name="date" value="<?php echo $thisDay?>">
        <a href="./cal.php?date=<?php echo $thisDay?>&btn=next">next</a>
    </form>

    <table>
        <thead>
            <tr>
                <th>일</th>
                <th>월</th>
                <th>화</th>
                <th>수</th>
                <th>목</th>
                <th>금</th>
                <th>토</th>
            </tr>
        </thead>
        <tbody>
            <?php $day=1; ?>
            <?php for($i=1; $i<=$maxWeek; $i++){?>
                <tr>
                <?php for($j=0; $j<7; $j++){ ?>
                    <td>
                        <?php 
                        if(($i==1 && $j < $startWeek) || ($i==$maxWeek && $j> $endWeek) ){ // 첫째 주이고 j가 1일의 요일보다 작은 경우 패스 || 마지막 주 이고 j가 마지막일의 요일보다 크면 패스
                            echo '';
                        } else {
                            if($day == $thisD){ echo '<b>'; }
                            echo $day;
                            if($day == $thisD){ echo '</b>'; }
                            $day++;
                        }
                        ?>
                    </td>
                <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>