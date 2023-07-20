<!DOCTYPE html>
<html lang="en">
<head>
    <style>
     *{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
  }
  .header {
  background-color: #f0f0f0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 200px;
}

.logo {
  text-decoration: none;
  color: rgb(146, 129, 65);
  text-transform: capitalize;
  font-weight: 700;
  font-size: 1.8em;
}

.navigation a {
  color: rgb(204, 159, 92);
  text-decoration: none;
  font-size: 1.1em;
  font-weight: 500;
  padding-left: 15px;
}

.navigation a:hover {
  color: rgb(208, 216, 99);
}
section{
    padding: 3000x;
}
form {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 50px;
            }
            label {
                font-weight: bold;
                margin-bottom: 10px;
            }
            input[type="text"], input[type="email"], input[type="password"] {
                padding: 10px;
                margin-bottom: 20px;
                border-radius: 5px;
                border: none;
                box-shadow: 1px 1px 2px grey;
                width: 300px;
            }
            input[type="submit"] {
                background-color: #95c02a;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #7ab45f;
            }
            .main {
  background-color: #f9f9f9;
  padding: 100px;
  text-align: center;
  width: 100%;
  background: url(images/bg11111.jpg) no-repeat;
  background-size: cover;
  background-position: center center;/* si on ecrit center seulement par defaut center center*/
  background-attachment: fixed;
  
    
}
.inscr{
    background-color: antiquewhite;
   border-radius: 10px;
    width: 30%;
    margin: 10%;
  position: relative;left:320px;

}
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>

</head>
<body>
    <header class="header">
        <div class="logo">
          <a href="index.html" class="logo">VINT''AGE</a>      
        </div>
        <div class="navigation">
            <a href="services.html">contact</a>
            <a href="produits.html">Products</a>
            <a href="A propos.html">about us</a>
        </div>
    </header>
   
    <body>
            <?php
            if(isset($_GET["message"])){
            // Retrieve the message from the query parameter
            $message = $_GET["message"];

            // Display the message
            echo "<p>" . htmlspecialchars($message) . "</p>";
            }
            unset($_GET["message"]);

            ?>
        <section class="main">
            <div class="inscr">
                <h1>Inscription</h1>
                <form action="insertInscr.php" method="POST">
                    <label for="name">Name :</label>
                    <input type="text" id="name" name="name" required>
                    <label for="surname">Surname :</label>
                    <input type="text" id="surname" name="surname" required>
                    <label for="email">Adress mail :</label>
                    <input type="email" id="email" name="mail" required>
                    <label for="address">Adress :</label>
                    <input type="text" id="address" name="adress" required>
                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password" required>
                    <input type="submit" value="Submit">
                </form> 
            </div>
          
        </section>
       
    </body>
    </html>
    
   
 
</body>
</html>





