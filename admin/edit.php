<?php 
 
require_once 'php_action/dbconn.php';
 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM questions WHERE id = {$id}";
    $result = $connect->query($sql);
 
    $data = $result->fetch_assoc();
 
    $connect->close();
 
?>

<!DOCTYPE html>

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
              <li class="active"><a href="add_ques.php">Dodaj pitanja<span class="sr-only">(current)</span></a></li>
              <li><a href="show_que.php">Pregled pitanja</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dobro došli</h1>

          <div class="table-responsive">
              <table class="table table-striped">
          <fieldset>
    <legend>Edit question</legend>
 
    <form action="php_action/update.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Question</th>
                <td><input type="text" name="question" placeholder="First Name" value="<?php echo $data['question'] ?>" /></td>
            </tr>     
            <tr>
                <th>Option1</th>
                <td><input type="text" name="ans1" placeholder="Last Name" value="<?php echo $data['ans1'] ?>" /></td>
            </tr>
            <tr>
                <th>Option2</th>
                <td><input type="text" name="ans2" placeholder="Age" value="<?php echo $data['ans2'] ?>" /></td>
            </tr>
            <tr>
                <th>Option3</th>
                <td><input type="text" name="ans3" placeholder="Contact" value="<?php echo $data['ans3'] ?>" /></td>
            </tr>
            <tr>
                <th>Option4</th>
                <td><input type="text" name="ans4" placeholder="Contact" value="<?php echo $data['ans4'] ?>" /></td>
            </tr>
            <tr>
                <th>ANSWER</th>
                <td><input type="text" name="ans" placeholder="Contact" value="<?php echo $data['ans'] ?>" /></td>
            </tr>
            <tr>
                <th>Option4</th>
                <td><input type="text" name="cat_id" placeholder="Contact" value="<?php echo $data['cat_id'] ?>" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><button type="submit">Save Changes</button></td>
                <td><a href="show_que.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
        </fieldset>
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

    <?php } ?>