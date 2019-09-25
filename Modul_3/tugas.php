<html>
<head>
<title> Program Penjumlahan PHP </title>
<body>
    <h1> Program Penjumlahan </h1>
    <form method="POST" action ="tugas.php">
    <p> Nilai A adalah : <input type="text"
    name="A" size="20"></p>
    <p> Nilai B adalah : <input type="text"
    name="B" size="20"></p>
    <p><input type="submit" value="JUMLAHKAN HOR"
    name="jumlah"></p>
    <?php
        error_reporting (E_ALL ^ E_NOTICE);
        $A=$_POST["A"];
        $B=$_POST["B"];
        $jumlah = $A + $B;
        echo "Nilai A adalah $A </br>";
        echo "Nilai B adalah $B </br>";
        echo"Maka nilai A ditambah nilai B adalah $jumlah";
    ?>
</body>
</html>

