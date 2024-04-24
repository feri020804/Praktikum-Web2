<?php  
//array asosiatif
$mahasiswa = ["Nama"=>"Hanna", "Umur"=>21, "Alamat"=>"Depok"];

echo $mahasiswa["Nama"] . "<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value;
    echo "<br>";
}

echo "<br>";
?>