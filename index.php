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
    $c = 10;

    // $sum = function ($a , $b) use ($c){
    //     return $a + $b + $c;
    // };

    $sum = fn ($a, $b) => $a + $b + $c;

    echo $sum(10, 1);
    ?>
</body>

</html>