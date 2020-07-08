<div id="center-screen">
  <div class="container col-12 col-sm-10 col-md-9 d-flex flex-column align-items-center blurADD">
    <h1 id="headlineADD">Add contact</h1>
      <a class="back-linkADD" href="<?php echo 'indexC.php' ?>">&laquo; Back to List</a>

<?php require('check_form.php'); ?>

        <form class="col-sm-10" action="<?php echo 'add.php'; ?>" method="post">
          <div class="form-group row">
            <label class="col-form-label col-sm-4 col-md-3 col-lg-2 fat">First Name:</label>
              <div class="input-group col-sm-8 col-md-9 col-lg-10">
                <input type="text" name="fname" class="form-control kul" value="<?php print $fname; ?>"/>
              </div>
              <div class="col-sm-8 col-md-9 col-lg-10">
                <p><?php echo $fnameError; ?></p>
              </div>
          </div>
          
          <div class="form-group row">
            <label class="control-label col-sm-4 col-md-3 col-lg-2 fat">Last Name:</label>
              <div class="input-group col-sm-8 col-md-9 col-lg-10">
                <input type="text" name="lname" class="form-control kul" value="<?php print $lname; ?>"/>
              </div>
              <div class="col-sm-8 col-md-9 col-lg-10">
                <p><?php echo $lnameError; ?></p>
              </div>
          </div>
          
          <div class="form-group row">
            <label class="control-label col-sm-4 col-md-3 col-lg-2 fat">Mobile:</label>
              <div class="input-group col-sm-8 col-md-9 col-lg-10">
                <input type="text" name="pnumber" class="form-control kul" value="<?php print $phone ?>"/>
              </div>
              <div class="col-sm-8 col-md-9 col-lg-10">
                <p><?php echo $phoneError; ?></p>
              </div>
          </div>
          
          <div class="form-group row">
            <label class="control-label col-sm-4 col-md-3 col-lg-2 fat">Email:</label>
              <div class="input-group col-sm-8 col-md-9 col-lg-10">
                <input type="text" name="email" class="form-control kul" value="<?php  print $email; ?>"/>
              </div>
              <div class="col-sm-8 col-md-9 col-lg-10">
                <p><?php echo $emailError; ?></p>
              </div>
          </div>
          
          <div class="form-group row">
            <label class="control-label col-sm-4 col-md-3 col-lg-2 fat">Address:</label>
              <div class="input-group col-sm-8 col-md-9 col-lg-10">
                <input type="text" name="address" class="form-control kul" value="<?php print $Paddress; ?>"/>
              </div>
          </div>

          <input class="boljiinputADD" type="submit" value="Add Contact"/>
        </form>
      </div>
    </div>


<?php
 // If the required fields are not empty, proceed to next if
 if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email'])) {
    // If the validation is complete write in words[]
   if ((PregLetters($fname) && PregLetters($lname) && PregNumbers($email)) === true) {
       // INSERT INTO THE TABLE
       $pdo = $conn->prepare("INSERT INTO Contacts (firstName, lastName, phoneNumber , email, personAddress) VALUES (?, ?, ?, ?, ?)");
       $pdo->execute([$fname,$lname, $phone, $email,$Paddress]);
       echo "SUCCESS";
       redirect_to('indexC.php');
   }
}
?>