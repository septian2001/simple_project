<?php

$n=0;
$n1=1;
$n2=0;

for($i=1;$i <=20; $i++)
{
    echo $n. ' ';
    $n=$n1+$n2;
    $n1=$n2;
    $n2=$n;
}