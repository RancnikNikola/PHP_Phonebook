<?php 

include_once('dbconfig.php');

$subjects = $crud->get_all_subjects();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Phonebook</title>
</head>
<body>

<div>
<table>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Contact</th>
<th>Email</th>
<th>Address</th>
<th>Delete</th>
<th>Edit</th>
</tr>
<?php foreach($subjects as $subject): ?>
<tr>
<th><?php echo $subject['id']; ?></th>
<th><?php echo $subject['firstName']; ?></th>
<th><?php echo $subject['lastName']; ?></th>
<th><?php echo $subject['phoneNumber']; ?></th>
<th><?php echo $subject['email']; ?></th>
<th><?php echo $subject['personAddress']; ?></th>
<th><a href="<?php echo 'delete.php?id=' .$subject['id']; ?>">Delete</a></th>
<th><a href="<?php echo 'edit.php?id=' .$subject['id']; ?>">Edit</a></th>

</tr>
<?php endforeach; ?>
<a href="add.php">Add Contact</a>
</table>
</div>


    
</body>
</html>