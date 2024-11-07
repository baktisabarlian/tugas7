<?php

$pemasukan = 50000000;
$hutang_a = 16500000;
$bunga_hutang_a = 5 / 100;
$hutang_b = 9500000;
$bunga_hutang_b = 4.5 / 100;

$bunga_a = $hutang_a * $bunga_hutang_a;
$bunga_b = $hutang_b * $bunga_hutang_b;

$total_bunga = $bunga_a + $bunga_b;

$total_hutang = $hutang_a + $hutang_b;

$sisa_uang = $pemasukan - ($total_hutang + $total_bunga);

echo "Sisa Uang: RP " . number_format($sisa_uang, 0, ',',',') . "/n";

echo "Jumblah Total Bunga Hutang: RP " . number_format($total_bunga, 0, ',',',') . "/n";

echo "Jumblah Total Hutang: RP " . number_format($total_hutang, 0, ',',',') . "/n";
?>