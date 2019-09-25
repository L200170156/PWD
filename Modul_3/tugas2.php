<html>
<head>
<title> Program Ganjil Genap </title>
<body>
    <h1> Program Ganjil dan Genap </h1>
    <form method="POST" action ="tugas2.php">
    <p> Nilai  : <input type="text"
    name="A" size="20"></p>
    <p><input type="submit" value="TEBAK"
    name="tebak"></p>
<?php
 error_reporting (E_ALL ^ E_NOTICE);
 $A=$_POST["A"];
 $tebak=$_POST["tebak"];
    if($tebak){
    if($A % 2 == 0)
        {echo "$A adalah Bilangan Genap<br>";}
    else
        {echo "$A adalah Bilangan Ganjil<br>";}
    }
?>
</body>
</html>