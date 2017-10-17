<?php
include 'class/users.php';

$signinAdmin=new users;
extract($_POST);
if($signinAdmin->signinAdmin($n,$p))
{
    $signinAdmin->url("admin/index.php");
}
 else 
     {
     $signinAdmin->url("adminlog.php?run=failed");
     }

?>

