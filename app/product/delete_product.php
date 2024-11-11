<?php
session_start();
require_once(__DIR__."/../config/Directories.php"); //to handle folder specific path
include(ROOT_DIR."/app/config/DatabaseConnection.php");
    $db = new DatabaseConnection();
    $conn = $db->connectDB();

    $productList=[];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $productId=$_POST["id"];
    
    try {
        $sql  = "DELETE FROM `products` WHERE products.id=:p_id"; //del statement here
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":p_id", $productId);
        $stmt->execute();

        // redirect to views/admin/product/index.php
        $_SESSION["success"]="Product has successfully been deleted";
        header("location: ".BASE_URL."views/admin/product/index.php");
        exit;
        
    } catch (PDOException $e){
       echo "Connection Failed: " . $e->getMessage();
       $db = null;
    }
}
    
?>