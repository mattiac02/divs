<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Il diario</title>
  </head>
  <body>
    <div id='menu' style="background-color:powderblue;">
      <a href="homepage.html" style="text-decoration:none; display: inline-block;">
        <h4 style="color:white;">About</h4>
      </a>
      <a href="clid.html" style="text-decoration:none; display: inline-block; padding-left: 1%;">
        <h4 style="color:white;">option 1</h4>
      </a>
      <a href="contatti.html" style="text-decoration:none; display: inline-block; padding-left: 1%;">
        <h4 style="color:white;">option 2</h4>
      </a>
      <a href="id.php" style="text-decoration:none; display: inline-block; padding-left: 1%; ">
        <h4 style="color:red;">option 3</h4>
      </a>
      <a href="di.html" style="text-decoration:none; display: inline-block; padding-left: 1%; ">
        <h4 style="color:red;">option 4</h4>
      </a>
      <a href="pdqd.html" style="text-decoration:none; display: inline-block; padding-left: 1%; ">
        <h4 style="color:red;">option 5</h4>
      </a>
      <a href="rs.html" style="text-decoration:none; display: inline-block; padding-left: 1%; ">
        <h4 style="color:red;">option 6</h4>
      </a>
    </div>


    <div id="set" style="background-color:grey">

    <label for="Setting">Order of the posts:</label>
    <select name="Order" id="ord">
    <option value="<">decreasing</option>
    <option value=">">increasing</option>
  </select>

  <button id='order'>Order</button>

    </div>
    
      <div id='main'>
        <?php
            $myfile = fopen("Nuovo documento di testo.html", "r") or die("Non è stato possibile caricare il diario");
            echo fread($myfile,filesize("Nuovo documento di testo.html"));
            fclose($myfile);
        ?> 
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


    <script src='https://code.jquery.com/jquery-3.5.1.min.js' integrity='sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=' crossorigin='anonymous'></script>
    <script src='ordina.js'></script>



  </body>
</html>
