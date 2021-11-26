<html>
    <body style="background-color:teal">
        <?php
        $n=$_POST["num1"];
        $fact = 1;
        for($i=1;$i<=$n;$i++){
        $fact=$fact * $i;
        }
        echo"<h1>The factorial of ".$n." is ".$fact.".</h1>";
        ?>
    </body>
</html>
