<?php
// echo "Today is " . date("Y/m/d") . "<br>";
// echo "Today is " . date("Y.m.d") . "<br>";
// echo "Today is " . date("Y-m-d") . "<br>";
// echo "Today is " . date("d-F-Y") . "<br>";
// echo "Today is " . date("l") . "<br>";

// $d=mktime(11, 14, 54, 3,12, 2020);
// echo "Created date is " . date("Y-m-d h:i:sa", $d);

$tgllahir = date_create('2003-09-02');
$tglskrng = date_create();
$umur = date_diff($tgllahir, $tglskrng);

echo "Umur ";
echo $umur -> y." tahun, ";
echo $umur -> m." bulan, ";
echo $umur -> d." hari, ";
echo $umur -> h." jam, ";
echo $umur -> i." menit, ";
echo $umur -> s." detik, ";

?>