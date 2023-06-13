<?php
    require '../model/connectOnBD.php';
    $db = new Database();
    require_once '../model/queries.php';
    $infoAdmin = showAdminPassword($db);
    session_start();
    if($_SESSION == NULL || ($_SESSION['login'] != $infoAdmin[0]['name'] && $_SESSION['password'] != $infoAdmin[0]['password']))
    {
      header('location: forms/authForm.php');
      exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>    
  </head>
  <body>
    <main>
      <nav class="navbar col-xl-10 mx-auto rounded" style="background-color: #7749F8;">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="#" style="color:white">AdminPanel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php" style="color:white">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="imgPanel.php" style="color:white">Image Panel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controller/logOut.php" style="color:white">Exit</a>
          </li>
        </ul>
      </nav>
      <div class="container"><h1>Our Team</h1><hr></div>
      <div class="container mb-3 mt-3 center-block">
        <form method="post" action="forms/addPersonForm.php">
          <input type="submit" name="buttonForAddPerson" value="Add new person" class="btn btn-default btn-lg" style="background-color: #7749F8; color: white;" >
        </form> 
      </div>
      <?php
        $personTemplate = 'template/personTemplate.php';
        require_once '../controller/showPerson.php';
      ?>
    </main> 
    <footer>
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">PHP Study, 2023</div>
    </footer> 
  </body>
</html> 