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
              <li><a href="add_ques.php">Dodaj pitanaj</a></li>
              <li><a href="show_que.php">Pregled pitanja</a></li>
              <li class="active"><a href="kategorije.php">Kategorije<span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>
          <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
              <li><a href="index.php">Početna</a></li>
              <li><a href="add_ques.php">Dodaj pitanja</a></li>
              <li><a href="show_que.php">Pregled pitanja</a></li>
              <li class="active"><a href="kategorije.php">Kategorije<span class="sr-only">(current)</a></li>
          </ul>
        </div>
        
          <fieldset>
                <h2>Dodaj kategoriju</h2>
                <div>
                <form action="php_action/create.php" method="post">
                    <table>
                        <tr>
                            <th>Nova kategorija :</th>
                            <td>&nbsp&nbsp;<input type="text" name="cat_name" placeholder="Category" /></td>
                        </tr>    
                        <tr>
                            <td><br> <button type="submit">Dodaj</button></td>
                        </tr>
                    </table>
                </form>
             </div>
            </fieldset>
          
          <div class="page-header">
            <h2>Pregled pitanja</h2>
          <table class="table table-hover">
              <th>ID</th>
              <th>Category </th>
              <th>Action </th>
            <?php
            $sql = "SELECT * FROM category";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['cat_name']."</td>
                        <td>
                            <a href='edit_cat.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                            <a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?> 
          </table>
          </div>
          <br>
          <br>
          
      </div>
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