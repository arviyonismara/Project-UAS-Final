<?php
// $host = "sql212.epizy.com";
// $user = "epiz_32082539";
// $pass = "SvwjwUVWUAJmBbE";
// $db = "epiz_32082539_focus";
$host = "localhost";
$user = "root";
$pass = "";
$db = "focus";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi Database gagal!!!");
}
//echo "Koneksi ke database berhasil...";

// Query function
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row= mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    return $rows;
}

// Rupiah format function
function rupiah($angka){
	$hasil_rupiah = "Rp. " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}