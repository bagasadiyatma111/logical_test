<?php
$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';

$tampil = 1;

while ($tampil <= 5) {
    echo "Aplikasi ke-$tampil: " . $aplikasi[$tampil] . "<br>";
    $tampil++;
}

?>

