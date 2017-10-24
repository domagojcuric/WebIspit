<?php
if (isset($_POST)){
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    
    $totalCorrect = 0;
    
    $answers = array(1 => array ('1','2','4'), 2 => array ('1','2'),3 => array ('3','4'), 4 => array ('2','4'),5 => array ('3'));
    $odg = 0;
    foreach ($answers as $ans) {
    $odg+= count($ans);
    
}
    
    
    
    foreach ($answers as $num => $answer){
        
    
        $question = 'q'.$num;
      
        if(is_array($answer) && isset($_POST[$question])){
            //traži odgovore
            $matches = array_intersect($answer,$_POST[$question]);
            $good_answers = count($matches);
            //Brojanje promašaja
            $bad_answers  = 0;
            foreach($_POST[$question] as $post_answer){
                if(!in_array($post_answer,$answer)){
                    $bad_answers++;
                }
            }
            //Oduzimanje dobrih i promašaja(da se ne bi stvorio minus)
            if($good_answers > $bad_answers){ 
                $result = $good_answers - $bad_answers;
            }else{
                $result = 0;
            }
            
            $totalCorrect = $totalCorrect + $result;        
        }elseif(isset($_POST[$question]) && strtolower($_POST[$question]) === strtolower($answer)){
            $totalCorrect++;
        }
    }
    
    $pct = round( (($totalCorrect/$odg) * 100), 0);
    
    echo ' Tvoj rezultat ('.$pct.'%)';    
}
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
         <?php

include 'class/dbconn.php';

            $sql = "SELECT * FROM questions1";
            $result = $connect->query($sql);
            $i=1;
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    ?>
    <form action="" method="post">
        <br>
        <table class="table table-bordered">
        <thead>
               <tr class="danger">
                    <th><?php echo $i;?>.&nbsp<?php   echo $row['question'];?></th>
                </tr>
        </thead>
        <tbody>
        
        
        <tr class="info">
        <td><input type="checkbox" name="<?php echo "q".$i;?>[]"  value="1"><?php  echo $row ['ans1'];?></td>
        </tr>
        <tr class="info">
        <td><input type="checkbox" name="<?php echo "q".$i;?>[]"  value="2"><?php  echo $row ['ans2'];?></td>
        </tr>
        <tr class="info">
        <td><input type="checkbox" name="<?php echo "q".$i;?>[]"  value="3"><?php  echo $row ['ans3'];?></td>
        </tr>
        <tr class="info">
        <td><input type="checkbox" name="<?php echo "q".$i;?>[]"  value="4"><?php  echo $row ['ans4'];?></td>
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

