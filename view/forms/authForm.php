<!doctype html>
<html lang="eng">
  <head>
    <meta charset="utf-8">
    <title>Auth</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </head>
  <body>
    <main class="container border col-10 col-sm-6 col-md-8 col-lg-6 col-xl-4 p-3 center-block" style="background-color: #EEEEEE; margin-top: 10%;">
      <form action="/controller/authController.php" method="post" role="form" class="form-horizontal p-3 "  enctype="multipart/form-data" >
          <h2 class="text-center mb-4">Admin Authorization</h2>
          <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" name="login" id="login">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
          </div>
          <div class="row">
            <button type="submit" class="btn btn-primary" style="background: #7749F8; color: #ffffff">Sumbit</button>
            <div class="col-10 text-danger">
              <?= @$messageWarning ?>
            </div>
          </div>
      </form>
    </main>
    <footer class="fixed-bottom" >
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">PHP Study, 2023</div>
    </footer>
  </body>
</html>