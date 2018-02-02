<?php include('validation.php'); ?>
<link rel="stylesheet" href="validation.css" type="text/css">
<div class="container">  
  <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h3>Signup</h3>
    
	<h4>Signup to our Website</h4>
    
	<fieldset>
      First Name<input placeholder="First Name" type="text" name="fname" value="<?= $fname ?>" tabindex="1" autofocus>
      <span class="error"><?= $fname_err ?></span>
    </fieldset>
    
	<fieldset>
      Last Name<input placeholder="Last Name" type="text" name="lname" value="<?= $lname ?>" tabindex="2">
      <span class="error"><?= $lname_err ?></span>
    </fieldset>
	
	<fieldset>
	  Username<input placeholder="Username" type="text" name="username" value="<?= $username ?>" tabindex="3">
      <span class="error"><?= $username_err ?></span>
    </fieldset>
    
	<fieldset>
      Password<br><input placeholder="Password" type="password" name="password" value="<?= $password ?>" tabindex="4">
      <span class="error"><?= $password_err ?></span>
    </fieldset>
	
	<fieldset>
      Confirm Password<br><input placeholder="Confirm Password" type="password" name="cpassword" value="<?= $cpassword ?>" tabindex="5">
      <span class="error"><?= $cpassword_err ?></span>
    </fieldset>
	
	<fieldset>
      Gender<br><select name="gender" tabindex="7">
			<option name="gender" value="" disabled selected hidden>Select Gender</option>
			<option name="gender" value="Male" <?php if($gender == "Male") {echo "selected";} ?> >Male</option>
			<option name="gender" value="Female" <?php if($gender == "Female"){echo "selected";}?> >Female</option>
		</select>	
    </fieldset>
	
	<fieldset>
      Mobile Number<input placeholder="Mobile Number" type="text" name="digit" maxlength="11" value="<?= $digit ?>" tabindex="7">
      <span class="error"><?= $digitErr ?></span>
    </fieldset>
    
	<fieldset>
      <button name="btnRegister" value="Register" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
	<div class="success"></div>
  </form>
</div>

</form>