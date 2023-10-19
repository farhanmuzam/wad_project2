<?php
$title = "Welcome Student Of Telkom University!";
?>

<html>
    <head>
        <h1><?php echo $title; ?></h1> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <br>
    <body>
        <form action="latihan3.php" method="get">
         <label for="nomor">Insert Number!</label>
        <input type="number" name="nomor" required>
         <br>
         <br>
        <label for="choose">Choose Number!</label>
        <select name="choose">
        <option value="choose1">1</option>
        <option value="choose2">2</option>
        <option value="choose2">3</option>
        <option value="choose2">4</option>
        <option value="choose2">5</option>
        <option value="choose2">6</option>
        </select>
         <br>
         <br>
         <button type="submit" name="count">Submit untuk hitung!</button>
        </form>
    </body>
    
</html>
