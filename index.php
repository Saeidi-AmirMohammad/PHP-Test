<?php
var_dump($_REQUEST );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/?fullname=ali" method="POST">
    <input type="text" name = "fullname" required>
    <button type="submit">Send</button>
    </form>
</body>
</html>