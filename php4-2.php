<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>문제 2 : Sorting<br>(10이상 100이하의 정수 숫자 n 을 입력받아 n개의 정수 랜덤넘버를 생성하고 
생성된 결과와 올림차순으로 소팅한 결과를 출력하세요.)
</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  10 이상 100 이하 정수 입력: <input type="number" name="name">

  <input type="submit" name="submit" value="Submit"> 
</form>
<?php

$dada = array(); // 배열 설정
if($name >= 10 && $name <= 100) { //name이 10보다 크거나 같고 100보다 작거나 같을 때

    for ($i=0; $i <= $name; $i++) { 
        $dada[$i] = rand(10, 100);
        
    }
    echo "입력값:$name<br>";
    
    echo ("<br>");

    echo "정수 랜덤넘버: <br>";
    for ($i=0; $i <= $name; $i++) { 
        echo "number $i : $dada[$i] <br>"; // 랜덤 출력
    }

    sort($dada);
    
    echo ("<br>");
    
    echo "올림차순으로 소팅<br>";
    
    echo ("<br>");
    
    for ($i=0; $i <= $name; $i++) { 
        echo "number $i : $dada[$i] <br>"; // 올림차순 출력
        
    }


    
    echo  '<br>';

}
else {
    echo "10 이상 100 이하 정수 입력";
}

?>


</body>
</html>