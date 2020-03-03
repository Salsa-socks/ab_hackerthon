<?php
//aotoloD
require_once '../database/database.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$Team_name = $_POST['Team_name'];
$Password = $_POST['Password'];
$Re_password = $_POST['Re_password'];

$member1_name = $_POST['1st_name']; 
$member1_surname = $_POST['1st_surname']; 
$member1_email = $_POST['1st_email']; 

$member2_name = $_POST['2nd_name']; 
$member2_surname = $_POST['2nd_surname']; 
$member2_email = $_POST['2nd_email'];

$member3_name = $_POST['3rd_name']; 
$member3_surname = $_POST['3rd_surname']; 
$member3_email = $_POST['3rd_email'];

$teamInfo = array(
'team_name' => $Team_name, 
'member 1' => ['name' => $member1_name, 'surname' => $member1_surname, 'email' => $member1_email],
'member 2' => ['name' => $member2_name, 'surname' => $member2_surname, 'email' => $member2_email],
'member 3' => ['name' => $member3_name, 'surname' => $member3_surname, 'email' => $member3_email]
);

$database = new Database();

if (strlen($Password < 6))
{
    $_SESSION['error'] = "Password too short";
    header("Location: ../register.php");
}

if (!($Password == $Re_password))
{
    $_SESSION['error'] = "Passwords do not match";   
    header("Location: ../register.php");
}

if(!filter_var($member1_email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['error'] = "1st Members' email is invalid, please enter a proper email";
    header("Location: ../register.php");
}

if(!filter_var($member2_email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['error'] = "2nd Members' email is invalid, please enter a proper email";
    header("Location: ../register.php");
}

if(!filter_var($member3_email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['error'] = "3rd Members' email is invalid, please enter a proper email";
    header("Location: ../register.php");
}

if ($member1_name && $member2_name && $member3_name)
{
    var_dump('Inserting user info into Datatbase');
    $database->insert($teamInfo);
}

// echo $Team_name."\n";
// echo $Password."\n";

// echo $member1_name."\n";
// echo $member1_surname."\n";
// echo $member1_email."\n";
// echo $member2_name."\n";
// echo $member2_surname."\n";
// echo $member2_email."\n";
// echo $member3_name."\n";
// echo $member3_surname."\n";
// echo $member3_email."\n";
// if (isset($member4_name))
// {
//     echo $member4_name."\n";
//     echo $member4_surname."\n";
//     echo $member4_email."\n";
// }

?>