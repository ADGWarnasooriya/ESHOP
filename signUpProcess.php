<?php

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$password = $_POST["p"];
$mobile = $_POST["m"];
$gender = $_POST["g"];

if (empty($fname)) {
    echo ("Please enter your First Name !!!");
} else if (strlen($fname) > 50) {
    echo ("First Name must have less than 50 charactors");
} else if (empty($lname)) {
    echo ("Please enter your Last Name !!!");
} else if (strlen($lname) > 50) {
    echo ("Last Name must have less than 50 charactors");
} elseif (empty($email)) {
    echo ("Please enter your email !!!");
} elseif (strlen($email) >= 100) {
    echo ("Email must have less than 100 characters");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email !!!");
} else if (empty($password)) {
    echo ("Please enter your password !!!");
} else if (strlen($password) < 5 || strlen($password) > 20) {
    echo ("Password must be between 5 - 20 characters");
} else if (empty($mobile)) {
    echo ("Please enter your mobile number !!!");
} else if (strlen($mobile) != 10) {
    echo ("mobile must have 10 characters");
} else if (!preg_match("/07[0,1,2,3,4,5,6,7,8][0-9]/", $mobile)) {
    echo ("Invalid Mobile !!!");
} else {
    echo ("Success !");
}
