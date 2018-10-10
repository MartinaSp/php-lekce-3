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

session_start();

if (isset($_SESSION['login'])) {
    echo ("Vítejte"." ". $_SESSION['login']);
    
        echo '<table class="table table-bordered">';
        
        foreach ($_SESSION['data'] as $popisek => $info) {
            echo "
            <tr>
                <td>$popisek</td>
                <td>$info</td>
            </tr>";
            $radek = $radek + 1;
        }
        echo '</table>';
    
    echo '<a href="logout.php">Odhlásit</a>';
}
else {
    echo "Přístup zamítnut";
}
?>

</div>
</body>
</html>
