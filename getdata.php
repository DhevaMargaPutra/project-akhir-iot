<?php
// konfigurasi database
$host = "localhost";
$user = "root";
$password = "root";
$database = "prak_iot";
$koneksi = mysqli_connect($host, $user, $password, $database);
$data = mysqli_query($koneksi, "SELECT * from suhu ORDER BY jam DESC LIMIT 1"); // ambil data terbaru saja
$no = 1;
foreach ($data as $row) {
    $datax = [
        "jam" => @$row['jam'],
        "suhu" => (float) @$row['suhu']
    ];
}

// $datax=["jam"=>date("Y-m-d H:i:s"), "suhu"=>12];
echo json_encode($datax);

?>