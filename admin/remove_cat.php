<?php 
 
require_once 'php_action/dbconn.php';
 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM category WHERE id = {$id}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
 
    $connect->close();
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Delete category</title>
</head>
<body>
 
<h3>Do you really want to remove ?</h3>
<form action="php_action/remove_cat.php" method="post">
 
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
    <button type="submit">Save Changes</button>
    <a href="kategorije.php"><button type="button">Back</button></a>
</form>
 
</body>
</html>
 
<?php
}
?>

