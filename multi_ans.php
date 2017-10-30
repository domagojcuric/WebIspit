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
  <script type="text/javascript"> 
  function timeout()
  {
      
      var minute=Math.floor(timeLeft/60);
      var second=timeLeft%60;
      
      var mint=checktime(minute);
      var sec=checktime(second);
      if(timeLeft<=0)
      {
          clearTimeout(tm);
          document.getElementById("form2").submit();
      }
      else
      {
          document.getElementById("time").innerHTML=mint+":"+sec;
      }
      timeLeft--;
      var tm= setTimeout(function(){timeout()},1000);
  }
  function checktime(msg)
  {
      if(msg<10)
      {
          msg="0"+msg;
      }
      return msg;
  }
  </script> 
</head>
<body onload="timeout()">
    
    <div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <h2>Multiple odgovori
        <script type="text/javascript"> 
            var timeLeft=1*60;
            </script>
            
            <div id="time" style="float: right">timeout</div></h2>
         <?php $i=1;
            
            foreach ($qus_m->qus_m as $qusta) {
                
                ?> 
        <form action="multi_ans_post.php" id="form2" method="post">
        <br>
        <table class="table table-bordered">
        <thead>
               <tr class="danger">
                    <th><?php echo $i;?>.&nbsp<?php   echo $qusta['question'];?></th>
                </tr>
        </thead>
        <tbody>
        
        
        <tr class="info">
        <td><input type="checkbox" name="<?php echo $qusta['id'];?>[]"  value="1"><?php  echo $qusta ['ans1'];?></td>
        </tr>
        <tr class="info">
        <td><input type="checkbox" name="<?php echo  $qusta['id'];?>[]"  value="2"><?php  echo $qusta ['ans2'];?></td>
        </tr>
        <tr class="info">
        <td><input type="checkbox" name="<?php echo  $qusta['id'];?>[]"  value="3"><?php  echo $qusta ['ans3'];?></td>
        </tr>
        <tr class="info">
        <td><input type="checkbox" name="<?php echo  $qusta['id'];?>[]"  value="4"><?php  echo $qusta ['ans4'];?></td>
        </tr>
        <tr class="info">
        <td><input type="checkbox" name="<?php echo  $qusta['id'];?>[]"  value="5"><?php  echo $qusta ['ans5'];?></td>
        </tr>
        </tbody>
    </table>
         <?php $i++; } ?>
   
        
        
        
        
        <div class="container">
        <input type="submit" class="btn btn-success" value="Potvrdi" />
        </div>
        
    </form>
    </div>
    <div class="col-sm-2"></div>
</div>
</body>
</html>

