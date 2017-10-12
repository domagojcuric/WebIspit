<?php 
 
require_once 'dbconn.php';


if($_POST) {
    $cat_name = $_POST['cat_name'];
    
    
 
    $id = $_POST['id'];
 
    $sql = "UPDATE category SET cat_name = '$cat_name' WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit_cat.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../show_que'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
?>