<?php
  require 'header.php';
 ?>
  <main>
    <div class="container">
      <h1 class="display-2 text-center">Register</h1>
      <?php
    			if (isset($_GET['error'])) {
    				if ($_GET['error'] == "emptyfields") {
    					echo '<p class="signup-error text-center">Fill in all fields!</p>';
					} elseif ($_GET['error'] == "invaliduidemail") {
						echo '<p class="signup-error text-center">Invalid username & email!</p>';
					} elseif ($_GET['error'] == "invaliduid") {
						echo '<p class="signup-error text-center">Invalid username!</p>';
					} elseif ($_GET['error'] == "invalidmail") {
						echo '<p class="signup-error text-center">Invalid email!</p>';
					} elseif ($_GET['error'] == "passwordcheck") {
						echo '<p class="signup-error text-center">Your passwords do not match!</p>';
					} elseif ($_GET['error'] == "usertaken") {
						echo '<p class="signup-error text-center">Username is already taken!</p>';
					}
    			} else if ($_GET['signup'] == "success") {
    				echo '<p class="signup-success text-center">Sign-up successful!</p>';
    			}
    		?>
      <form action="includes/signup.inc.php" method="post">
        <div class="form-group">
          <label for="inputUsername">Username</label>
          <input type="text" class="form-control" id="inputUsername" name="uid" placeholder="Enter username">
        </div>
        <div class="form-group">
          <label for="inputEmail">Email address</label>
          <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="mail" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else</small>
        </div>
        <div class="form-group">
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" id="inputPassword" name="pwd" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="confirmPassword">Confirm password</label>
          <input type="password" class="form-control" id="confirmPassword" name="pwd-repeat" placeholder="Repeat password">
        </div>
        <button class="btn btn-primary" type="submit" name="signup-submit">Register</button>
      </form>
    </div>
  </main>
 <?php
   require 'footer.php';
  ?>
