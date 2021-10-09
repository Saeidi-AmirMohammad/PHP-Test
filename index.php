<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function sum($a, $b = 0)
    {
        $c = $a + $b;
        $d = $a + 2;
        return [$c , $d];
    }

     list($num1 , $num2) = sum(4 , 6);
     echo $num1 . "," .$num2; 

    ?>
</body>

</html>