<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
curl_close($curl);

// kita mendecode agar bisa di konsumsi datanya
$convert = json_decode($response, true);

foreach($convert as $data){

    // mengambil value dari json 
    
    $kodeBarang = $data['i_code'];
    $namaBarang = $data['i_name'];
    $grupBarang = $data['g_code'];
    $hargaJual = $data['i_sell'];
    if(substr($grupBarang,0,1)=="B"){
        echo "Kode Barang = ".$kodeBarang."<br>";
        echo "Nama Barang = ".$namaBarang."<br>";
        echo "Group Barang = ".$grupBarang."<br>";
        echo "Harga Jual = ".$hargaJual."<br>";
        echo "<br>";
    }
  
}
?>