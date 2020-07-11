<?php 

include_once('dbconfig.php');

if(isset($_POST['btn-save'])) {
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $contact = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $paddress = $_POST['personAddress'];

    if($crud->create($fname,$lname,$contact,$email,$paddress)) {
        header("Location: add.php?inserted");
    } else {
        header("Location: add.php?failure");
    }
}

if(isset($_GET['inserted'])) {
    echo "Record was inserted successfully";
} elseif(isset($_GET['failure'])) {
    echo "ERROR while inserting record";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add contact</title>
</head>
<body>

<div>
    <form method="POST">
        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="firstName"/></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lastName"/></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" name="phoneNumber"/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"/></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="personAddress"/></td>
            </tr>
            <tr>
                <button type="submit" name="btn-save">Create new record</button>
            </tr>
        </table>
    </form>
</div>
    
</body>
</html>