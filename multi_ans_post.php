<?php
include 'class/users.php';
$cat_m=new users();
$cat_m=$_SESSION['cat_m'];
include 'class/dbconn.php';


            $sql = "SELECT * FROM questions1 WHERE cat_id='".$_SESSION['cat_m']."'";
            $result = $connect->query($sql);
            $answers=array();
            if($result->num_rows > 0) 
                {
                while($row = $result->fetch_assoc())
                        {
                        $answers[$row['id']]=array($row['ans'],$row['anss']);
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
       
       /*$aDoor = $_POST[$row['id']];
          if(empty($aDoor)) 
            {
        echo("Nisi odabrao odgovor");
            } 
            else
        {
        $N = count($aDoor);
        echo "<br>";
        echo $row['id']." Pitanje : Odabrao si  $N odgovor/a: ";
         
        foreach ($aDoor as $ans)
        {
          echo $ans." " ;
        }
    }
    */
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
    
    
    
}
 
  /*$aDoor = $_POST[$row['id']];
  if(empty($aDoor)) 
  {
        echo("Nisi odabrao odgovor");
  } 
  else
  {
    $N = count($aDoor);

    echo("Odabrao si  $N odgovora a to su: ");
    foreach ($aDoor as $ans)
    {
      echo $ans." " ;
    }
  } */
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>answer</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    
    
</head>
<body>
<center>
    <div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"><br><br>
  <h2><?php echo ' Tvoj rezultat ('.$pct.'%)'; ?></h2>
  <table class="table table-bordered">
      
      <thead>
      <tr>
        <th>Broj ukupnih točnih odgovora u ispitu </th>
        <th><?php echo $count; ?></th>
      </tr>    
      </thead>
      <tbody>
      <tr>
        <td>Rezultat ispita (ako se označi krivi odgovor oduzimaju se bodovi) </td>
        <td><?php echo $totalCorrect; ?></td>
      </tr>
      <tr>
        <td>Tvoji odgovori </td>
        <td><?php     foreach ($answers as $row['id'] => $answer){
       
       $aDoor = $_POST[$row['id']];
          if(empty($aDoor)) 
            {
        echo("Nisi odabrao odgovor");
            } 
            else
        {
        $N = count($aDoor);
        echo "<br>";
        echo $row['id'].". Pitanje:Odabrao si  $N odgovor/a: ";
         
        foreach ($aDoor as $ans)
        {
          echo $ans." " ;
        }
        }} ?></td>
      </tr>
      
      
      </tbody>
  </table>
    
  <a href='home.php'><button class="btn btn-warning" type='button'>Početna</button></a>
  <a href='view_ans_multi.php'><button class="btn btn-success" type='button'>Pogledaj riješenja</button></a>
 
 </div>
    
    
  <div class="col-sm-2"></div>
</div>
    
    
    
    
</center>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>