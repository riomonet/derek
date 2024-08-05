<?php

$users = [
    "ari" => "boat",
    "jon" => "funky"
];


session_start();


if (isset($_POST['user']) && !isset($_SESSION['user'])) {

    if (!array_key_exists($_POST['user'], $users)) {
	$failed = true;
	header("Location: login.php");
	exit();
    }

    // On success set session
    if($users[ $_POST['user'] ] == $_POST['password']) {
	$_SESSION['user'] = $_POST['user'];
    }

    if(!isset($_SESSION['user'])) { $failed = true; }
}

if (isset($_SESSION['user'])) {
    header("Location: access.php");
    exit();
}

?>
