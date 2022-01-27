<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $nama   = $_POST['nama'];
  $tempat_lahir     = $_POST['tempat_lahir'];
  $warga_negara    = $_POST['warga_negara'];
  $alamat    = $_POST['alamat'];
  //$gambar_produk = $_FILES['gambar_produk']['name'];
  $nomor_hp    = $_POST['nomor_hp'];
  $nama_ayah    = $_POST['nama_ayah'];
  $nama_ibu    = $_POST['nama_ibu'];
  $penghasilan    = $_POST['penghasilan'];
  
  $query = "INSERT INTO  tbldata_siswa  (nama, tempat_lahir, warga_negara, alamat, nomor_hp,nama_ayah,nama_ibu,penghasilan) VALUES ('$nama_produk', '$deskripsi', '$harga_beli', '$harga_jual', null)";
  $result = mysqli_query($koneksi, $query);
 

  ?>