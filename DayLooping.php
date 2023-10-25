<?php

$nid= "677486320";

$akhir=intval(substr($nid,-2));

if ($akhir < 10){
    $akhir+=10;
}
$days=["senin","selasa","rabu","kamis","jum'at","sabtu","minggu"];
$hasil=[];
for($i=1;$i <=$akhir; $i++){
    $index=($i - 1)%7;
    $result[] = $days [$index];
}
echo implode(' ',$result);