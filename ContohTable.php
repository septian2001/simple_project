
<?php
$nilai=array(70,64,75);
$uts=array(85,50,65);
$uas=array(90,85,75);



?>

<table border="1" width="50%" cellspacing="0" cellpadding="1">
    <tr bgcolor="lightblue" >
        <th rowspan="2">Nama</th>
        <th colspan="3">Nilai</th>
        <th rowspan="2">Total</th>
        <th rowspan="2">Nilai Huruf</th>
        <th rowspan="2">Keterangan</th>
    </tr>
    <tr bgcolor="lightblue">
        <th>Tugas</th>
        <th>UAS</th>
        <th>UTS</th>
    </tr> 
    <tr bgcolor="lightyellow" align="center">
        <td>Budi Waluyo</td>
        <td><?php echo ($nilai[0]) ?></td>
        <td><?php echo ($uts  [0]) ?></td>
        <td><?php echo ($uas  [0]) ?></td>
        <td><?php echo ($nilai[0]*20/100 + $uts[0]*35/100 + $uas[0]*45/100 );?></td>
        <td>A</td>
        <td>Lulus</td>
    </tr>  
    <tr bgcolor="lightyellow" align="center">
        <td>Sebut Saja Mawar</td>
        <td><?php echo ($nilai[1])?> </td>
        <td><?php echo ($uts  [1]) ?></td>
        <td><?php echo ($uas  [1]) ?></td>
        <td><?php echo ($nilai[1]*20/100 + $uts[1]*35/100 + $uas[1]*45/100 );?></td>
        <td>B</td>
        <td>Lulus</td>
    </tr>
    <tr bgcolor="lightyellow" align="center">
        <td>Si Pemanas</td>
        <td><?php echo ($nilai[2]) ?></td>
        <td><?php echo ($uts  [2]) ?></td>
        <td><?php echo ($uas  [2]) ?></td>
        <td><?php echo ($nilai[2]*20/100 + $uts[2]*35/100 + $uas[2]*45/100 );?></td>
        <td>B</td>
        <td>Lulus</td>
    </tr>
</table>