<?php
$nama = " Ferdinand Markus Saerang";
$nim = 2402057;
$ipk = 3.45;
$lulus = true;
$matkul = array("Perancangan Web","Jaringan Komputer","Etika Profesi");
$data = new stdClass();
$data->alamat = "Jl. KH Mas Mansyur RT 06 RT 03 Slawi Kulon Kec. Tegal";
$data->nohp = "0856 2416 7752";
$data->beasiswa = null;

echo "Nama : $nama<br>";
echo "NIM : $nim<br>";
echo "IPK : $ipk<br>";
echo "Mata Kuliah : " . implode(separator: ", ", array: $matkul) . "<br>";
echo "Alamat : $data->alamat<br>";
echo "No HP : $data->nohp<br>";

if($lulus){
    echo "Selamat, anda lulus!!<br>";
}else{
    echo "Maaf, anda gagal<br>";
}


if($data->beasiswa === null){
    echo "Beasiswa : belum cair<cr>";
}else{
    echo "Beasiswa : $data->beasiswa<br>";
}

?>