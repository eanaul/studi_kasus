<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-2</title>
</head>
<body>
    
<form action="" method="get">
    <table>
        <tr>
            <td><label for="angka1">Angka 1</label></td>
            <td><input type="number" name="angka1" id="angka1"></td>
        </tr>
        <tr>
            <td><label for="angka2">Angka 2</label></td>
            <td><input type="number" name="angka2" id="angka2"></td>
        </tr>
        <tr>
            <td><label for="angka3">Angka 3</label></td>
            <td><input type="number" name="angka3" id="angka3"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Kirim</button></td>
        </tr>
    </table>
</form>


<?php
// Input 3 buah bilangan bulat
if(isset($_GET["submit"])){
    $angka1 = $_GET["angka1"];
    $angka2 = $_GET["angka2"];
    $angka3 = $_GET["angka3"];

// Menentukan bilangan terbesar dan terkecil
$terbesar = max($angka1, $angka2, $angka3);
$terkecil = min($angka1, $angka2, $angka3);




// Menghitung nilai tengah
$nilai_tengah = ($angka1 + $angka2 + $angka3) - $terbesar - $terkecil;

// Cetak nilai tengah
echo "Nilai tengah dari $angka1, $angka2, dan $angka3 adalah $nilai_tengah";
}

?>