<?php
include("db_conn.php");
require_once "components/validation.php";

if (!$form_errors) {
  if (isset($_POST["save"])) {

    $conn = new mysqli($DB_SERVER, $DB_USER, $DB_PASS);
    $conn->select_db($DB_NAME);

    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $size = $_POST['size'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];

    $stmt = $conn->prepare("INSERT INTO " . $PRODUCTS_TABLE . " (SKU, name, price, type) VALUES (?, ?, ? , ?)");
    if (!$stmt) die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    $stmt->bind_param("ssdi", $sku, $name, $price, $type);
    if (!$stmt->execute()) {
      die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    }
    $stmt->close();

    $product_id = $conn->insert_id;

    switch ($type) {
      case "1":
        $new_type = "dvds";
        $stmt = $conn->prepare("INSERT INTO " . $new_type . " VALUES (?, ?)");
        if (!$stmt) die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
        $stmt->bind_param("id", $product_id, $size);
        break;
      case "2":
        $new_type = "books";
        $stmt = $conn->prepare("INSERT INTO " . $new_type . " VALUES (?, ?)");
        if (!$stmt) die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
        $stmt->bind_param("id", $product_id, $weight);
        break;
      case "3":
        $new_type = "furnitures";
        $stmt = $conn->prepare("INSERT INTO " . $new_type . " VALUES (?, ?, ?, ?)");
        if (!$stmt) die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
        $stmt->bind_param("iddd", $product_id, $height, $width, $length);
        break;
    }
    if (!$stmt->execute()) {
      die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    }
    $stmt->close();

    $conn->close();

    header("Location:index.php");
  }
}
