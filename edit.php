<?php 

// Get files for connection to database and functions
require('connection.php');
require('functions.php');

// Get ID of the page
$id = $_GET['id'];

// Select Contacts from database with particular ID
$contacts = findAllContactsByID();
echo $contacts;



?>

<?php 

if ($id == '') { 
   redirect_to('indexC.php'); 
} else { 

?>

<?php require('check_form.php'); ?>

<?php require('form_edit.php') ?>  
    
<?php 



  if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['pnumber'])) {
    // If the validation is complete write in words[]
   if ((PregLetters($fname) && PregLetters($lname) && PregNumbers($phone)) === true) {
       // INSERT INTO THE TABLE
       $pdo = $conn->prepare("UPDATE Contacts SET firstName=?, lastName=?, phoneNumber=? , email=?, personAddress=? WHERE id=?");
       $pdo->execute([$fname,$lname, $phone, $email, $Paddress, $id]);
       redirect_to("indexC.php");
   }
}

// If the required fields are not empty, proceed to next if

?>

<?php } // Here Ends Else Block ?>

<?php include('footer.php'); ?>