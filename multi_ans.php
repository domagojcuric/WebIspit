<?php
if (isset($_POST)){
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    
    $totalCorrect = 0;
    $answers = array(1 => array ('A','B'), 2 => array ('C','D'),3 => array ('A','B'), 4 => array ('C','D'),5 => array ('A','B'));
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
 <?php

include 'class/dbconn.php';

            $sql = "SELECT * FROM questions";
            $result = $connect->query($sql);
            $i=1;
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>proba</title>
</head>
<body>
    <br><br>
    <form action="" method="post">
      
        <ol id="<?php echo "q".$i;?>">
        <div><?php echo $i;?>.&nbsp<?php   echo $row['question'];?></div>
        <div>
        <br>
        <li><label for="<?php echo "q".$i;?>-A"><input type="checkbox" name="<?php echo "q".$i;?>[]" id="<?php echo "q".$i;?>-A" value="A"><?php  echo $row ['ans1'];?></label></li>
        <li><label for="<?php echo "q".$i;?>-B"><input type="checkbox" name="<?php echo "q".$i;?>[]" id="<?php echo "q".$i;?>-B" value="B"><?php  echo $row ['ans2'];?></label></li>
        <li><label for="<?php echo "q".$i;?>-C"><input type="checkbox" name="<?php echo "q".$i;?>[]" id="<?php echo "q".$i;?>-C" value="C"><?php  echo $row ['ans3'];?></label></li>
        <li><label for="<?php echo "q".$i;?>-D"><input type="checkbox" name="<?php echo "q".$i;?>[]" id="<?php echo "q".$i;?>-D" value="D"><?php  echo $row ['ans4'];?></label></li>
        </div>
        </ol>
         <?php $i++; } ?>
   <?php } ?>
        
        
        
        <br>
        <input type="submit" value="Submit" />
        <br><br><br>
    </form>

</body>
</html>


<?php echo "ukupan broj odgovara ".$odg; ?>