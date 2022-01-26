<?php
ini_set('display_errors', 1);
$login = [];

if (!isset($_GET['username']) || !isset($_GET['password'])) {
    $login["success"] = false;
    $login["message"] = "Parameter fehlen";
    echo json_encode($login);
    return false;
}

$username = $_GET['username'];
$password = $_GET['password'];
 
if ($username === 'admin' && $password === '12345678') {    // http://localhost/SimpleLoginEF/login.php/?username=admin&password=12345678
    $login["success"] = true;
    $login["message"] = "Eingelogt als Admin";
    echo json_encode($login);
    return true;
}

$login["success"] = false;
$login["message"] = "Login nicht erfolgreich";
echo json_encode($login);

return false;
?>