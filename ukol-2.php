<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

<?php

$radek = 1;
$soucet = 1;
$maximum = 5;

?>

    <table class="table table-bordered">
    
    <?php
    while ($radek <= 5) {
        $sloupec = $soucet + $radek - 1;
        echo"
        <tr>
            <td> $radek </td>
            <td> $sloupec </td>
        </tr>";
        
    $radek = $radek + 1;
    }

    ?>
    </table>




</div>
</body>
</html>
