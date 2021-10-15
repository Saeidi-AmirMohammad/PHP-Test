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
    var_dump($_POST);
    ?>

    <form action="./index.php" method="POST">
        <input type="email" name="username" required>
        <input type="password" name="pass" required>
        <button type="submit">Send</button>
    </form>
</body>

</html>