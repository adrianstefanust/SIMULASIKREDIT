<!doctype HTML>
<head>
  <title>HASIL SIMULASI KALKULATOR KREDIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<h3 class="text-center">HASIL PERHITUNGAN KALKULASI KREDIT</h3>
<hr>
<div class="container">
<table class="table table-striped">
<thead class="thead-dark">
<tr>
    <th >Periode</th>
    <th >Angsuran Bunga</th>
    <th >Biaya Admin</th>
    <th >Bunga</th>
    <th >Total Angsuran</th>
<?php
$jml_pinjaman = $_GET['jumlah_pinjaman'];
$sk_bunga = $_GET['sk_bunga'];
$tenor = $_GET['tenor'];
$biaya_admin = $_GET['biaya'];
$angsuran = $jml_pinjaman/$tenor;
$total = 0;
$b=0;
$bu =0;
for ($temp = 1; $temp <= $tenor; $temp++) {    
    $bunga = ($jml_pinjaman-( ($temp-1)*$angsuran ))*($sk_bunga * 0.01)/12;
    $bu += $bunga;
    $total_angsuran=$angsuran + $biaya_admin+ $bunga;
    $b += $biaya_admin;
    $total +=  $total_angsuran
 ?>
<tr>
    <td><?php echo $temp;?></td>
    <td>Rp <?php echo number_format($angsuran,2) ;?></td>
    <td>Rp <?php echo number_format($biaya_admin,2);?></td>
    <td>Rp <?php echo number_format($bunga,2);?></td>
    <td>Rp <?php echo number_format($total_angsuran,2);?></td>
</tr>
<?php
    } 
?>
</thead>
<tr>
    <td colspan="4" ><h4>TOTAL BIAYA ADMIN :</td>
    <td colspan="3" >Rp <?php echo number_format($b,2);?></td>
</tr>
<tr>
    <td colspan="4" ><h4>TOTAL BUNGA :</td>
    <td colspan="3" >Rp <?php echo number_format($bu,2);?></td>
</tr>
<tr>
    <td colspan="4" ><h4>TOTAL ANGSURAN :</td>
    <td colspan="3" >Rp <?php echo number_format($total,2);?></td>
</tr>

</tr>
</table>
</div>
</html>