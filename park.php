<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = 'park';
$link=mysqli_connect($servername,$username,$password,$dbname);
$_GET['order'] = isset($order) ? $_GET['order'] : null;
?>
<html>
<head>
	<meta charset="utf-8">
	<title>제목</title>
    <style>
        body {
            margin-left:30px;
            line-height:30px;
        }
        .input-wrap {
            width: 960px;
            margin: 0 auto;
        }
        h1 { text-align: center; }
        th, td { text-align: center; }
        table {
            border: 1px solid #000;
            width: 700px;
            height: 150px;
            margin-left: 10px;

        }
        td, th {
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <form action="park.php" method="GET">
    성함
      <input type="text" name="name">
    <input type="submit" name="submit" value="확인">
<table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>구분</th>
                    <th colspan=2>어린이</th>
                    <th colspan=2>어른</th>
                    <th>비고</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</th>
                    <td>입장권</th>
                    <td>7,000</th>
                    <td>
                        <select name="chil_1">
                            <option value=0>0</option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                        </select>
                    </th>
                    <td>10,000</th>
                    <td>
                        <select name="adu_1">
                            <option value=0>0</option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                        </select></th>
                    <td>입장</th>
                </tr>
                <tr>
                    <td>2</th>
                    <td>BIG3</th>
                    <td>12,000</th>
                    <td>
                        <select name="chil_2">
                            <option value=0>0</option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                        </select>
                    </th>
                    <td>16,000</th>
                    <td>
                        <select name="adu_2">
                            <option value=0>0</option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                        </select>
                    </th>
                    <td>입장+놀이3종</th>
                </tr>
                <tr>
                    <td>3</th>
                    <td>자유이용권</th>
                    <td>21,000</th>
                    <td>
                        <select name="chil_3">
                            <option value=0>0</option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                        </select>
                    <td>26,000</th>
                    <td>
                        <select name="adu_3">
                            <option value=0>0</option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                        </select>
                    </th>
                    <td>입장+놀이자유</th>
                </tr>
                <tr>
                    <td>4</th>
                    <td>연간이용권</th>
                    <td>70,000</th>
                    <td>
                        <select name="chil_4">
                            <option value=0>0</option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                        </select>
                    <td>90,000</th>
                    <td>
                        <select name="adu_4">
                            <option value=0>0</option>
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                        </select>
                    </th>
                    <td>입장+놀이자유</th>
                </tr>
            </tbody>
        </table>
        </form> 
    <?php   
     echo date("Y / n / j / h:i").("<br>"); 
     if (isset($_GET['name'])){
         echo ($_GET['name']).("고객님 감사합니다.").("<br>");
         if ($_GET['chil_1']!=0){
             echo ("입장권 (어린이) ").($_GET['chil_1']).("매").("<br>");}
         if ($_GET['chil_2']!=0){
             echo ("BIG3 (어린이) ").($_GET['chil_2']).("매").("<br>");}
         if ($_GET['chil_3']!=0){
             echo ("자유이용권 (어린이)").($_GET['chil_3']).("매").("<br>");}
         if ($_GET['chil_4']!=0){
             echo ("연간이용권 (어린이)").($_GET['chil_4']).("매").("<br>");}
         if ($_GET['adu_1']!=0){
             echo ("입장권 (어른)").($_GET['adu_1']).("매").("<br>");}
         if ($_GET['adu_2']!=0){
             echo ("BIG3 (어른)").($_GET['adu_2']).("매").("<br>");}
         if ($_GET['adu_3']!=0){
             echo ("자유이용권 (어른)").($_GET['adu_3']).("매").("<br>");}
         if ($_GET['adu_4']!=0){
             echo ("연간이용권 (어른)").($_GET['adu_4']).("매").("<br>");}
         $sum=($_GET['chil_1']*7000)+($_GET['chil_2']*12000)+($_GET['chil_3']*21000)+($_GET['chil_4']*70000)+($_GET['adu_1']*10000)+($_GET['adu_2']*16000)+($_GET['adu_3']*26000)+($_GET['adu_4']*90000);
         echo ("합계 ").($sum).("원");
     }
 ?>
 <?php
     $sql=" INSERT INTO  park".
     "VALUES ('$_GET[name]',  '$_GET[chil_1]', '$_GET[adu_1]',  '$_GET[chil_2]',  '$_GET[adu_2]',  '$_GET[chil_3]',  '$_GET[adu_3]',  '$_GET[chil_4]',  '$_GET[adu_4]')";
 mysqli_query($link,$sql);
 mysqli_close($link);
 ?>
 </body>
</html>