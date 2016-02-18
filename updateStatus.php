<?php
include("koneksi.php");
include 'twitter.php';

$awal = microtime(true);

$twitter = new Twitter('xxx', 'xxxxxxxxxxxxxx');

$twitter->setOAuthToken('212871254-2xvZ4Hi8kQ4EnNtgXO3UIG1MyOOA1ADOdOwQbZWX');
$twitter->setOAuthTokenSecret('EZevLCQc4BRBkI373OyeacUtIixdHfBYR0o004khNJs');

$sql      = mysql_query("SELECT * FROM status ORDER BY RAND() LIMIT 0,1");
$ketemu   = mysql_num_rows($sql);
$data     = mysql_fetch_array ($sql);
	if ($ketemu > 0){
		$StatusAcak = $data['status_twit'];
		}

$status = $StatusAcak;
$twitter->statusesUpdate($status);

$bil = 2;
$hasil = 1;
for ($i=1; $i<=10000000; $i++)
{
     $hasil .= $bil;
}


$akhir = microtime(true);
$lama = $akhir - $awal;
echo "<p>Status berhasil diupdate</p>";
echo "<p>Lama eksekusi script update status ini adalah: ".$lama." detik</p>";


?>