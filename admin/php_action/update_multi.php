<?php 
 
require_once 'dbconn.php';

if($_POST) {
    $question = $_POST['question'];
    $ans1 = $_POST['ans1'];
    $ans2 = $_POST['ans2'];
    $ans3 = $_POST['ans3'];
    $ans4 = $_POST['ans4'];
    $ans5 = $_POST['ans5'];
    $ans = $_POST['ans'];
    $anss = $_POST['anss'];
    $cat_id = $_POST['cat_id'];
    
 
    $id = $_POST['id'];
 
    $sql = "UPDATE questions1 SET question = '$question', ans1 = '$ans1', ans2 = '$ans2', ans3 = '$ans3', ans4 = '$ans4', ans5 = '$ans5', ans = '$ans', anss = '$anss', cat_id = '$cat_id' WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        header('Location: http://localhost:8000/admin/show_que_multi.php');
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}

?>

