<?php
    session_start();
    if(!$_SESSION)
    {
      header('location: authForm.php');
      exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Image Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
  </head>
  <body>
    <main>
      <nav class="navbar col-xl-10 mx-auto rounded" style="background-color: #7749F8;">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="adminPanel.php" style="color:white">AdminPanel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php" style="color:white">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controller/logOut.php" style="color:white">Exit</a>
          </li>
        </ul>
      </nav>
      <div class="container"><h1>Images for the block "FEATURED WORKS"</h1><hr></div>
      <div class="container mb-3 mt-3 center-block">
        <form method="post" action="forms/addImageForm.php">
          <input type="submit" name="buttonForAddPerson" value="Add new image" class="btn btn-default btn-lg" style="background-color: #7749F8; color: white;" >
        </form> 
      </div>
      <div class="container mb-3 mt-3"> 
        <div class="row">
          <?php
            $imageTemplate = 'template/imageTemplate.php';
            require '../controller/showImage.php';
          ?>
        </div>
      </div>
    </main> 
    <body class="d-flex flex-column min-vh-100">
      <footer>
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">PHP Study, 2023</div>
      </footer>
    </body>
  </body>
</html> 