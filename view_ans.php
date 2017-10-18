<?php

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
    <h2>Online ispit IZ PHP-a</h2> 
            
            <?php $i=1;
            foreach ($qus->qus as $qust) {?> 
            <table class="table table-bordered">
              <thead>
                  <tr class="danger">
                    <th><?php echo $i;?> <?php  echo $qust ['question'];?> </th>
                </tr>
              </thead>
              <tbody>
                  <?php if(isset ($qust ['ans1'])){?>
                  <tr class="info">
                 <td>&nbsp;1&emsp; <input type="radio" value="0" name=" <?php echo  $qust['id'];?>"/> &nbsp<?php  echo $qust ['ans1'];?></td>
                </tr>
                  <?php } ?>
                <?php if(isset ($qust ['ans2'])){?>
                <tr class="info">
                    <td>&nbsp;2&emsp; <input type="radio" value="1" name=" <?php echo  $qust['id'];?>"/>&nbsp<?php  echo $qust ['ans2'];?></td>
                </tr>
                 <?php } ?>
                <?php if(isset ($qust ['ans3'])){?>
                <tr class="info">
                    <td>&nbsp;3&emsp; <input type="radio" value="2" name=" <?php echo  $qust['id'];?>"/>&nbsp<?php  echo $qust ['ans3'];?></td>
                </tr>
                 <?php } ?>
                <?php if(isset ($qust ['ans4'])){?>
                <tr class="info">
                    <td>&nbsp;4&emsp; <input type="radio" value="3" name=" <?php echo  $qust['id'];?>"/>&nbsp<?php  echo $qust ['ans4'];?></td>
                </tr>
                 <?php } ?>
                <tr class="info">
                    <td><input type="radio" checked="checked" style="display: none" value="no_attempt" name=" <?php echo  $qust['id'];?>"/></td>
                </tr>
              </tbody>
            </table>
            <?php $i++;}?>
            <center><input type="submit" value="Potvrdi" class="btn btn-success"/></center>
            
            
            
            
            
              </div>
    <div class="col-sm-2"></div>
</div>

</body>
</html>
