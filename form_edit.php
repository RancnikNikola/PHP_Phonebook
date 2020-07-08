!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Edit Contact</title>
</head>
<body style="background-image: url('bg.jpg');">
    <div id="center-screenEDIT">
      <div class="container blurEDIT col-12 col-sm-10 col-md-9 d-flex flex-column align-items-center">
      <a class="back-linkEDIT" href="<?php echo 'indexC.php' ?>">&laquo; Back to List</a>
        <h3 id="headline2EDIT">Edit Contact</h3>
        <hr>
        <!-- Form start -->
        <form class="col-sm-10" action="<?php echo "edit.php?id=" . $id; ?>" method="post">
          <div class="form-group row">
            <!-- First Name Fields Start -->
            <label class="col-form-label col-sm-4 col-md-3 col-lg-2 fat">First Name:</label>
              <div class="input-group col-sm-8 col-md-9 col-lg-10">
                <input type="text" name="fname" class="form-control kulEDIT" value="<?php print $contacts['firstName']; ?>"/>
              </div>
              <div class="col-sm-8 col-md-9 col-lg-10">
                <!-- Display Error -->
                <p><?php echo $fnameError; ?></p>
              </div>
          </div>
          <!-- First Name Fields Start -->

          <!-- Last Name Fields Start -->
          <div class="form-group row">
            <label class="control-label col-sm-4 col-md-3 col-lg-2 fat">Last Name:</label>
              <div class="input-group col-sm-8 col-md-9 col-lg-10">
                <input type="text" name="lname" class="form-control kulEDIT" value="<?php print $contacts['lastName']; ?>"/>
              </div>
              <div class="col-sm-8 col-md-9 col-lg-10">
                <!-- Display Error -->
                <p><?php echo $lnameError; ?></p>
              </div>
          </div>
          <!-- Last Name Fields End -->

          <!-- Phone Number Fields Start -->
          <div class="form-group row">
            <label class="control-label col-sm-4 col-md-3 col-lg-2 fat">Mobile:</label>
              <div class="input-group col-sm-8 col-md-9 col-lg-10">
                <input type="text" name="pnumber" class="form-control kulEDIT" value="<?php print $contacts['phoneNumber']; ?>"/>
              </div>
              <div class="col-sm-8 col-md-9 col-lg-10">
              <!-- Display Error -->
                <p><?php echo $phoneError; ?></p>
              </div>
          </div>
          <!-- Phone Number Fields End -->

          <!-- Email Fields Start -->
          <div class="form-group row">
            <label class="control-label col-sm-4 col-md-3 col-lg-2 fat">Email:</label>
              <div class="input-group col-sm-8 col-md-9 col-lg-10">
                <input type="text" name="email" class="form-control kulEDIT" value="<?php  print $contacts['email']; ?>"/>
              </div>
              <div class="col-sm-8 col-md-9 col-lg-10">
                <!-- Display Error -->
                <p><?php echo $emailError; ?></p>
              </div>
          </div>
          <!-- Email Fields End -->

          <!-- Address Fields Start -->
          <div class="form-group row">
            <label class="control-label col-sm-4 col-md-3 col-lg-2 fat">Address:</label>
            <div class="input-group col-sm-8 col-md-9 col-lg-10">
              <input type="text" name="address" class="form-control kulEDIT" value="<?php print $contacts['personAddress']; ?>"/>
            </div>
          </div>
           <!-- Address Fields End -->
        <input class="boljiinputEDIT" type="submit" value="Edit Contact"/>
        </form>
      </div>    
    </div>                