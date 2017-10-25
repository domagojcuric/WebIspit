<?php


if (isset($_POST)){
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    
    $totalCorrect = 0;
    

    
    $answers = array(1 => array ('1','2','4'), 2 => array ('1','2'), 3 => array ('3','4'), 4 => array ('2','4'), 5 => array ('3'));

    
    $count = 0;
    
    foreach ($answers as $ans) 
    {
      $count+= count($ans);
    }
    
    
    
    foreach ($answers as $num => $answer){
        
    
        $question = 'q'.$num;
      
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