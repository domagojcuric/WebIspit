<?php
include '../class/users.php';
$cat_m=new users;
$category=$cat_m->cat_shows_m();
//print_r($category);
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
            <li class="active"><a href="add_ques.php">Dodaj pitanja<span class="sr-only">(current)</span></a></li>
            <li><a href="show_que.php">Pregled pitanja</a></li>
            <li><a href="show_que_multi.php">Pregled pitanja(multi)</a></li>
              
              
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          

          <div class="table-responsive">
              <table class="table table-striped">
          <?php
          if(isset($_GET['msg'])&& !empty($_GET['msg']))
          {
              echo "<p>data insert successfully</p>"; 
          }
          
          ?>
                  <form method="post" action="add_quiz_multi.php">
                          <div class="form-group">
                            <label for="text">Pitanje:</label>
                            <input type="text" class="form-control" name="qus"  placeholder="Unesi pitanje">
                          </div>
                          <div class="form-group">
                            <label for="text">Odgovor 1:</label>
                            <input type="text" class="form-control" name="op1" placeholder="Unesi odgovor 1">
                          </div>
                          <div class="form-group">
                            <label for="text">Odgovor 2:</label>
                            <input type="text" class="form-control" name="op2" placeholder="Unesi odgovor 2">
                          </div>

                          <div class="form-group">
                            <label for="text">Odgovor 3:</label>
                            <input type="text" class="form-control" name="op3" placeholder="Unesi odgovor 3">
                          </div>

                          <div class="form-group">
                            <label for="text">Odgovor 4:</label>
                            <input type="text" class="form-control" name="op4" placeholder="Unesi odgovor 4">
                          </div>
                          <div class="form-group">
                            <label for="text">Odgovor 5:</label>
                            <input type="text" class="form-control" name="op5" placeholder="Unesi odgovor 5">
                          </div>
                          <div class="form-group">
                            <label for="text">Točan odgovor 1(riječima):</label>
                            <input type="text" class="form-control" name="ans" placeholder="Unesi odgovor">
                          </div>
                           <div class="form-group">
                            <label for="text">Točan odgovor 2(riječima):</label>
                            <input type="text" class="form-control" name="anss" placeholder="Unesi odgovor">
                          </div>
                            <div class="form-group" >
                                <select class="form-control" id="sel1" name="cat_m">
                                    
                                    <option value="" disabled>choose category</option>
                                    <?php 
                                    foreach($category as $c)
                                    {
                                        echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
                                    }
                                    
                                    ?>
                                  
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button><br>
                </form>
              </tbody>
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
