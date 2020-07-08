<?php 

require('connection.php');
require('functions.php');

// Get everything from database as associative array

// Take * from database and output it as assoc array
$contacts = find_all_contacts();

// Get ID of the page
$id = $_GET['id'];

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

<div class="container">
    <div class="row">
        <!-- Left Div with Contacts -->
        <div class="col-3 blur1 pic-container" >
            <h2 id="headline2">Contacts</h2>
            <!-- Start Foreach Loop for every contact -->
            <?php foreach($contacts as $contact): ?>
            <ul class="list-unstyled">
                <li class="media">
                    <a class="links" href="<?php echo 'indexC.php?id=' . $contact['id'] ?>">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1"><?php echo ucfirst($contact['firstName']) . " " . ucfirst($contact['lastName']); ?></h5>
                            <p><?php echo $contact['email'] ?></p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- End Foreach Loop -->
            <?php endforeach; ?>
        </div>

        <!-- Right Div with Contact Information -->
        <div class="col-9 blur">
        <!-- If there is selected ID, show contact information if there's no ID, Show other content **************** -->
        <?php if ($id == '') { 
                require('message.php');
             } else { 
                require('show.php'); 
            } ?>
 
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
