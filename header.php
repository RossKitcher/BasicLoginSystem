<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/index.php">Login System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="">About me</a></li>
                <li class="nav-item"><a class="nav-link" href="">Contact</a></li>
            </ul>

            <?php
              if (isset($_SESSION['userId'])) {
                echo '  <form class="form-inline" action="includes/logout.inc.php" method="post">
                    <button type="submit" class="btn btn-secondary my-2 my-sm-0 mr-sm-2" name="logout-submit">Logout</button>
                  </form>';
              } else {
                echo '<form class="form-inline" action="includes/login.inc.php" method="post">
                    <input class="form-control my-2 mr-sm-2" type="text" name="mailuid" placeholder="Username/E-mail..." aria-label="search">
                    <input class="form-control my-2 mr-sm-2" type="password" name="pwd" placeholder="Password..." aria-label="search">
                    <button type="submit" class="btn btn-secondary my-2 my-sm-0 mr-sm-2" name="login-submit">Login</button>
                </form>
                <a class="btn btn-outline-light my-2 my-sm-0 mr-sm-2" href="signup.php">Register</a>';
              }
            ?>





        </div>

      </nav>
    </header>
