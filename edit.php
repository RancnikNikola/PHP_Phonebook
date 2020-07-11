<?php

include_once('dbconfig.php');

$id = $_GET['id'];
$person = $crud->getID($id);

if(isset($_POST['btn-edit'])) {
    $id = $_GET['id'];
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $contact = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $paddress = $_POST['personAddress'];

    if($crud->update($id,$fname,$lname,$contact,$email,$paddress)) {
        header("Location: index.php");
    } else {
        echo "Sorry, Error while updating a record.";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit record</title>
</head>
<body>
<div>
    <form method="POST">
        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="firstName" value="<?php echo $person['firstName'] ?>"/></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lastName" value="<?php echo $person['lastName'] ?>"/></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" name="phoneNumber" value="<?php echo $person['phoneNumber'] ?>"/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $person['email'] ?>"/></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="personAddress" value="<?php echo $person['personAddress'] ?>"/></td>
            </tr>
            <tr>
                <td><button type="submit" name="btn-edit">Edit record</button></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>