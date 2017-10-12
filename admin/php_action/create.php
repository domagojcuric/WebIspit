<?php 
 
require_once 'dbconn.php';
 
if($_POST) {
    $cat_name = $_POST['cat_name'];
 
    $sql = "INSERT INTO category (cat_name) VALUES ('$cat_name')";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>
