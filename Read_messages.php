<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
<body>
<!-- Navigation -->
<hr>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Webshopen</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="Kontaktsida.php">Contact</a>
            <a class="nav-link" href="Read_messages.php">Adminpage</a>

          </li>
        </ul>
      </div>
    </div>
  </nav>
  <hr>
<?php
require_once ("database.php");
$statement = $conn->prepare("SELECT *FROM contact  ");
$statement->execute();
    $result = $statement->fetchall(); //Innehallet i databasen hamtas och lagras i en array. 
    $table = "<table ><tr class=><th>Name</th><th>Email</th><th>Message</th><th></th></tr>";
foreach ($result as $key => $value) {//Meddelanden visas. Sist i taballen finns länkar för att radera aktuellt meddelande.  
        $id = $value['contact_id'];
        $table .= "<tr>
<td>$value[names]</td>
<td>$value[email]</td>
<td>$value[messages]</td>
<td><a href= Radera_bestamt_meddelande.php?id=$id> Delete message</a> 

</tr>";
    }
    $table .= "</table>";
    echo $table;
    ?>
    <a href="Radera_samtliga_meddelanden.php"> Delete all messages</a>
    <hr>
    <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Webshopen 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    
</body>
</html>