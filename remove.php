<?php 

require('connection.php');
require('functions.php');



$id = $_GET['id'];
$pdo = $conn->prepare("SELECT * FROM Contacts WHERE id=?");
$pdo->execute([$id]);
$contacts = $pdo->fetch();

if(request_is_post()) {
  $del = $conn->prepare("DELETE FROM Contacts WHERE id=? LIMIT 1");
  $del->execute([$id]);
  redirect_to('indexC.php');
} 

?>

<?php if ($id == '') { ?>
    <?php   redirect_to('indexC.php'); ?>
    <?php } else { ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css">
  <title>Remove Contact</title>
</head>
<body style="background-image: url('bg.jpg');">

<div id="center-screen">
<div class="container">
  <div class="row">
    <div class="col">

    </div>
    <div class="col-6">
<div class="jumbotron">
  <a class="back-linkDEL" href="<?php echo 'indexC.php' ?>">&laquo; Back to List</a>
  <h2 class="display-4 headlineDEL">Delete Contact</h2>

<h4 id="headline2DEL">Are you sure you want to delete this contact?</h4>
<label class="fat">First Name:</label>
<p class="center-att"><?php echo $contacts['firstName'] ?></p>

<label class="fat">Last Name:</label>
<p class="center-att"><?php echo $contacts['lastName'] ?></p>

<label class="fat">Mobile:</label>
<p class="center-att"><?php echo $contacts['phoneNumber'] ?></p>

<label class="fat">Email:</label>
<p class="center-att"><?php echo $contacts['email'] ?></p>

<label class="fat">Address:</label>
<p class="center-att"><?php echo $contacts['personAddress'] ?></p>

<form action="<?php echo "remove.php?id=" . $contacts['id']; ?>" method="post">
  <input class="boljiinputDEL" type="submit" value="Delete Contact"/>
</form>

</div>
    </div>
    <div class="col"></div>
</div>
</div>
</div>
</body>
</html>
      <?php } ?>

<?php $conn = null; ?>
