<?php



session_start([
    'name' => 'Saeidi.ir_Session'
]);

if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 0;
}

var_dump($_SESSION);


?>
