

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-1</title>
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
            <td><button type="submit" name="submit">Kirim</button></td>
        </tr>
    </table>
</form>

<?php

if(isset($_GET["submit"])){
$a = $_GET["angka1"];
$b = $_GET["angka2"];

if($a > $b){
    echo "nilai terbesar adalah $a" ;
} else if ($a < $b){
    echo "nilai terbesar adalah $b" ;
} else{
    echo "error";
} 

}

?>

</body>
</html>