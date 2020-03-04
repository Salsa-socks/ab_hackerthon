<?php
require_once("Validation.php");
session_start();

$_SESSION['error'] = null;
$first_member = $_POST['first_member'];
$second_member = $_POST['second_member'];
$third_member = $_POST['third_member'];
$fourth_member = $_POST['fourth_member'];
$fifth_member = $_POST['fifth_member'];
$team_name = $_POST['Team_name'];

$error = new Validation;
if ($error_message = $error->validate_team($team_name)) {
    $_SESSION['error'] = $error_message;
} else if ($error_message = $error->validate_participant($first_member)) {
    $_SESSION['error'] = $error_message;
} else if ($error_message = $error->validate_participant($second_member)) {
    $_SESSION['error'] = $error_message;
} else if ($error_message = $error->validate_participant($third_member)) {
    $_SESSION['error'] = $error_message;
}

if (!empty($fourth_member) && empty($_SESSION['error'])) {
    $_SESSION['error'] = $error->validate_participant($fourth_member);
}

if (!empty($fifth_member) && empty($_SESSION['error'])) {
    $_SESSION['error'] = $error->validate_participant($fifth_member);
}


if ($_SESSION['error']) {
    //header("location: ../register.php");
    echo($_SESSION['error']);
} else {
    echo "waiting for database guys";
}
?>