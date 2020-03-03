<?php

session_start();
$Team_name = $_POST['Team_name'];

$member1_name = $_POST['1st_name']; 
$member1_surname = $_POST['1st_surname']; 
$member1_email = $_POST['1st_email']; 

$member2_name = $_POST['2nd_name']; 
$member2_surname = $_POST['2nd_surname']; 
$member2_email = $_POST['2nd_email'];

$member3_name = $_POST['3rd_name']; 
$member3_surname = $_POST['3rd_surname']; 
$member3_email = $_POST['3rd_email'];

if ((isset($_POST['4th_name'])) && (isset($_POST['4th_surname'])) && (isset($_POST['4th_email'])))
{
    $member4_name = $_POST['4th_name'];
    $member4_surname = $_POST['4th_surname'];
    $member4_email = $_POST['4th_email'];
}

if ((isset($_POST['5th_name'])) && (isset($_POST['5th_surname'])) && (isset($_POST['5th_email'])))
{
    $member5_name = $_POST['5th_name'];
    $member5_surname = $_POST['5th_surname'];
    $member5_email = $_POST['5th_email'];
}

if(!filter_var($member1_email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['error'] = "1st Members' email is invalid, please enter a proper email";
    header("Location: ../register.php");
    return;
}

if(!filter_var($member2_email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['error'] = "2nd Members' email is invalid, please enter a proper email";
    header("Location: ../register.php");
    return;
}

if(!filter_var($member3_email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['error'] = "3rd Members' email is invalid, please enter a proper email";
    header("Location: ../register.php");
    return;
}

if(!filter_var($member4_email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['error'] = "4th Members' email is invalid, please enter a proper email";
    header("Location: ../register.php");
    return;
}

if(!filter_var($member5_email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['error'] = "5th Members' email is invalid, please enter a proper email";
    header("Location: ../register.php");
    return;
}

echo "waiting for database guys";


?>