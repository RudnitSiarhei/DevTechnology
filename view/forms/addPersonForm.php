<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add person form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container border col-md-5 p-3 mt-3" style="background-color: #EEEEEE;">
        <form method="POST" action="/controller/addPerson.php" role="form" class="form-horizontal p-3" enctype="multipart/form-data">
            <h2 class="text-center mb-4">Add person form</h2>
            <div class="form-group row">
                <label for="name" class="control-label col-md-2">Name</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="position" class="control-label col-md-2">Position</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="position" name="position">
                </div>
            </div>
            <div class="form-group row">
                <label for="info" class="control-label col-md-2">Description</label>
                <div class="col-md-10">
                    <textarea type="text" class="form-control" id="info" name="info" rows="4" style="resize: none;"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="photo" class="control-label col-2">Photo</label>
                <div class="col-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="customFile" >
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="linkFacebook" class="control-label col-md-2">Facebook</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="linkFacebook" name="linkFacebook">
                </div>
            </div>
            <div class="form-group row">
                <label for="linkEmail" class="control-label col-md-2">Mail</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="linkEmail" name="linkEmail">
                </div>
            </div>
            <div class="form-group row">
                <label for="linkTwitter" class="control-label col-md-2">Twitter</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="linkTwitter" name="linkTwitter">
                </div>
            </div>
            <div class="form-group row">
                <label for="linkGit" class="control-label col-md-2">Dribbble</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="linkGit" name="linkGit">
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