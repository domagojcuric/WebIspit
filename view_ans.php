<?php
include 'class/users.php';
$ans=new users;
include 'class/dbconn.php';
?>


<!DOCTYPE html>
<html>
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
      <?php 
      $sql = "SELECT * FROM questions JOIN category ON category.id='".$_SESSION['cat']."' ";
            $result = $connect->query($sql);
            $row=$result->fetch_assoc();
            ?>
       <br><h2>Točni odgovori testa <?php echo $row['cat_name'] ?></h2><br>
                
      
       
       
   <?php
            $sql = "SELECT * FROM questions WHERE cat_id='".$_SESSION['cat']."'";
            $result = $connect->query($sql);
            $i=1;
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    ?>
   
  <table class="table table-bordered">
            <thead>
                <tr class="">
                    <th><?php echo $i;?> <?php  echo $row['question'];?> </th>
                </tr> 
           </thead>
                <tbody>
                <?php if($row['ans'] == '0'){ ?>
                <tr class="info">
                <td>&nbsp;1&emsp; <input type="radio" value="0" name=""/> &nbsp<?php  echo $row ['ans1'];?></td>
                </tr>
                <?php }else { ?>
                <tr class="danger">
                <td>&nbsp;1&emsp; <input type="radio" value="0" name=""/> &nbsp<?php  echo $row['ans1'];?></td>
                </tr>
               <?php }?> 
                
               <?php if($row['ans'] == '1'){ ?>
                <tr class="info">
                <td>&nbsp;2&emsp; <input type="radio" value="0" name=""/> &nbsp<?php  echo $row['ans2'];?></td>
                </tr>
                <?php }else { ?>
                <tr class="danger">
                <td>&nbsp;2&emsp; <input type="radio" value="0" name=""/> &nbsp<?php  echo $row['ans2'];?></td>
                </tr>
               <?php }?> 
                
                <?php if($row['ans'] == '2'){ ?>
                <tr class="info">
                <td>&nbsp;3&emsp; <input type="radio" value="0" name=""/> &nbsp<?php  echo $row ['ans3'];?></td>
                </tr>
                <?php }else { ?>
                <tr class="danger">
                <td>&nbsp;3&emsp; <input type="radio" value="0" name=""/> &nbsp<?php  echo $row['ans3'];?></td>
                </tr>
               <?php }?> 
                
               <?php if($row['ans'] == '3'){ ?>
                <tr class="info">
                <td>&nbsp;4&emsp; <input type="radio" value="0" name=""/> &nbsp<?php  echo $row ['ans4'];?></td>
                </tr>
                <?php }else { ?>
                <tr class="danger">
                <td>&nbsp;4&emsp; <input type="radio" value="0" name=""/> &nbsp<?php  echo $row['ans4'];?></td>
                </tr>
               <?php }
               $i++;
               ?> 
             
                </tbody>
 
  
  </table>
                <?php } ?>
   <?php } ?>
          <br><br>
          <center><a href='home.php'><button class="btn btn-primary" type='button'>Početna</button></a></center>
           <br><br><br><br>   </div>
    <div class="col-sm-2"></div>
</div>

</body>
</html>
