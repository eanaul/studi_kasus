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
            <td><label for="angka4">Angka 4</label></td>
            <td><input type="number" name="angka4" id="angka4"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Kirim</button></td>
        </tr>
    </table>
</form>

<?php 

if(isset($_GET["submit"])){
$a = $_GET["angka1"];
$b = $_GET["angka2"];
$c = $_GET["angka3"];
$d = $_GET["angka4"];

$terbesar =  max($a, $b, $c, $d);

echo "bilangan terbesar adalah $terbesar";

}
?>

</body>
</html>