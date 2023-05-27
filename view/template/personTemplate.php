<div class="container mb-3 col-10">
        <div class="row col-sm-9 col-md-12 col-lg-6 col-xl-5 pt-3 justify-content-between rounded border">
          <div class="d-flex flex-row justify-content-between w-100">
            <div class="block">
              <p>
                <?php
                  echo $name.' - '.$position;
                ?>
              </p>
            </div>
            <div class="d-flex">
              <div class="mr-3">
                <form method="post" action="../controller/editPerson.php">
                  <input type="hidden" value='<?php echo $id ?>' name="editSubmit">
                  <input type="image" src="/img/edit.png" alt="Edit" name="editSubmit">
                </form>
              </div>
              <div>
                <form method="post" action="../controller/deletePerson.php">
                  <input type="hidden" value='<?php echo $id ?>' name="deleteSubmit">
                  <input type="image" src="/img/delete.png" alt="Delete" name="deleteSubmit">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>