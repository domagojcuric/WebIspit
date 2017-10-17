<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online.ispit</title>
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
                <div class="panel-heading"><h3 align="center">Dobrodošli na stranicu Online.ispit</h3></div>
                  
            </div>
        </div>
    </div>    
</div>    
    
<div class="container">
    <div class="row">
        <div class="col-sm-4"><br><br><br>
            <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/95188-200.png"/>
                    
            <h6 ><a href="adminlog.php">Prijavi se kao ADMIN</a></h6>
	</div> 
	<div class="col-sm-4"><br>
<br>
<br>
            <div class="panel panel-info">
                <div class="panel-heading">Prijavi se</div>
                <div class="panel-body">
                    <?php
                    if(isset($_GET['run']) && $_GET['run']=="failed") 
                    {
                        echo "Your email or password is not corrct";
                    }
                    ?>
                    <form action="signin_sub.php" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="e" id="email" placeholder="Unesi mail">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Lozinka:</label>
                        <input type="password" class="form-control" name="p" id="pwd" placeholder="Unesi lozinku">
                    </div>
                        <button type="submit" class="btn btn-default">Potvrdi</button>
                        <p><br>Novi korisnik? <a href="index_reg.php"> Registriraj se</a> Besplatno</p>
		</form>
                </div>
            </div>
	</div> 
        	<div class="col-sm-4">
                   <br> <br> <br>  <br> 
                    <img src="http://iz.unizd.hr/Portals/70/images/ikone/studomat.png"/>
                    
                    <h2><br><a href="https://www.isvu.hr/studomat/prijava">&nbsp;&nbsp;&nbsp;&nbsp;PRIJAVI ISPIT&nbsp;&nbsp;&nbsp;&nbsp;</a></h2>
	</div> 
    </div>
</div>

</body>

</html>