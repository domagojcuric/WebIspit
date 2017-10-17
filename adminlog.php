<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online.ispit ADMIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-success">
                <div class="panel-heading"><h3 align="center">Prijavi se kao ADMIN</h3></div>
                  
            </div>
        </div>
    </div>    
</div>    
    
<div class="container">
    <div class="row">
        <div class="col-sm-4"><br><br><br>
            
	</div> 
	<div class="col-sm-4"><br>
<br>
<br>
            <div class="panel panel-info">
                <div class="panel-heading">Prijavi se kao ADMIN</div>
                <div class="panel-body">
                    <?php
                    if(isset($_GET['run']) && $_GET['run']=="failed") 
                    {
                        echo "Your username or password is not corrct";
                    }
                    ?>
                    <form action="singinAdmin_sub.php" method="post">
                    <div class="form-group">
                        <label for="name">Username:</label>
                        <input type="name" class="form-control" name="n" id="username" placeholder="Unesi username">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Lozinka:</label>
                        <input type="password" class="form-control" name="p" id="password" placeholder="Unesi lozinku">
                    </div>
                        <button type="submit" class="btn btn-default">Potvrdi</button>
                        <a href='index.php'><button class="btn btn-default" type='button'>Povratak</button></a>
                        
		</form>
                </div>
            </div>
	</div> 
        	<div class="col-sm-4">
                   
	</div> 
    </div>
</div>

</body>

</html>
