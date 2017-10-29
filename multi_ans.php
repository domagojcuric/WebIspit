<?php

include 'class/users.php';
$qus_m=new users;

$cat_m=$_POST['cat_m'];
$qus_m->qus_show_m($cat_m);
$_SESSION['cat_m']=$cat_m;
//echo '<pre>';
//print_r($qus->qus);
?>
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
         <?php $i=1;
            
            foreach ($qus_m->qus_m as $qust) {
                
                ?> 
        <form action="multi_ans_post.php" method="post">
        <br>
        <table class="table table-bordered">
        <thead>
               <tr class="danger">
                    <th><?php echo $i;?>.&nbsp<?php   echo $qust['question'];?></th>
                </tr>
        </thead>
        <tbody>
        
        
        <tr class="info">
        <td><input type="checkbox" name="<?php echo $qust['id'];?>[]"  value="1"><?php  echo $qust ['ans1'];?></td>
        </tr>
        <tr class="info">
        <td><input type="checkbox" name="<?php echo  $qust['id'];?>[]"  value="2"><?php  echo $qust ['ans2'];?></td>
        </tr>
        <tr class="info">
        <td><input type="checkbox" name="<?php echo  $qust['id'];?>[]"  value="3"><?php  echo $qust ['ans3'];?></td>
        </tr>
        <tr class="info">
        <td><input type="checkbox" name="<?php echo  $qust['id'];?>[]"  value="4"><?php  echo $qust ['ans4'];?></td>
        </tr>
        </tbody>
    </table>
         <?php $i++; } ?>
   
        
        
        
        
        <div class="container">
        <input type="submit" value="Submit" />
        </div>
        
    </form>
    </div>
    <div class="col-sm-2"></div>
</div>
</body>
</html>

