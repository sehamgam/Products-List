<?php
include "components/header.php";
include "components/database.php";
include "components/save_product.php";
?>

<div class="container mt-3">
  <nav class="navbar navbar-dark bg-primary">
    <div class="col-sm-8">
      <a class="navbar-brand">Product Add</a>
    </div>
    <div class="col-sm-4">
      <div style="float:right">
        <button class="btn btn-sm btn-success" type="submit" form="product_form" name="save" style="display: inline-block; margin-right: 10px">SAVE</button>
        <button class="btn btn-sm btn-danger" type="submit" onclick="document.location='index.php'" style="display: inline-block; margin-right: 10px">CANCEL</button>
      </div>
    </div>
  </nav>
</div>

<div class="container">

  <div class="col-8 my-3">
    <form id="product_form"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="sku" class="col-sm-2 col-form-label">SKU</label>
        <div class="col-sm-6">
          <input class="form-control" type="text" id="sku" name="sku" value="<?php echo $sku;?>" required>
        </div>
        <span class="error"><?php echo $skuErr;?></span>
      </div>
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name  </label>
        <div class="col-sm-6">
          <input class="form-control" type="text" id="name" name="name" value="<?php echo $name;?>" required>
        </div>
        <span class="error"><?php echo $nameErr;?></span>
      </div>
      <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">Price ($)</label>
        <div class="col-sm-6">
          <input class="form-control" type="number" id="price" min="0.01" max="10000.00" step="0.01" name="price" value="<?php echo $price;?>" required>
        </div>
        <span class="error"><?php echo $priceErr;?></span>
      </div>
   
      <div class="form-group row">
        <label for="typeswitcher" class="col-sm-3 col-form-label">Type Switcher</label>
        <div class="col-sm-5">
          <select class="form-control" name="type" id="type_switcher" required>
            <option selected value="">Type Switcher</option>
            <option value="1">DVD</option>
            <option value="2">Book</option>
            <option value="3">Furniture</option>
          </select>
        </div>
      </div>
      <div id="new_menu"></div>
    </form>
  </div>
</div>

<?php include "components/footer.php" ?>