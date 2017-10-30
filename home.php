<?php

include 'class/users.php';
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
$profile->cat_shows_m();
//print_r($profile->data);
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>OnlineIspiti</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Online ispit</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Početna</a></li>
    <li><a data-toggle="tab" href="#menu1">Profil</a></li>
    
    <li style="float:right"><a href="logout.php">Odjava</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        
      <h2>Dobrodošli</h2> <br>
      <p>Upute za pokretanje ispita:</p>
      
      <ol>
          <li> Pritisni button "Pokreni ispit"</li>
          <li> U padajućem izborniku odaberi ispit koji želiš riješavati</li>
          <li> Zatim kada ste odabrali kliknite na button "Pokreni"</li>
          
      </ol>
      <br><br><br>
      
      <h4>Napomena!!! Imate određeno vrijeme u kojem morate riješiti ispit. Timer se nalazi desno gore u kutu kada pokrenete ispit.
      SRETNO</h4>
      <br><br><br>
      <div class="col-sm-6"><center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Pokreni ispit (single)</button></center></div>
      
      <div class="col-sm-6"><center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select1">Pokreni ispit (multiple)</button></center></div>
     
      
      
      <div class="col-sm-6"><br>
      <div id="select" class="tab-pane fade">
 
             
          
      <form method="post" action="qus_show.php">
      <select class="form-control" id="" name="cat">
          <option>Odaberi ispit</option>
      <?php    
      foreach($profile->cat as $category)
      {?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['cat_name'];?> </option>
        <?php  }?> 
      </select>
          <br>
      <center><input type="submit" value="Potvrdi" class="btn btn-primary" /></center>
      </form> 
      </div>
      </div>
      
      
      <div class="col-sm-6">
      <div id="select1" class="tab-pane fade">
          <form method="post" action="multi_ans.php"><br>
      <select class="form-control" id="" name="cat_m">
      <option>Odaberi ispit multiple</option>
      <?php    
      foreach($profile->cat_m as $category1)
      {?>
        <option value="<?php echo $category1['id']; ?>"><?php echo $category1['cat_name'];?> </option>
        <?php  }?> 
      </select>
              <br>
      <center><input type="submit" value="Potvrdi" class="btn btn-primary" /></center>
      </form> 
      
      </div>
     </div>
      
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Pokaži profil</h3>
      
      
      <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Ime</th>
        <th>Prezime</th>
        <th>email</th>
        <th>Slika profila</th>
      </tr>
    </thead>
    <tbody>
        
        <?php 
        foreach ($profile->data as $prof)
        {?>
      <tr>
        <td><?php echo $prof['id'];?></td>
        <td><?php echo $prof['name'];?></td>
        <td><?php echo $prof['surname'];?></td>
        <td><?php echo $prof['email'];?></td>
        <td><img src="img/<?php echo $prof['img'] ;?>" alt="" width="50px" height="50px"></td>
     </tr>
    </tbody>
        <?php   }?>
  </table>
              
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>
