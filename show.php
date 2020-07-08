<?php 
// Get ID of the page
$id = $_GET['id'];

// Select Contacts from database with particular ID
$pdo = $conn->prepare("SELECT * FROM Contacts WHERE id=?");
$pdo->execute([$id]);
$contacts = $pdo->fetch();

?>

<h1 class="display-4" id="headline2">Contact Information</h1>
<form>
  <!-- First Name Fields Start -->
  <div class="form-group row">
    <label class="col-sm-2 col-form-label fat">First Name:</label>
    <div class="col-sm-10">
      <input style="border-bottom: black solid 1px" type="text" readonly class="form-control-plaintext" value="<?php echo ucfirst($contacts['firstName']); ?>">
    </div>
  </div>
  <!-- First Name Fields End -->
  <!-- Last Name Fields Start -->
  <div class="form-group row">
    <label class="col-sm-2 col-form-label fat">Last Name:</label>
    <div class="col-sm-10">
      <input style="border-bottom: black solid 1px" type="text" readonly class="form-control-plaintext" value="<?php echo ucfirst($contacts['lastName']); ?>">
    </div>
  </div>
  <!-- Last Name Fields End -->
  <!-- Phone Number Fields Start -->
  <div class="form-group row">
    <label class="col-sm-2 col-form-label fat">Mobile:</label>
    <div class="col-sm-10">
      <input style="border-bottom: black solid 1px" type="text" readonly class="form-control-plaintext" value="<?php echo ucfirst($contacts['phoneNumber']); ?>">
    </div>
  </div>
  <!-- Phone Number Fields End -->
  <!-- Email Fields Start -->
  <div class="form-group row">
    <label class="col-sm-2 col-form-label fat">Email:</label>
    <div class="col-sm-10">
      <input style="border-bottom: black solid 1px" type="text" readonly class="form-control-plaintext" value="<?php echo $contacts['email'] ?>">
    </div>
  </div>
  <!-- Email Fields End -->
  <!-- Address Fields Start-->
  <div class="form-group row">
    <label class="col-sm-2 col-form-label fat">Address:</label>
    <div class="col-sm-10">
      <input style="border-bottom: black solid 1px" type="text" readonly class="form-control-plaintext" value="<?php echo ucfirst($contacts['personAddress']); ?>">
    </div>
  </div>
  <!-- Address Fields End -->
  <div>
        <!-- Buttons For Adding, Editing or Removing contact -->
        <a class="action btn btn-primary btn-sm" role="button" href="<?php echo 'add.php' ?>">Add Contact</a>
        <a class="action btn btn-info btn-sm" role="button" href="<?php echo 'edit.php?id=' . $id ?>">Edit Contact</a>
        <a class="action btn btn-warning btn-sm" role="button" href="<?php echo 'remove.php?id=' . $id ?>">Remove Contact</a>
  </div>
</form>
<!-- Close the database connection -->
<?php $conn = null; ?>
