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
for ($temp = 1; $temp <= $tenor; $temp++) {    
$bunga = ($jml_pinjaman-( ($temp-1)*$angsuran ))*($sk_bunga * 0.01)/12;
$total_angsuran=$angsuran + $biaya_admin+ $bunga;
$total +=  $total_angsuran
 ?>
<tr>
<td><?php echo $temp;?></td>
<td><?php echo number_format($angsuran,3) ;?></td>
<td><?php echo number_format($biaya_admin,3);?></td>
<td><?php echo number_format($bunga,3);?></td>
<td><?php echo number_format($total_angsuran,3);?></td>
</tr>
<?php
    } 
?>
<tr>
</thead>
    <td colspan="4" ><h4>TOTAL KALKULASI :</td>
    <td colspan="3" ><?php echo number_format($total,3);?></td>
</tr>
</tr>
</table>
</div>
</html>