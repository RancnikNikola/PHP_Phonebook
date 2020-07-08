<?php
// Empty variables for storing input values
$fname = "";
$lname = "";
$phone = "";
$email = "";
$Paddress = "";

// Empty Error messages
$fnameError = "";
$lnameError = "";
$phoneError = "";
$emailError = "";
$addressError = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check First Name field
    if (empty($_POST['fname'])) {
        $fnameError = "This field is required";
    } else {
        $fname = test_input($_POST['fname']);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
            $fnameError = "Only letters and white space allowed";
        }
    }
    // Check Last Name field
    if (empty($_POST['lname'])) {
        $lnameError = "This field is required";
    } else {
        $lname = test_input($_POST['lname']);
        // Check if last name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
            $lnameError = "Only letters and white space allowed";
        }
    }
    // Check Phone Number field
    if (empty($_POST['pnumber'])) {
        $phoneError = "";
    } else {
        $phone = test_input($_POST['pnumber']);
        // Check if phone number contains only numbers
        if (!preg_match('/[0-9]{10}/i', $phone)) { 
            $phoneError = "Only numbers are allowed";
        }
    } 
    // Check Email field
    if (empty($_POST['email'])) {
        $emailError = "This field is required";
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        }
    } 
    // Check Address field
    if (empty($_POST['address'])) {
        $addressError = "";
    } else {
        $Paddress = test_input($_POST['address']);
    }
 }


?>