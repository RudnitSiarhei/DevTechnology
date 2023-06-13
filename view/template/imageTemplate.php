<div class="col-md-4">
  <div class="mb-4 card text-center">
    <img class="rounded" src="<?php echo '/img/featuredWorks/'.$name;?>" alt="team_1">
    <form method="post" action="../controller/deleteImagePanel.php">
      <input type="hidden" value='<?php echo $id ?>' name="deleteSubmit">
      <button type="submit" class="btn m-3 btn-danger">Delete</button>
    </form>
  </div>
</div>

