
<?php
$Branc1=array(10,15,5,7);
$Branc2=array(6,9,11,12);
$Branc3=array(2,10,10,5);
$Branc4=array(5,12,7,9);
$layu=array(1,0,2,5);
$aglonema=($Branc1[0] + $Branc2[0] + $Branc3[0] + $Branc4[0] - $layu[0]);
$alosia=($Branc1[1] + $Branc2[1] + $Branc3[1] + $Branc4[1] - $layu[1]);
$keladi=($Branc1[2] + $Branc2[2] + $Branc3[2] + $Branc4[2] - $layu[2]);
$mawar=($Branc1[3] + $Branc2[3] + $Branc3[3] + $Branc4[3] - $layu[3]);
$harga1=($aglonema*75000);
$harga2=($alosia*60000);
$harga3=($keladi*50000);
$harga4=($mawar*10000);
$total=($harga4 + $harga1 + $harga2 + $harga3)
?>



<table border="1" width="50%" cellspacing="0" cellpadding="1">
    <tr>
        <th rowspan="2" bgcolor="deepskyblue" >Royal Garden</th>
        <th colspan="4" bgcolor="paleturquoise">Nama Bunga</th>
    </tr>
    <tr bgcolor="skyblue" >
        <th>Aglonema</th>
        <th>Alocasia</th>
        <th>Keladi</th>
        <th >Mawar</th>
    </tr>
    <tr bgcolor="00ff66">
        <th bgcolor="deepskyblue">First Branch</th>
        <td align="center">10</td>
        <td align="center">15</td>
        <td align="center">5</td>
        <td align="center">7</td>
    </tr>
    <tr bgcolor="00ff66">
        <th bgcolor="deepskyblue">Second Branch</th>
        <td align="center">6</td>
        <td align="center">9</td>
        <td align="center">11</td>
        <td align="center">12</td>
    </tr>
    <tr  bgcolor="00ff66">
        <th bgcolor="deepskyblue">Third Branch</th>
        <td align="center">2</td>
        <td align="center">10</td>
        <td align="center">10</td>
        <td align="center">5</td>
    </tr>
    <tr  bgcolor="00ff66">
        <th bgcolor="deepskyblue">Fourt Branch</th>
        <td align="center">15</td>
        <td align="center">12</td>
        <td align="center">7</td>
        <td align="center">9</td>
    </tr>
    <tr bgcolor="00ff66">
        <th bgcolor="deepskyblue">Bunga Layu</th>
        <td align="center">-1</td>
        <td align="center">-0</td>
        <td align="center">-2</td>
        <td align="center">-5</td>
    </tr>
    <tr  bgcolor="yellow">
        <th bgcolor="deepskyblue">Total Stock Bunga</th>
        <td align="center"><?php echo $aglonema ?></td>
        <td align="center"><?php echo $alosia ?></td>
        <td align="center"><?php echo $keladi?></td>
        <td align="center"><?php echo $mawar ?></td>
    </tr>
    <tr bgcolor="yellow">
        <th bgcolor="deepskyblue"></th>
        <th  colspan="3">Total Pendapatan</th>
        <td align="center"><?php echo 'Rp.'.number_format($total)?></td>
    </tr>
</table>