<?php
include("db_conn.php");
if (isset($_POST["delete-product-btn"])) {
  $conn = new mysqli($DB_SERVER, $DB_USER, $DB_PASS);
  $conn->select_db(DB_NAME);
  if (isset($_POST["delete"])) {
    foreach ($_POST["delete"] as $deleteid) {
      $delete_product = "DELETE from " . PRODUCTS_TABLE . " WHERE product_id=" . $deleteid;
      $conn->query($delete_product);
     
    }
  }
  $conn->close();
  header("Location:index.php");
}
