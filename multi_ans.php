<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</head>
<body>
    
    <div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <h2>Multiple odgovori</h2>
         <?php

include 'class/dbconn.php';

            $sql = "SELECT * FROM questions1";
            $result = $connect->query($sql);
            $i=1;
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    ?>
        <form action="multi_ans_post.php" method="post">
        <br>
        <table class="table table-bordered">
        <thead>
               <tr class="danger">
                    <th><?php echo $i;?>.&nbsp<?php   echo $row['question'];?></th>
                </tr>
        </thead>
        <tbody>
        
        
        <tr class="info">
        <td><input type="checkbox" name="<?php echo  $row['id'];?>[]"  value="1"><?php  echo $row ['ans1'];?></td>
        </tr>
        <tr class="info">
        <td><input type="checkbox" name="<?php echo  $row['id'];?>[]"  value="2"><?php  echo $row ['ans2'];?></td>
        </tr>
        <tr class="info">
        <td><input type="checkbox" name="<?php echo  $row['id'];?>[]"  value="3"><?php  echo $row ['ans3'];?></td>
        </tr>
        <tr class="info">
        <td><input type="checkbox" name="<?php echo  $row['id'];?>[]"  value="4"><?php  echo $row ['ans4'];?></td>
        </tr>
        </tbody>
    </table>
         <?php $i++; } ?>
   <?php } ?>
        
        
        
        
        <div class="container">
        <input type="submit" value="Submit" />
        </div>
        
    </form>
    </div>
    <div class="col-sm-2"></div>
</div>
</body>
</html>

