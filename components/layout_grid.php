<?php

while ($row = $result->fetch_assoc()) {
  products_grid($row["product_id"], $row["SKU"], $row["name"], $row["price"], $row["size"], $row["weight"], $row["height"], $row["width"], $row["length"]);
}

function products_grid($product_id, $SKU, $name, $price, $size, $weight, $height, $width, $length)
{
  $element = "
  <div class='col-md-3 col-sm-6 my-3 my-md-0'>
    <form action='index.php' method='post'>
      <div class='card-deck'>
        <div class='card'>
        
          <div class='card-body'>
            <h5 class='card-title'>$SKU</h5>
            <h5 class='card-text'>$name</h5>
            <h5 class='card-text'>$price  $</h5>";
  if (!empty($size)) {
    $element .= "
            <h6 class='card-text'>Size: $size MB</h6>";
  }
  if (!empty($weight)) {
    $element .= "
            <h6 class='card-text'>Weight: $weight Kg</h6>";
  }
  if (!empty($height)) {
    $element .= "
            <h6 class='card-text'>Dimensions: $height x $width x $length</h6>";
  }
  $element .= "
            <div class='form-check'>
              <input class='form-check-input' type='checkbox' form='delete_form' name='delete[]' value='$product_id' id='defaultCheck1' class='delete-checkbox'>
              <label class='form-check-label' for='defaultCheck1'>
                
              </label>
            </div>
          
          </div>
        </div>
      </div>
      
    </form>
      <br/>
  </div>
  ";

  echo $element;
};
