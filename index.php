<?php
  require 'header.php';
 ?>

  <main>
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <?php
            if (isset($_SESSION['userId'])) {
              echo '<p class="signup-success">You are logged in!</p>';
            } else {
              echo '<p class="signup-error">You are logged out!</p>';
            }
           ?>


        </div>
      </div>
    </div>
  </main>

<?php
  require 'footer.php';
?>
