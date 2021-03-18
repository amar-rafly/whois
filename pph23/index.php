<html>
<head>
<style>
div{
     width: 130px;
     height: 170px;
     float: center;
     margin: 10px;
     text-align: left;
   }

.tujuh { border: 10px inset green; }
</style>
</head>
<title></title>
<body>

<form action="index.php" method="get">
Input Subtotal : <input type="text" name="subtotal">&nbsp &nbsp <input type="submit" value="Hitung"

background-color: #3CBC8D;
  color: white;>
</form>


<div class="tujuh" >
<?php

$total = $_GET["subtotal"];

$pajak = $total * 0.1;
echo "PPN 10% = $pajak <br>";

$pajak = $total + $pajak;
echo "Total Due = $pajak <br>";

$pph = $total * 0.02;
echo "PPH 23 = $pph <br>";

$total = $pajak - $pph;
echo "Total Due dengan PPH 23 = $total <br>";

?>
</div>
</body>
</html>
