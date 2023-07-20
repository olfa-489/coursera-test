<?php
//connexion a la base de donnee appelee projet
// user par defaut  root

$user="root";
$mdp="FAIDI@olfa2001";
$bd="ecommerce";
$server="localhost";

$link=mysqli_connect($server,$user,$mdp,$bd);

if($link){
   //echo " connexion etablit!";
}
else{
    die(mysqli_connect_error());
}

?>
