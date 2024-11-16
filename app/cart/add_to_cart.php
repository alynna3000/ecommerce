<?php
session_start();

require_once($_SERVER["DOCUMENT_ROOT"]."/app/config/Directories.php");
require_once(ROOT_DIR."includes/header.php");

$productId=htmlspecialchars($_POST["id"]);
$quantity=htmlspecialchars($_POST["quantity"]);

// INSERT INTO CART
$sql = "INSERT INTO carts(user_id,product_id,quantity,unit_price,total_price,created_at,update_at) VALUES (:p_user_id, :p_product_id, :p_unit_price, :p_total_price, NOW(), NOW())";
$stmt = $conn->prepare($sql);
$stm->bindParam(':p_user_id')
?>