<?php 

// Get files for connection to database and functions
require('connection.php');
include('functions.php');

// Get everything from database as associative array
$contacts = find_all_subjects();
echo $contacts;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Phonebook</title> 
</head>
<body style="background-image: url('bg.jpg');">

<!-- Form for adding a new contact -->
<?php require('form_add.php');?>

<!-- Footer -->
<?php include('footer.php'); ?>