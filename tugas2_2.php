<?php
$jual = 80000;
$beli = 50000;
echo "Jual = 80000<br/>";
echo "Beli = 50000<br/>";
$untung = ($jual-$beli)/$beli;
echo "Untung = (Jual-Beli)/Beli<br/>";
echo "Keuntungan = ";
echo $untung*100;
echo " %";
?>