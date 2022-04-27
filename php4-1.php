<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) { 
    $nameErr = "Name is required"; // 입력칸이 비었을 때 출력하겠다
  } else {
    $name = test_input($_POST["name"]); // 비어있지 않으면
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>php 숙제 1 : Sum, Factorial <br>(1 부터 n까지의 숫자를 프린트하고 전체 합과 곱을 구합니다.)</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  값을 입력하세요: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";

  if (isset($name)) {
    $n = $name;
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

        echo("팩토리얼 : ");    //팩토리얼 출력
        for ($i = 1; $i <= $n; $i++) {
            echo($i);
            if ($i < $n) {
                echo(" * ");
            }
        }
        echo(" = " . $mul);
    }
echo "<br>";

?>

</body>
</html>