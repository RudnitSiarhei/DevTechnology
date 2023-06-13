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
    <meta charset="UTF-8">
    <title>Edit person form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container border col-md-5 p-3 mt-3" style="background-color: #EEEEEE;">
        <form action="../controller/changeInfoPerson.php" method="post" role="form" class="form-horizontal p-3" enctype="multipart/form-data">
            <h2 class="text-center mb-4">Edit person form</h2>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="form-group row">
                <label for="name" class="control-label col-md-2">Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="posotion" class="control-label col-md-2">Position</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="position" name="position" value="<?php echo $position ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="control-label col-md-2">Description</label>
                <div class="col-md-10">
                    <textarea type="text" class="form-control" id="description" name="description" rows="4" style="resize: none;">
                        <?php echo $description ?>
                    </textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="photo" class="control-label col-md-2">Photo</label>
                <div class="col-md-10">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="facebook" class="control-label col-md-2">Facebook</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $facebook ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="mail" class="control-label col-md-2">Mail</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="mail" name="mail" value="<?php echo $mail ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="twitter" class="control-label col-md-2">Twitter</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $twitter ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="git" class="control-label col-md-2">Git</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="git" name="git" value="<?php echo $dribbble ?>">
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn col-2" style="background: #7749F8; color: #ffffff">Save</button>
            </div>
        </form>
    </div>
</body>
<script type="application/javascript">
    $('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $('.custom-file-label').html(fileName);
    });
</script>
</html>