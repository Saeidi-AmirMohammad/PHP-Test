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
if(isset($_GET['username']) && isset($_GET['pass'])){
    $username = $_GET['username'];
    $pass = $_GET['pass'];
    var_dump($username . " " . $pass);
}
else{
    echo "username or pass is not exsist";
}
    ?>

<form action="./index.php" method="$_GET">
<input type="text" name="username">
<input type="text" name="pass">
<button type="submit">Send</button>
</form>
</body>

</html>