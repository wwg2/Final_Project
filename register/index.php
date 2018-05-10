<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
session_start();
include '../models/Database.php';
include '../models/User.php';
$action = filter_input(INPUT_POST, 'action');
switch($action) {
    case 'register':
        do_register();
        break;
    default:
        include '../views/register.php';
        break;
}
function do_register() {
    $first_name = filter_input(INPUT_POST, 'first-name', FILTER_SANITIZE_SPECIAL_CHARS);
    $last_name = filter_input(INPUT_POST, 'last-name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_SPECIAL_CHARS);
    $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_SPECIAL_CHARS);
    if(User::getUserByEmail($email)) {
        $status = ['success' => false, 'msg' => "There is already an account registered under $email"];
        return include('../views/register.php');
     }
    $user = new User();
    $user->setFirstName($first_name);
    $user->setLastName($last_name);
    $user->setEmail($email);
    $user->setPassword($password);
    $user->setPhone($phone);
    $user->setGender($gender);
    $user->setBirthday($dob);
    $reg = $user->register();
    
    if($reg['success']) {
        $user->setSession();
        header('Location: ../dashboard');
    } else {
        $err = $reg['msg'];
        include '../views/register.php';
    }
}
?>
    
 ?>
