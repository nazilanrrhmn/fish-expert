<?php
include "../../../koneksi.php";
$aksi = $_GET['aksi'];
$data_hapus = $_GET['data_hapus'];

// Mengambil data penyakit
$sql = "SELECT * FROM tb_penyakit WHERE id='$data_hapus'";
$result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
$p = mysqli_fetch_assoc($result);

// Menghapus gambar di folder img/thumb
if ($p['gambar'] != 'nopoto.jpg') {
  $gambarPath = '../../img/thumb/' . $p['gambar'];
  if (file_exists($gambarPath)) {
    unlink($gambarPath);
  }
}

// Hapus Penyakit
if ($aksi == "penyakit") {
  $sql = "DELETE FROM tb_penyakit WHERE id='$data_hapus'";
  $result = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
  // Jika berhasil dihapus
  if ($result) {
    echo "<figure class='notification'>"; 
    echo "<div class='notification__body'>";
    echo "<img src='../../icons/check.svg' title='Success' alt='success' class='notification__icon' />";
    echo "Terima kasih, data berhasil dihapus";
          // echo "<center><a href='./penyakit.php' class='btn btn-primary btn-sm'>OK</a></center>";
    echo "</div>";
    echo "<div class='notification__progess'></div>";
    echo "</figure>";

    echo "<script>";
    echo "setTimeout(function() {";
    echo "  window.location.href = 'penyakit.php';";
    echo "}, 3000);"; // Mengatur waktu tampilan notifikasi sebelum redirect (dalam contoh ini 3000ms = 3 detik)
    echo "</script>";
  } else {
    echo "<figure class='notification'>"; 
    echo "<div class='notification__body'>";
    echo "<img src='../../icons/check.svg' title='Success' alt='success' class='notification__icon' />";
    echo "Maaf, data gagal dihapus";
          // echo "<center><a href='./penyakit.php' class='btn btn-primary btn-sm'>OK</a></center>";
    echo "</div>";
    echo "<div class='notification__progess'></div>";
    echo "</figure>";

    echo "<script>";
    echo "setTimeout(function() {";
    echo "  window.location.href = 'penyakit.php';";
    echo "}, 3000);"; // Mengatur waktu tampilan notifikasi sebelum redirect (dalam contoh ini 3000ms = 3 detik)
    echo "</script>";
  }
}
