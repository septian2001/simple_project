<?php

$nilai=array(70,64,75);
$uts=array(85,50,65);
$uas=array(90,85,75);
$budi= ($nilai[0]*20/100 + $uts[0]*35/100 + $uas[0]*45/100 );
$mawar= ($nilai[1]*20/100 + $uts[1]*35/100 + $uas[1]*45/100 );
$pemanas= ($nilai[2]*20/100 + $uts[2]*35/100 + $uas[2]*45/100 );

echo "Progam Menghitung Nilai Akhir  <br>";
echo "===================== <br>";
echo "Nilai Tugas : ($nilai[0]) <br>";
echo "Nilai UTS   : ($uts[0]) <br>";
echo "Nilai UAS   : ($uas[0]) <br>";
echo "============= <br>";
echo "============= <br>";
echo "Nilai Akhir Budi : $budi <br>";

switch ($budi){
    case ($budi>80):
        echo "Nilai Huruf : A <br>" ;
        break;
    case ($budi>73):
        echo "Nilai Huruf : B <br>" ;
        break;
    case ($budi>65):
        echo "Nilai Huruf : C <br>";
        break;
    case ($budi>60):
        echo "Nilai Huruf : D <br>";
        break;
    default :
        echo "Nilai Huruf : E <br>";
}
if ($budi >= 50){
    echo "Kamu Lulus<br>";
}else{
    echo "Kamu Tidak Lulus<br>";
}



echo "<br>";
echo "<br>";
echo "Nilai Tugas : ($nilai[1]) <br>";
echo "Nilai UTS   : ($uts[1]) <br>";
echo "Nilai UAS   : ($uas[1]) <br>";
echo "============= <br>";
echo "============= <br>";
echo "Nilai Akhir mawar : $mawar <br>";

switch ($mawar){
    case ($mawar>80):
        echo "Nilai Huruf : A <br>" ;
        break;
    case ($mawar>73):
        echo "Nilai Huruf : B <br>" ;
        break;
    case ($mawar>65):
        echo "Nilai Huruf : C <br>";
        break;
    case ($mawar>60):
        echo "Nilai Huruf : D <br>";
        break;
    default :
        echo "Nilai Huruf : E <br>";
}
echo "============<br>";
if ($mawar >= 50){
    echo "Kamu Lulus<br>";
}else{
    echo "Kamu Tidak Lulus<br>";
}


echo "<br>";
echo "<br>";
echo "Nilai Tugas : ($nilai[2]) <br>";
echo "Nilai UTS   : ($uts[2]) <br>";
echo "Nilai UAS   : ($uas[2]) <br>";
echo "============= <br>";
echo "============= <br>";
echo "Nilai Akhir pemanas : $pemanas <br>";
switch ($pemanas){
    case ($pemanas>80):
        echo "Nilai Huruf : A <br>" ;
        break;
    case ($pemanas>73):
        echo "Nilai Huruf : B <br>" ;
        break;
    case ($pemanas>65):
        echo "Nilai Huruf : C <br>";
        break;
    case ($pemanas>60):
        echo "Nilai Huruf : D <br>";
        break;
    default :
        echo "Nilai Huruf : E <br>";
}
echo "============<br>";
if ($pemanas >= 50){
    echo "Kamu Lulus<br>";
}else{
    echo "Kamu Tidak Lulus<br>";
}
