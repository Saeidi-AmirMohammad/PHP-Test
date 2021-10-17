<?php
$connect = mysqli_connect('localhost:3306' , 'root' , '');
if(! $connect){
    echo 'could not connected : ' . mysqli_connect_error();
    exit;
}
echo "connected successfully";

mysqli_close($connect);

?>
