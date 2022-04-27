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

<h3>문제 3 : Fibonacci <br>(100 이하의 정수 숫자 n 을 입력받아 n개의 피보나치 수열과 앞과 뒤항의 비례를 출력하세요
)</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  100이하 정수 입력: <input type="number" name="name">
  <input type="submit" name="submit" value="Submit"> 
</form>

<?php
if($name <= 100) {   // name이 100보다 작거나 같을 때 출력하겠다
    echo "입력값:$name<br>";
    echo ("<br>");
    echo " 피보나치 수열:";

echo ("<br>");


function fibo($name)
{
if($name ==  0 || $name ==1) return (1);
return (fibo($name-1) + fibo($name -2));
}
for ($i=1; $i <= $name; $i++)
print(fibo($i - 1))."<br> ";

?>

<?php
echo "앞과 뒤항의 비례<br>";
$a = 1;
$b = 1;

for($i = 0; $i < $name; $i++)
{
echo $b / $a."<br> ";
$c = $b +$a;
$a = $b;
$b = $c;
}
}
else {
    echo "100이하의 숫자를 입력하시오";
}

?> 


</body>
</html>