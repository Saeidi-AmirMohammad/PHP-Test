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
    $list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

    $i = 0;

    while ($i < 12) {
        echo $list[$i] . " ";

        $i++;
    }

    $i = 0;

    do {
        echo "<br>";
        echo $list[$i] . " ";

        $i++;
    } while ($i < 12)

    ?>
</body>

</html>