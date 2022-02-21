<?php
ini_set('display_errors', 1);

$login = file('../files/spam.txt', FILE_IGNORE_NEW_LINES);
$output = [];


$username = $_GET['username'];
$password = $_GET['password'];
$isUserRegisetered = false;
$positionOfUserInArray = 0;

for($i = 0; $i < count($login); $i++) {
    if(login[$i] === $username) {
        $isUserRegisetered = true;
        $positionOfUserInArray = $i;
        break;
    }
}

if (!$isUserRegisetered) {
    $output["success"] = false;
    $output["message"] = "Parameter fehlen";
    echo json_encode($output);
    return false;
}

if ($password == $login[$i + 1]) {    // http://localhost/SimpleLoginEF/login.php/?username=admin&password=12345678
    $output["success"] = true;
    $output["message"] = "Eingelogt als Admin";
    echo json_encode($output);
    return true;
}

$output["success"] = false;
$output["message"] = "Login nicht erfolgreich";
echo json_encode($output);


return false;
?>