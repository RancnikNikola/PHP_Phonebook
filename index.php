<?php 

require('connection.php');

$pdo = $conn->prepare("SELECT * FROM Contacts");
$pdo->execute();
$contacts = $pdo->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Phonebook</title>
</head>
<body>

<div class="table-responsive-sm">
<table class="table table-hover table-dark">
<tr style="background-color: grey; color: black">
<th>First Name</th>
<th>Last Name</th>
<th>Phone</th>
<th>Email</th>
<th>Address</th>
<th>Edit</th>
<th>Remove</th>
</tr>
<?php foreach($contacts as $contact): ?>
<tr>
<th><?php echo $contact['firstName']; ?></th>
<th><?php echo $contact['lastName']; ?></th>
<th><?php echo $contact['phoneNumber']; ?></th>
<th><?php echo $contact['email']; ?></th>
<th><?php echo $contact['personAddress']; ?></th>
<th><a class="action" href="<?php echo 'edit.php?id=' . $contact['id'] ?>">Edit</a></th>
<th><a class="action" href="<?php echo 'remove.php?id=' . $contact['id'] ?>">Remove</a></th>
</tr>
<?php endforeach; ?>
</table>
</div>
<div id="operations">
    <a class="action" href="<?php echo 'add.php' ?>">Add New Contact</a>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>

<?php $conn = null; ?>