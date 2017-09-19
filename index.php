<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
            <div class="panel panel-danger">
                  <div class="panel-heading">Online ispit napravljen u php-u</div>
                  <div class="panel-body">Ispit</div>
            </div>
        </div>
    </div>    
</div>    
    
<div class="container">
    <div class="row">
	<div class="col-sm-6"><br>
<br>
<br>
            <div class="panel panel-info">
                <div class="panel-heading">Prijavi se</div>
                <div class="panel-body">
		<form>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="e" id="email" placeholder="Unesi mail">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Lozinka:</label>
                        <input type="password" class="form-control" name="p" id="pwd" placeholder="Unesi lozinku">
                    </div>
                        <button type="submit" class="btn btn-default">Potvrdi</button>
		</form>
                </div>
            </div>
	</div> 
        <div class="col-sm-6">
<br>
<br>
            <div class="panel panel-info">
                
                <div class="panel-heading">Izradi račun</div>
                <div class="panel-body">
                    <?php 
                    
                    if(isset($_GET['run'])&& $_GET['run']=="success")
                        {
                            echo "<mark>Your registration successfully  done</mark>";
                        }
                    
                    ?>
                    <form method="post"action="singup_sub.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Ime:</label>
                        <input type="name" class="form-control" name="n" id="name" placeholder="Unesi ime">
                    </div>
                    <div class="form-group">
                        <label for="surname">Prezime:</label>
                        <input type="surname" class="form-control" name="s" id="surname" placeholder="Unesi prezime">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="e" id="email" placeholder="Unesi mail">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Lozinka:</label>
                        <input type="password" class="form-control" name="p" id="pwd" placeholder="Unesi lozinku">
                    </div>
                    <div class="form-group">
                        <label for="image">Dodaj sliku:</label>
                        <input type="file" class="form-control" name="img" id="file">
                    </div>
                        <button type="submit" class="btn btn-default">Potvrdi</button>
		</form>
                </div>
            </div>
	</div>
    </div>
</div>

</body>

</html>