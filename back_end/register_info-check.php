<?php
//aotoloD
require_once '../database.php';

session_start();
$Team_name = $_POST['Team_name'];
/*$Password = $_POST['Password'];
$Re_password = $_POST['Re_password'];*/

/*$member1_name = $_POST['1st_name']; 
$member1_surname = $_POST['1st_surname']; 
$member1_email = $_POST['1st_email'];*/ 

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

/*$member2_name = $_POST['2nd_name']; 
$member2_surname = $_POST['2nd_surname']; 
$member2_email = $_POST['2nd_email'];*/

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

/*$member3_name = $_POST['3rd_name']; 
$member3_surname = $_POST['3rd_surname']; 
$member3_email = $_POST['3rd_email'];*/

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

/*$teamInfo = array(
'team_name' => $Team_name, 
'member1' => ['name' => $member1_name, 'surname' => $member1_surname, 'email' => $member1_email],
'member2' => ['name' => $member2_name, 'surname' => $member2_surname, 'email' => $member2_email],
'member3' => ['name' => $member3_name, 'surname' => $member3_surname, 'email' => $member3_email]
);

if (isset($_POST['4th_name']) && $_POST['4th_surname'] && $_POST['4th_email'])
{
    $teamInfo['member4'] = ['name' => $member4_name, 'surname' => $member4_surname, 'email' => $member4_email];
}
else
    $member_4 = array('No_data');
if (isset($_POST['5th_name']) && $_POST['5th_surname'] && $_POST['5th_email'])
{
    if (isset($_POST['4th_name']) && $_POST['4th_surname'] && $_POST['4th_email']) 
    {
        $teamInfo['member5'] = ['name' => $member5_name, 'surname' => $member5_surname, 'email' => $member5_email];
    }
    else
    {
        $teamInfo['member4'] = ['name' => $member5_name, 'surname' => $member5_surname, 'email' => $member5_email];
    }
}
else
    $member_5 = array('No_data');*/



/*if (strlen($Password) >= 6)
{
    $_SESSION['error'] = "Password too short";
    header("Location: ../register.php");
}*/

/*if (!($Password == $Re_password))
{
    $_SESSION['error'] = "Passwords do not match";   
    header("Location: ../register.php");
}*/

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
    $teamInfo = db_structure($Team_name, $member_1, $member_2, $member_3, $member_4, $member_5);
    //print_r($teamInfo);
    db_insert($teamInfo);
    $team = db_retrieve('Teams', 'Fire');
    print_r($team);
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