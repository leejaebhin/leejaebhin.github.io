<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
 

<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);
// define variables and set to empty values
$tr1Err =$tr2Err = $sq1Err =$sq2Err = $cirErr = $six1Err =$six2Err =$six3Err = $cirtong1Err =$cirtong2Err = $guErr ="";
$tr1 = $sq1 = $cir = $six1 = $cirtong1  = $gu= "";
$tr2 = $sq2 = $six2 = $six3 = $cirtong2  = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["tr1"])) { 
    $tr1Err = "tr is required"; // 입력칸이 비었을 때 출력하겠다
  } else {
    $tr1 = test_input($_POST["tr1"]);
  }
}
if (empty($_POST["tr2"])) { 
    $tr2Err = "tr is required"; // 입력칸이 비었을 때 출력하겠다
  } else {
    $tr2 = test_input($_POST["tr2"]);
  }
if (empty($_POST["sq1"])) {
    $sq1Err = "sq is required"; // 입력칸이 비었을 때 출력하겠다
  } else {
    $sq1 = test_input($_POST["sq1"]);
    // check if e-mail address is well-formed
    if (!filter_var($sq1, FILTER_VALIDATE_EMAIL)) {
      $sq1Err = "";
    }
  }
  if (empty($_POST["sq2"])) { 
    $sq2Err = "tr is required"; // 입력칸이 비었을 때 출력하겠다
  } else {
    $sq2 = test_input($_POST["sq2"]);
  }
  if (empty($_POST["cir"])) {
    $cirErr = "";
  } else {
    $cir = test_input($_POST["cir"]);
    // check if e-mail address is well-formed
    if (!filter_var($cir, FILTER_VALIDATE_EMAIL)) {
      $cirErr = "";
    }
  }
  if (empty($_POST["six1"])) {
    $six1Err = "six is required";
  } else {
    $six1 = test_input($_POST["six1"]);
    // check if e-mail address is well-formed
    if (!filter_var($six1, FILTER_VALIDATE_EMAIL)) {
      $six1Err = "";
    }
  }
  if (empty($_POST["six2"])) {
    $six2Err = "six is required";
  } else {
    $six2 = test_input($_POST["six2"]);
    // check if e-mail address is well-formed
    if (!filter_var($six2, FILTER_VALIDATE_EMAIL)) {
      $six2Err = "";
    }
  }
  if (empty($_POST["six3"])) {
    $six3Err = "six3 is required";
  } else {
    $six3 = test_input($_POST["six3"]);
    // check if e-mail address is well-formed
    if (!filter_var($six3, FILTER_VALIDATE_EMAIL)) {
      $six3Err = "";
    }
  }
  if (empty($_POST["cirtong1"])) {
    $cirtong1Err = "Email is required";
  } else {
    $cirtong1 = test_input($_POST["cirtong1"]);
    // check if e-mail address is well-formed
    if (!filter_var($cirtong1, FILTER_VALIDATE_EMAIL)) {
      $cirtong1Err = "";
    }
  }
  if (empty($_POST["cirtong2"])) {
    $cirtong2Err = "Email is required";
  } else {
    $cirtong2 = test_input($_POST["cirtong2"]);
    // check if e-mail address is well-formed
    if (!filter_var($cirtong2, FILTER_VALIDATE_EMAIL)) {
      $cirtong2Err = "";
    }
  }
  if (empty($_POST["gu"])) {
    $guErr = "Email is required";
  } else {
    $gu = test_input($_POST["gu"]);
    // check if e-mail address is well-formed
    if (!filter_var($gu, FILTER_VALIDATE_EMAIL)) {
      $guErr = "";
    }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>php 숙제 4 : 폼을 이용하여 도형 계산식</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
삼각형의 면적<br>
밑변 :<input type="text" name="tr1" value="<?php echo $tr1;?>">

높이 : <input type="text" name="tr2" value="<?php echo $tr2;?>">

  <br><br>
  직사각형의 면적<br>
  가로 :<input type="text" name="sq1" value="<?php echo $sq1;?>">

  세로 :<input type="text" name="sq2" value="<?php echo $sq2;?>">

  <br><br>
  원의 면적<br>
  반지름: <input type="text" name="cir" value="<?php echo $cir;?>">
 
  <br><br>
  직육면체의 체적<br>
  가로 <input type="text" name="six1" value="<?php echo $six1;?>">
 
  세로 <input type="text" name="six2" value="<?php echo $six2;?>">

  높이 <input type="text" name="six3" value="<?php echo $six3;?>">
 
  <br><br>
  원통의 체적<br>
  반지름: <input type="text" name="cirtong1" value="<?php echo $cirtong1;?>">

  높이: <input type="text" name="cirtong2" value="<?php echo $cirtong2;?>">
  
  <br><br>
  구의 체적<br>
  반지름: <input type="text" name="gu" value="<?php echo $gu;?>">
  
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo( "삼각형의 면적: ". $tr1*$tr2*1/2 . "<br>");
  
    echo("직사각형의 면적: ". $sq1*$sq2. "<br>");

    echo ("원의 면적: ". pi()*$cir*$cir . "<br>");
   
    echo ("직육면체의 체적: ". $six1*$six2*$six3. "<br>");

    echo("원통의 체적: ". pi()*$cirtong1*$cirtong1*$cirtong2. "<br>");

    echo("구의 체적: ". pi()*$gu*4/3 . "<br>");

?>

</body>
</html>