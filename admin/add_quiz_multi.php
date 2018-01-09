<?php
extract($_POST);
include '../class/users.php';
$quiz_m=new users;
$qus= htmlentities($qus);
$option1= htmlentities($op1);
$option2= htmlentities($op2);
$option3= htmlentities($op3);
$option4= htmlentities($op4);
$option5= htmlentities($op5);
$array=[$option1,$option2,$option3,$option4,$option5];
$answer= array_search($ans,$array);
$answer=$answer+1;
$answer1= array_search($anss,$array);
$answer1=$answer1+1;
$query="INSERT INTO questions1 VALUES ('','$qus','$option1','$option2','$option3','$option4','$option5','$answer','$answer1','$cat_m')";
if($quiz_m->add_quiz($query))
{
    $quiz_m->url("show_que_multi.php?msg=run");
    //echo "data insert successfully";
}




?>


