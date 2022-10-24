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
}
