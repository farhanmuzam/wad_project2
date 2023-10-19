<?php
$title = "Welcome Student Of TelU";
?>

<html>
    <head>
        <title><?php echo $title; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <form action="latihan3.php" method="get">
            <div class="form-group">
                <label for="angkaInput">Insert Number!:</label>
                <input type="number" class="form-control" id="angkaInput" name="nomor" placeholder="Input Only Number">
            </div>
            <div class="form-group">
                <label for="dropdownInput">Choose Number!:</label>
                <select class="form-control" id="dropdownInput" name="pilihan">
                    <option value="pilihan1">1</option>
                    <option value="pilihan2">2</option>
                    <option value="pilihan3">3</option>
                    <option value="pilihan3">4</option>
                    <option value="pilihan3">5</option>
                    <option value="pilihan3">6</option>
                </select>
            </div>
            <br>
            <br>
            <button type="submit">Submit For Count!</button>
        </form>
    </body>
</html>
