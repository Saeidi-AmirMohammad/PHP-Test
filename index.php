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
// echo str_repeat("-_-" , 10);

    // $name = "amirMohammad";
    // echo substr($name , 4 , 8);

    // $name2 = "   A M I R   ";
    // echo trim($name2);
    
    $text = '<p> text paragraph </p> <a href = "#"> other text </a>';
    var_dump(strip_tags($text));
    ?>
</body>

</html>