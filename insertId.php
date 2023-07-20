
<?php

include "conx.php";

if(isset($_POST["username"]) && (isset($_POST["pwd"])) ){
    $_username=$_POST["username"];
    $_password=$_POST["pwd"];
    $req = "SELECT * FROM inscription WHERE surname='$_username' AND password ='$_password'";
    
    $result = $link->query($req);

    if ($result->num_rows == 1) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
        header('Location: espclient.php');
        exit();
      }
    } else {
      //echo "0 results";
      header('Location: Client.html');
      exit();
    }
    $link->close();
}



?>


