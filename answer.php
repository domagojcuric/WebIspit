<?php

include 'class/users.php';
$ans=new users;
$answer=$ans->answer($_POST);
include 'class/dbconn.php';


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

    <?php
    $total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
    $attempte_qus=$answer['right']+$answer['wrong'];
    ?>
    <div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
  <h2>Tvoj rezultat</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Ukupni broj pitanja</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Odgovorena pitanja  </td>
        <td><?php echo $attempte_qus; ?></td>
      </tr>
      <tr>
        <td>Točni odgovori</td>
        <td><?php echo $answer['right']; ?></td>
      </tr>
      <tr>
        <td>Pogrešni odgovori</td>
        <td><?php echo $answer['wrong']; ?></td>
      </tr>
      <tr>
        <td>Bez odgovora</td>
        <td><?php echo $answer['no_answer']; ?></td>
      </tr>
      <tr>
        <td>Tvoj rezultat</td>
        <td><?php 
        $per=($answer['right']*100)/ ($total_qus);
        echo $per."%";
        ?></td>
      </tr>
    </tbody>
  </table>
    
  <a href='home.php'><button class="btn btn-warning" type='button'>Početna</button></a>
  <a href='view_ans.php'><button class="btn btn-success" type='button'>Pogledaj riješenja</button></a>
 
 </div>
    
    
  <div class="col-sm-2"></div>
</div>
    
    
    
    
</center>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>