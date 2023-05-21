<?php
include "components/database.php";
include "components/header.php";
include "components/delete_products.php";
include "components/resetDB.php";
?>

<div class="container mt-3">
  <nav class="navbar navbar-dark bg-primary">
    <div class="col-sm-8">
      <a class="navbar-brand">Product List</a>
    </div>
    <div class="col-sm-4">
      <div style="float:right">
        <button class="btn btn-sm btn-success" type="submit" onclick="document.location='add.php'" style="display: inline-block; margin-right: 10px">ADD</button>
        <form method="post" id="delete_form" style="display: inline-block; margin-right: 10px">
          <button class="btn btn-sm btn-danger" class="delete-checkbox" type="submit" name="delete-product-btn">MASS DELETE
          </button>
        </form>
        <!--<form method="post" action="index.php" style="display: inline-block; margin-right: 10px">
          <button class="btn btn-sm btn-warning" type="submit" name="resetDB">RESET</button>
        </form>-->
      </div>
    </div>
  </nav>

  <div class="container">
   
    <div class="row text-center py-5">
      <?php include "components/layout_grid.php"; ?>
    </div>
  </div>
</div>

<?php include "components/footer.php" ?>