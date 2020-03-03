<?php
//aotoloD
require_once __DIR__.'/vendor/autoload';

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


if (strlen($Password < 6))
{
    $_SESSION['error'] = "Password too short";
    header("Location: ../register.php");
}

else if (!($Password == $Re_password))
{
    $_SESSION['error'] = "Passwords do not match";   
    header("Location: ../register.php");
}

else if(!filter_var($member1_email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['error'] = "1st Members' email is invalid, please enter a proper email";
    header("Location: ../register.php");
}

else if(!filter_var($member2_email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['error'] = "2nd Members' email is invalid, please enter a proper email";
    header("Location: ../register.php");
}

else if(!filter_var($member3_email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['error'] = "3rd Members' email is invalid, please enter a proper email";
    header("Location: ../register.php");
}

else
{
    echo "waiting for database guys";
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