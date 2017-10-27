<?php

include 'class/dbconn.php';


            $sql = "SELECT * FROM questions1";
            $result = $connect->query($sql);
            $answers=array();
            if($result->num_rows > 0) 
                {
                while($row = $result->fetch_assoc())
                        {
                        $answers[$row['id']]=array($row['ans'][0],$row['ans'][1]);
                        }
                }
                        
                
    

if (isset($_POST)){
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    
    $totalCorrect = 0;
    

    
    /*$answers1 = array(1 => array ('1','2'), 2 => array ('1','2'), 3 => array ('3','4'), 4 => array ('2','4'), 5 => array ('3','4'));
    echo "<br>";
    print_r($answers1);
    echo "</br>";*/
    
    $count = 0;
    foreach ($answers as $ans) 
    {
      $count+= count($ans);
    }
    
    
    
    foreach ($answers as $row['id'] => $answer){
        
    
        $question = $row['id'];
      
        if(is_array($answer) && isset($_POST[$question])){
            //traĹľi odgovore
            $matches = array_intersect($answer,$_POST[$question]);
            $good_answers = count($matches);
            //Brojanje promaĹˇaja
            $bad_answers  = 0;
            foreach($_POST[$question] as $post_answer){
                if(!in_array($post_answer,$answer)){
                    $bad_answers++;
                }
            }
            //Oduzimanje dobrih i promaĹˇaja(da se ne bi stvorio minus)
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
    
    $pct = round( (($totalCorrect/$count) * 100), 0);
    echo ' Tvoj rezultat ('.$pct.'%)';
    
    
}
?>