<?php
include ("php_action/dbconn.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="..//css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index.php">Admin panel</a>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li><a href="index.php">Početna</a></li>
              <li><a href="kategorije.php">Dodaj ispit</a></li>
              <li><a href="add_ques.php">Dodaj pitanja</a></li>
              <li><a href="show_que.php">Pregled pitanja(single)</a></li>
              <li class="active"><a href="show_que_multi.php">Pregled pitanja(multi)<span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
          <div class="container">
            <h2>Pregled Ispita </h2>
              
            <table class="table table-hover" >
              <th>Šifra ispita</th>
              <th>Naziv ispita</th>
              
            <?php
            $sql = "SELECT * FROM category_multi";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['cat_name']."</td>
                        
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?> 
              </table>
              
              <br><br>
              
              <h2>Pregled pitanja </h2>
          <table class="table table-hover">
              <th>ID</th>
              <th>Pitanje </th>
              <th>Odg 1</th>
              <th>Odg 2</th>
              <th>Odg 3</th>
              <th>Odg 4</th>
              <th>Odg 5</th>
              <th>Odgovor 1(index od 1-5)</th>
              <th>Odgovor 2(index od 1-5)</th>
              <th>Šifra ispita</th>
              <th>Action</th>
            <?php
            $sql = "SELECT * FROM questions1";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['question'] ?></td>
                        <td><?php echo $row['ans1'] ?></td>
                        <td><?php echo $row['ans2'] ?></td>
                        <td><?php echo $row['ans3'] ?></td>
                        <td><?php echo $row['ans4'] ?></td>
                         <td><?php echo $row['ans5'] ?></td>
                        <td><?php echo $row['ans'] ?></td>
                        <td><?php echo $row['anss'] ?></td>
                        <td><?php echo $row['cat_id'] ?></td>
                        
                        
                        <td>
                            <a href='edit.php?id=<?php echo $row['id'] ?>'><button class='btn btn-warning' type='button'>Edit</button></a>
                            <a onclick="return confirm('Želite li obrisati ovo pitanje')" href='show_que.php?id=<?php echo $row['id'] ?>'><button class='btn btn-danger' type='button'>Remove</button></a>
                        </td>
                    </tr>
              <?php  }
            } else { ?>
                 <tr><td colspan='5'><center>No Data Avaliable</center></td></tr>
           <?php 
            }
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $result1=$connect->query("DELETE FROM questions1 WHERE id='$id'");
                if($result1){
                    ?>
                    <script>
                    alert("sucess to delete");
                    window.location.href="show_que_multi.php";
                    </script>
          <?php
                }else{
            ?> 
          <script>
          alert("FAIL to delete");
          window.location.href="index.php";
          </script>
          <?php
                }
            }
            ?>
          </table>
            </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>




