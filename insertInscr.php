<?php

include "conx.php";

if((isset($_POST["name"]))&&(isset($_POST["surname"])) &&(isset($_POST["mail"])) &&(isset($_POST["adress"]))  && (isset($_POST["password"])) ){
    $_name=$_POST["name"];
    $_surname=$_POST["surname"];
    $_mail=$_POST["mail"];
    $_adress=$_POST["adress"];
    $_password=$_POST["password"];
  
$req = "INSERT INTO inscription (name, surname, mail, adress, password) VALUES ('$_name', '$_surname', '$_mail', '$_adress', '$_password')";

  if ($link->query($req) === TRUE) {

    $message = "Registration successful!";
    //echo "New record created successfully";
    header('Location: espclient.php?message=' . urlencode($message));
    exit();
  } else {
    $message = "Registration not successful!";
    //echo "Error: " . $req . "<br>" . $link->error;
    header('Location: inscription.php?message=' . urlencode($message));
    exit();
  }
  
  $link->close();

}
else{
  echo" your accouant wasn't created succefully!";
}


?>


