<!DOCTYPE HTML>
<html lang="pl"
<head>
    <meta charset="utf-8">
    <title>Podusmowanie zamówienia</title>
</head>
<body>
  <img src="../media/logo.png" alt="Logo" width="400px" height="200px" align="right"></img>
<?php
    
$paczki = $_POST['paczki'];
$grzebien = $_POST['grzebien'];
$suma = 0.99*$paczki + 1.29*$grzebien;
echo<<<END
    <h2>Podsumowanie zamówienia</h2>
    
    <table border ="1" cellpadding ="10" cellspacing ="0">
    <tr>
        <td>Pączek (0.99PLN/szt.)</td>
        <td>$paczki</td>
    </tr>
    <tr>  
        <td>Grzebień (0.99PLN/szt.)</td>
        <td>$grzebien</td>
    </tr>
      <tr>  
        <td>SUMA:</td>
        <td>$suma PLN</td>
    </tr>
    
    </table>
    </br> <a href="index.php">Powrót do strony głównej</a>
END;
?>
</body>
</html>