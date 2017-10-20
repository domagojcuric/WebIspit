<?php 
 
require_once 'dbconn.php';


if($_POST) {
    $cat_name = $_POST['cat_name'];
    
    
 
    $id = $_POST['id'];
 
    $sql = "UPDATE category SET cat_name = '$cat_name' WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        header('Location: http://localhost:8000/admin/kategorije.php');
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
?>