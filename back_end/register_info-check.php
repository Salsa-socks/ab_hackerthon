<?php
require_once '../database.php';

session_start();
$database = new Database();
$Team_name = $_POST['Team_name'];

if (isset($_POST['1st_name']) && $_POST['1st_surname'] && $_POST['1st_email']) {
    $member1_name = $_POST['1st_name']; 
    $member1_surname = $_POST['1st_surname']; 
    $member1_email = $_POST['1st_email'];
    $member_1 = array('name' => $member1_name, 'surname' => $member1_surname,'email' => $member1_email);
}
else
{
    header("Location: http://localhost/ab_hackerthon/register.php");
    exit ;
}

if (isset($_POST['2nd_name']) && $_POST['2nd_surname'] && $_POST['2nd_email']) {
    $member2_name = $_POST['2nd_name']; 
    $member2_surname = $_POST['2nd_surname']; 
    $member2_email = $_POST['2nd_email'];
    $member_2 = array('name' => $member2_name, 'surname' => $member2_surname,'email' => $member2_email);
}
else
{
    header("Location: http://localhost/ab_hackerthon/register.php");
    exit ;
}

if (isset($_POST['3rd_name']) && $_POST['3rd_surname'] && $_POST['3rd_email']) {
    $member3_name = $_POST['3rd_name']; 
    $member3_surname = $_POST['3rd_surname']; 
    $member3_email = $_POST['3rd_email'];
    $member_3 = array('name' => $member3_name, 'surname' => $member3_surname,'email' => $member3_email);
}
else
{
    header("Location: http://localhost/ab_hackerthon/register.php");
    exit ;
}

if (isset($_POST['4th_name']) && $_POST['4th_surname'] && $_POST['4th_email']) {
    $member4_name = $_POST['4th_name']; 
    $member4_surname = $_POST['4th_surname']; 
    $member4_email = $_POST['4th_email'];
    $member_4 = array('name' => $member4_name, 'surname' => $member4_surname,'email' => $member4_email);
}
else
    $member_4 = array('name' => 'No_data');

if (isset($_POST['5th_name']) && $_POST['5th_surname'] && $_POST['5th_email']) {
    $member5_name = $_POST['5th_name']; 
    $member5_surname = $_POST['5th_surname']; 
    $member5_email = $_POST['5th_email'];
    $member_5 = array('name' => $member5_name, 'surname' => $member5_surname,'email' => $member5_email);
}
else
    $member_5 = array('name' => 'No_data');

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
    echo 'Inserting user info into Datatbase';
    $result = $database->fetchingTeam($Team_name);
    print_r($result);
    if (count($result) == 0)
    {
        $database->insertingData($Team_name, $member_1, $member_2, $member_3, $member_4, $member_5);
        header ("Location: http://localhost/ab_hackerthon/scoreboard.php");
    }
    else
    {
        //Report team name already exists
        header ("Location: http://localhost/ab_hackerthon/register.php");
    }
}

?>