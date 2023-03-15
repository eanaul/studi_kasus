<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 - 1</title>
</head>
<body>
    

<?php

$angka = array();
for($i = 0; $i <= 100; $i++){
    $angka [] = $i;
}

$max = max($angka);

echo "angka terbesar adalah $max"
?>


</body>
</html>