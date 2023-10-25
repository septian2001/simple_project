<?php


for ($Genap = 2; $Genap <= 30; $Genap++) {
    if ($Genap %2 == 1 ){
        continue;
    }if($Genap %4 == 0){
        continue;
    }
    
    
echo "$Genap";
}