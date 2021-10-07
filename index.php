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
    $glassColor = 'blue';

    switch ($glassColor) {
        case "red": {
            echo "glass color is red";
            break;
            }
        case "blue" :{
            echo "glass color is blue";
            break;
        }
        case "green" :{
            echo "glass color is green";
            break;
        }
        default :{
            echo "is another color";
            break;
        }
    }

    ?>
</body>

</html>