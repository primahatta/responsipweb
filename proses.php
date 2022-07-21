
<?php
echo "<head><title>PESANAN</head></title>";
$fp =fopen("pesanan.txt","a+");
$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$harga  = $_POST ['harga'];
$PESANAN = $_POST ['PESANAN'];
fputs($fp, "$nama|$alamat|$harga|$PESANAN\n");
fclose($fp);

echo "Terima Kasih <br>";
echo "<a href = tampilan.html> Isi Form </a><br>";
echo "<a href=lihat.php> Lihat PESANAN </a><br>";
?>