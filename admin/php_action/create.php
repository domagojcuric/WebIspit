<?php 
 
require_once 'dbconn.php';
 
if($_POST) {
    $cat_name = $_POST['cat_name'];
 
    $sql = "INSERT INTO category (cat_name) VALUES ('$cat_name')";
    if($connect->query($sql) === TRUE) {
         header('Location: http://localhost:8000/admin/kategorije.php');
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>
