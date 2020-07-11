<?php 

include_once('dbconfig.php');

$id = $_GET['id'];
$person = $crud->getID($id);

if(isset($_POST['btn-del'])) {
    $crud->delete($id);
    header("Location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete record</title>
</head>
<body>

<div>
<form method="POST">
        <table>
        <h3>Are u sure u want to delete this contact?</h3>
            <tr>
                <td><p>First Name:<?php echo $person['firstName']; ?></p></td>
            </tr>
            <tr>
                <td><p>Last Name:<?php echo $person['lastName']; ?></p></td>
            </tr>
            <tr>
                <td><p>Contact:<?php echo $person['phoneNumber']; ?></p></td>
            </tr>
            <tr>
                <td><p>Email:<?php echo $person['email']; ?></p></td>
            </tr>
            <tr>
                <td><p>Address:<?php echo $person['personAddress']; ?></p></td>
            </tr>
            <tr>
                <td><button type="submit" name="btn-del">Delete record</button></td>
            </tr>
        </table>
    </form>
</div>
    
</body>
</html>