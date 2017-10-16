<?php 
 
require_once 'dbconn.php';
 
if($_POST) {
    $id = $_POST['id'];
 
    $sql = "DELETE FROM questions WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        header('Location: http://localhost:8000/admin/show_que.php');
    } else {
        echo "Error updating record : " . $connect->error;
    }
 
    $connect->close();
}
 
?>