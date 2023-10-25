<?php
$ani = (4);
$budi = (15);
$bina = (6);
$cita = (11);
$harga = (4500);
$total = array($ani*$harga,$budi*$harga,$bina*$harga,$cita*$harga);
$diskon = array($total[0]*5/100,$total[1]*5/100,$total[2]*5/100,$total[3]*5/100);
$pendapat=($total[0] + $total[1] + $total[2] + $total[3]);
$potong=($diskon[0] + $diskon[1] + $diskon[2] + $diskon[3])
?>

<table border="1" width="50%" cellspacing="0" cellpadding="1">
    <tr bgcolor="00ccff">
        <th colspan="4">Catatan Harian Laundry</th>
    </tr>
    <tr bgcolor="FFF66">
        <th>Nama Pelanggan</th>
        <th>Berat Cucian</th>
        <th>Total</th>
        <th>Diskon</th>
    </tr>
    <tr  bgcolor="lightcyan">
        <td>Anita Dwisari</td>
        <td align="center">4kg</td>
        <td><?php echo 'Rp.'.number_format($total[0])?> </td>
        <td><?php echo 'Rp.'.number_format($diskon[0])?></td>
    </tr>
    <tr  bgcolor="99ffff">
        <td>Budi Kurniawan</td>
        <td align="center">15kg</td>
        <td><?php echo 'Rp.'.number_format($total[1])?></td>
        <td><?php echo 'Rp.'.number_format($diskon[1])?></td>
    </tr>
    <tr  bgcolor="lightcyan">
        <td>Bina Putriasri</td>
        <td align="center">6kg</td>
        <td><?php echo 'Rp.'.number_format($total[2])?></td>
        <td><?php echo 'Rp.'.number_format($diskon[2])?></td>
    </tr>
    <tr  bgcolor="99ffff">
        <td>Citra Ayuningsih</td>
        <td align="center">11kg</td>
        <td><?php echo 'Rp.'.number_format($total[3])?></td>
        <td><?php echo 'Rp.'.number_format($diskon[3])?></td>
    </tr>
    <tr bgcolor="yellow">
        <th colspan="2">Total Penadapatan</th>
        <td colspan="2" align="right"><?php echo 'Rp.'.number_format($pendapat - $potong ) ?></td>
    </tr>

</table>