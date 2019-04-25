<?php

// define variables and set to empty values
$firstnameErr = $lastnameErr = "";
$firstname = $lastname = $department = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $firstnameErr = "FirstName is required";
    } else {
        $firstname = test_input($_POST["firstname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
            $firstnameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "LastName is required";
    } else {
        $lastname = test_input($_POST["lastname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
            $lastnameErr = "Only letters and white space allowed";
        }
    }

    $department = test_input($_POST["department"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
