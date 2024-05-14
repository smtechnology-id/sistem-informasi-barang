<?php
session_start();

//Membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","sisteminformasibarang");


//Menambah barang baru peralatan
if(isset($_POST['addnewdata'])){
    $namabarang = $_POST['namabarang'];
    $merk = $_POST['merk'];
    $bahan = $_POST['bahan'];
    $harga = $_POST['harga'];
    $tahunperolehan = $_POST['tahunperolehan'];
    $riwayatperolehan = $_POST['riwayatperolehan'];
    $kondisi = $_POST['kondisi'];
    $aspeklegal = $_POST['aspeklegal'];
    $keterangan = $_POST['keterangan'];

    $addtotable = mysqli_query($conn,"insert into peralatan (namabarang, merk, bahan, harga, tahunperolehan, riwayatperolehan, kondisi, aspeklegal, keterangan) values('$namabarang','$merk','$bahan','$harga','$tahunperolehan','$riwayatperolehan','$kondisi','$aspeklegal','$keterangan')");
    if($addtotable){
        header('location:masterperalatan.php');
    } else {
        echo 'Gagal';
        header('location:masterperalatan.php');
    }
}



//Menambah barang baru kendaraan
if(isset($_POST['barangkendaraan'])){
    $namakendaraan = $_POST['namakendaraan'];
    $merk1 = $_POST['merk'];
    $bahan1 = $_POST['bahan'];
    $harga1 = $_POST['harga'];
    $tahunperolehan1 = $_POST['tahunperolehan'];
    $riwayatperolehan1 = $_POST['riwayatperolehan'];
    $kondisi1 = $_POST['kondisi'];
    $aspeklegal1 = $_POST['aspeklegal'];
    $keterangan1 = $_POST['keterangan'];

    $addtokendaraan = mysqli_query($conn,"insert into kendaraan (namakendaraan, merk1, bahan1, harga1, tahunperolehan1, riwayatperolehan1, kondisi1, aspeklegal1, keterangan1) values('$namakendaraan','$merk1','$bahan1','$harga1','$tahunperolehan1','$riwayatperolehan1','$kondisi1','$aspeklegal1','$keterangan1')");
    if($addtotable){
        header('location:masterkendaraan.php');
    } else {
        echo 'Gagal';
        header('location:masterkendaraan.php');
    }
}

//Menambah barang baru elektronik
if(isset($_POST['barangelektronik'])){
    $namaelektronik = $_POST['namaelektronik'];
    $merk2 = $_POST['merk'];
    $bahan2 = $_POST['bahan'];
    $harga2 = $_POST['harga'];
    $tahunperolehan2 = $_POST['tahunperolehan'];
    $riwayatperolehan2 = $_POST['riwayatperolehan'];
    $kondisi2 = $_POST['kondisi'];
    $aspeklegal2 = $_POST['aspeklegal'];
    $keterangan2 = $_POST['keterangan'];

    $addtoelektronik = mysqli_query($conn,"insert into elektronik (namaelektronik, merk2, bahan2, harga2, tahunperolehan2, riwayatperolehan2, kondisi2, aspeklegal2, keterangan2) values('$namaelektronik','$merk2','$bahan2','$harga2','$tahunperolehan2','$riwayatperolehan2','$kondisi2','$aspeklegal2','$keterangan2')");
    if($addtotable){
        header('location:masterelektronik.php');
    } else {
        echo 'Gagal';
        header('location:masterelektronik.php');
    }
}

//Menambah barang baru furniture
if(isset($_POST['barangfurniture'])){
    $namafurniture = $_POST['namafurniture'];
    $merk3 = $_POST['merk'];
    $bahan3 = $_POST['bahan'];
    $harga3 = $_POST['harga'];
    $tahunperolehan3 = $_POST['tahunperolehan'];
    $riwayatperolehan3 = $_POST['riwayatperolehan'];
    $kondisi3 = $_POST['kondisi'];
    $aspeklegal3 = $_POST['aspeklegal'];
    $keterangan3 = $_POST['keterangan'];

    $addtofurniture = mysqli_query($conn,"insert into furniture (namafurniture, merk3, bahan3, harga3, tahunperolehan3, riwayatperolehan3, kondisi3, aspeklegal3, keterangan3) values('$namafurniture','$merk3','$bahan3','$harga3','$tahunperolehan3','$riwayatperolehan3','$kondisi3','$aspeklegal3','$keterangan3')");
    if($addtotable){
        header('location:masterfurniture.php');
    } else {
        echo 'Gagal';
        header('location:masterfurniture.php');
    }
}

//Menambah data inven barang
if(isset($_POST['invenbarang'])){
    $kodebarang = $_POST['kodebarang'];
    $namainvenbarang = $_POST['namainvenbarang'];
    $nomorregister = $_POST['nomorregister'];
    $kondisibarang = $_POST['kondisibarang'];
    $merkbarang= $_POST['merkbarang'];
    $ukuranbarang = $_POST['ukuranbarang'];
    $bahanbarang = $_POST['bahanbarang'];
    $tahunperolehanbarang = $_POST['tahunperolehanbarang'];
    $asalusulbarang = $_POST['asalusulbarang'];
    $hargabarang = $_POST['hargabarang'];
    $keteranganbarang = $_POST['keteranganbarang'];

    $addtofurniture = mysqli_query($conn,"insert into barang (kodebarang, namainvenbarang, nomorregister, kondisibarang, merkbarang, ukuranbarang, bahanbarang, tahunperolehanbarang, asalusulbarang, hargabarang, keteranganbarang) values('$kodebarang','$namainvenbarang','$nomorregister','$kondisibarang','$merkbarang','$ukuranbarang','$bahanbarang','$tahunperolehanbarang','$asalusulbarang','$hargabarang','$keteranganbarang')");
    if($addtotable){
        header('location:barang.php');
    } else {
        echo 'Gagal';
        header('location:barang.php');
    }
}
?>