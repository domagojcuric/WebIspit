<?php 
 
require_once 'dbconn.php';
 
if($_POST) {
    $question = $_POST['question'];
    $ans1 = $_POST['ans1'];
    $ans2 = $_POST['ans2'];
    $ans3 = $_POST['ans3'];
    $ans4 = $_POST['ans4'];
    $ans = $_POST['ans'];
    $cat_id = $_POST['cat_id'];
    
 
    $id = $_POST['id'];
 
    $sql = "UPDATE questions SET question = '$question', ans1 = '$ans1', ans2 = '$ans2', ans3 = '$ans3', ans4 = '$ans4', ans = '$ans', cat_id = '$cat_id' WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../show_que'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
 
?>