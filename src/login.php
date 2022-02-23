<?php
ini_set('display_errors', 1);

$login = file('./data/data.txt', FILE_IGNORE_NEW_LINES);
$output = [];

$username = $_GET['username'];
$password = $_GET['password'];
$isUserRegisetered = false;
$positionOfUserInArray = 0;

if($username == "" || $password == "") {
    $output["success"] = false;
    $output["message"] = "Parameters are missing";
    echo json_encode($output);
    return false;
}

for($i = 0; $i < count($login); $i++) {
    if($login[$i] === $username) {
        $isUserRegisetered = true;
        $positionOfUserInArray = $i;
        break;
    }
}

if (!$isUserRegisetered) {
    $output["success"] = false;
    $output["message"] = "User not registered";
    echo json_encode($output);
    return false;
}

if ($password == $login[$positionOfUserInArray + 1]) {
    $output["success"] = true;
    $output["message"] = "Eingelogt als " + $login[$i];
    echo json_encode($output);
    return true;
}

$output["success"] = false;
$output["message"] = "Login nicht erfolgreich";
echo json_encode($output);

return false;
?>