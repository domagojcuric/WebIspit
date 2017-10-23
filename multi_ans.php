<?php
if (isset($_POST)){
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    
    $totalCorrect = 0;
    $answers = array(1 => array ('A','B'), 2 => array ('D','E'), 3 => array ('C'), 4 => array ('A'), 5 => array ('A','B','C','D'), 6 => array ('A','D','E','F'), 7 => array ('A','C'), 8 => array ('A','D'), 9 => array ('A','B','C','F'), 10 => array('C'));
    $count = 0;
    foreach ($answers as $ans) {
    $count+= count($ans);
    
}
    echo $count;
    
    
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
    
    $pct = round( (($totalCorrect/$count) * 100), 0);
    echo ' Your result ('.$pct.'%)';
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Quiz</title>
</head>
<body>
    <br><br><br><br><br>
    <form action="" method="post">
      
        <ol id="q1">
        <div>Dva najbolja igrača na svijetu</div>
        <div>
        <li><label for="q1-A"><input type="checkbox" name="q1[]" id="q1-A" value="A">Messi</label></li>
        <li><label for="q1-B"><input type="checkbox" name="q1[]" id="q1-B" value="B">Ronaldo</label></li>
        <li><label for="q1-C"><input type="checkbox" name="q1[]" id="q1-C" value="C">Dybala</label></li>
        <li><label for="q1-D"><input type="checkbox" name="q1[]" id="q1-D" value="D">Alonso</label></li>
        <li><label for="q1-E"><input type="checkbox" name="q1[]" id="q1-E" value="E">Neznam</label></li>
        <li><label for="q1-F"><input type="checkbox" name="q1[]" id="q1-F" value="F">Nema</label></li>
        </div>
        </ol>
        <ol id="q2">
        <div>Dvoznamenkasti broj</div>
        <div>
        <li><label for="q2-A"><input type="checkbox" name="q2[]" id="q2-A" value="A">1</label></li>
           <li><label for="q2-B"><input type="checkbox" name="q2[]" id="q2-B" value="B">5</label></li>
           <li><label for="q2-C"><input type="checkbox" name="q2[]" id="q2-C" value="C">111</label></li>
           <li><label for="q2-D"><input type="checkbox" name="q2[]" id="q2-D" value="D">12</label></li>
           <li><label for="q2-E"><input type="checkbox" name="q2[]" id="q2-E" value="E">23</label></li>
           <li><label for="q2-F"><input type="checkbox" name="q2[]" id="q2-F" value="F">789</label></li>
        </div>
        </ol>
        <ol id="q3">
        <div>2*2=?</div>
        <div>
        <li><label for="q3-A"><input type="checkbox" name="q3[]" id="q3-A" value="A">2</label></li>
           <li><label for="q3-B"><input type="checkbox" name="q3[]" id="q3-B" value="B">3</label></li>
           <li><label for="q3-C"><input type="checkbox" name="q3[]" id="q3-C" value="C">4</label></li>
           <li><label for="q3-D"><input type="checkbox" name="q3[]" id="q3-D" value="D">1</label></li>
           <li><label for="q3-E"><input type="checkbox" name="q3[]" id="q3-E" value="E">6</label></li>
           <li><label for="q3-F"><input type="checkbox" name="q3[]" id="q3-F" value="F">8</label></li>
         </div>
         </ol>
        <ol id="q4">
        <div>Igra godine 2012?</div>
        <div>
        <li><label for="q4-A"><input type="checkbox" name="q4[]" id="q4-A" value="A">LaSt of us</label></li>
           <li><label for="q4-B"><input type="checkbox" name="q4[]" id="q4-B" value="B">shadow of mordor</label></li>
           <li><label for="q4-C"><input type="checkbox" name="q4[]" id="q4-C" value="C">ghost recon</label></li>
           <li><label for="q4-D"><input type="checkbox" name="q4[]" id="q4-D" value="D">cof</label></li>
           <li><label for="q4-E"><input type="checkbox" name="q4[]" id="q4-E" value="E">MOHA</label></li>
           <li><label for="q4-F"><input type="checkbox" name="q4[]" id="q4-F" value="F">NFS</label></li>
         </div>
        </ol>
           <ol id="q5">
        <div>Web programiranje obuhvaća?</div>
        <div>
        <li><label for="q5-A"><input type="checkbox" name="q5[]" id="q5-A" value="A">JQ</label></li>
           <li><label for="q5-B"><input type="checkbox" name="q5[]" id="q5-B" value="B">JS</label></li>
           <li><label for="q5-C"><input type="checkbox" name="q5[]" id="q5-C" value="C">PHP</label></li>
           <li><label for="q5-D"><input type="checkbox" name="q5[]" id="q5-D" value="D">MYSQL</label></li>
           <li><label for="q5-E"><input type="checkbox" name="q5[]" id="q5-E" value="E">lcd zaslon</label></li>
           <li><label for="q5-F"><input type="checkbox" name="q5[]" id="q5-F" value="F">ništa od toga</label></li>
         </div>
          </ol>
           <ol id="q6">
        <div>6 JE DIJELJIVO SA?</div>
        <div>
        <li><label for="q6-A"><input type="checkbox" name="q6[]" id="q6-A" value="A">3</label></li>
           <li><label for="q6-B"><input type="checkbox" name="q6[]" id="q6-B" value="B">4</label></li>
           <li><label for="q6-C"><input type="checkbox" name="q6[]" id="q6-C" value="C">5</label></li>
           <li><label for="q6-D"><input type="checkbox" name="q6[]" id="q6-D" value="D">2</label></li>
           <li><label for="q6-E"><input type="checkbox" name="q6[]" id="q6-E" value="E">1</label></li>
           <li><label for="q6-F"><input type="checkbox" name="q6[]" id="q6-F" value="F">6</label></li>
         </div>
          </ol>
           <ol id="q7">
        <div>Najveći košarkaš svih vremana</div>
        <div>
        <li><label for="q10-A"><input type="checkbox" name="q7[]" id="q7-A" value="A">Dražen petrović</label></li>
           <li><label for="q7-B"><input type="checkbox" name="q7[]" id="q7-B" value="B">lJ</label></li>
           <li><label for="q7-C"><input type="checkbox" name="q7[]" id="q7-C" value="C">CURRY</label></li>
           <li><label for="q7-D"><input type="checkbox" name="q7[]" id="q7-D" value="D">ŠARIĆ</label></li>
           <li><label for="q7-E"><input type="checkbox" name="q7[]" id="q7-E" value="E">ŽIŽIĆ</label></li>
           <li><label for="q7-F"><input type="checkbox" name="q7[]" id="q7-F" value="F">markota</label></li>
         </div>
          </ol>
           <ol id="q8">
        <div>TV serije?</div>
        <div>
        <li><label for="q8-A"><input type="checkbox" name="q8[]" id="q8-A" value="A">2 i pol muškarca</label></li>
           <li><label for="q8-B"><input type="checkbox" name="q8[]" id="q8-B" value="B">gospodar prstenova</label></li>
           <li><label for="q8-C"><input type="checkbox" name="q8[]" id="q8-C" value="C">krijumčari</label></li>
           <li><label for="q8-D"><input type="checkbox" name="q8[]" id="q8-D" value="D">mamica</label></li>
           <li><label for="q8-E"><input type="checkbox" name="q8[]" id="q8-E" value="E">avatar</label></li>
           <li><label for="q8-F"><input type="checkbox" name="q8[]" id="q8-F" value="F">bljesak</label></li>
         </div>
          </ol>
           <ol id="q9">
        <div>4 elemnata iz 5. elementa? Filma</div>
        <div>
        <li><label for="q9-A"><input type="checkbox" name="q9[]" id="q9-A" value="A">vjetar</label></li>
           <li><label for="q9-B"><input type="checkbox" name="q9[]" id="q9-B" value="B">vatra</label></li>
           <li><label for="q9-C"><input type="checkbox" name="q9[]" id="q9-C" value="C">voda</label></li>
           <li><label for="q19-D"><input type="checkbox" name="q9[]" id="q9-D" value="D">šljunak</label></li>
           <li><label for="q9-E"><input type="checkbox" name="q9[]" id="q9-E" value="E">vapno</label></li>
           <li><label for="q9-F"><input type="checkbox" name="q9[]" id="q9-F" value="F">zemlja</label></li>
         </div>
          </ol>
           <ol id="q10">
        <div>iZbaci uljeza</div>
        <div>
        <li><label for="q10-A"><input type="checkbox" name="q10[]" id="q10-A" value="A">rukomet</label>
           <li><label for="q10-B"><input type="checkbox" name="q10[]" id="q10-B" value="B">košarka</label>
           <li><label for="q10-C"><input type="checkbox" name="q10[]" id="q10-C" value="C">motociklizam</label>
           <li><label for="q10-D"><input type="checkbox" name="q10[]" id="q10-D" value="D">ragby</label>
           <li><label for="q10-E"><input type="checkbox" name="q10[]" id="q10-E" value="E">vaterpolo</label>
           <li><label for="q10-F"><input type="checkbox" name="q10[]" id="q10-F" value="F">nogomet</label>
         </div>
          </ol>
          <input type="submit" value="Submit" />
    </form>

</body>
</html>
