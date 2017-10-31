<?php 
 
require_once 'dbconn.php';
 
if($_POST) {
    $cat_name_m = $_POST['cat_name'];
 
    $sql = "INSERT INTO category_multi (cat_name) VALUES ('$cat_name_m')";
    if($connect->query($sql) === TRUE) {
         header('Location: http://localhost:8000/admin/kategorije.php');
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>
