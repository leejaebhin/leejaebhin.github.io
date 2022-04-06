<!DOCTYPE html>
<html>
<body>
    <?php

    echo( "삼각형의 면적: ". $_GET["a"]*$_GET["b"]*1/2 . "<br>");
  
    echo("직사각형의 면적: ". $_GET["c"]*$_GET["d"]. "<br>");

    echo ("원의 면적: ". pi()*$_GET["e"]*$_GET["e"] . "<br>");
   
    echo ("직육면체의 체적: ". $_GET["f"]*$_GET["g"]*$_GET["h"]. "<br>");

    echo("원통의 체적: ". pi()*$_GET["i"]*$_GET["i"]*$_GET["j"]. "<br>");

    echo("구의 체적: ". pi()*$_GET["k"]*$_GET["k"]*$_GET["k"]*4/3 . "<br>");
?>
</body>
</html>
