<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <title>Edit Data Penyakit</title>
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <!-- My CSS -->
  <link href="../../css/style.css" rel="stylesheet">

</head>

<body>
  <?php
  include "../../../koneksi.php";

  // Fungsi Upload
  function upload()
  {
    $nama_file = $_FILES['filegambar']['name'];
    $tipe_file = $_FILES['filegambar']['type'];
    $ukuran_file = $_FILES['filegambar']['size'];
    $error = $_FILES['filegambar']['error'];
    $tmp_file = $_FILES['filegambar']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
      return ''; // Mengembalikan string kosong jika tidak ada gambar yang dipilih
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
      echo "<script>
                alert('yang anda pilih bukan gambar!');
              </script>";
      return false;
    }

    // cek ukuran file
    if ($ukuran_file > 5000000) {
      echo "<script>
                alert('ukuran gambar terlalu besar!');
              </script>";
      return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../../img/thumb/' . $nama_file_baru);

    return $nama_file_baru;
  }

  $kdpenyakit = $_POST['kdpenyakit'];
  $penyakit = $_POST['edit_penyakit'];
  $definisi = $_POST['edit_definisi'];
  $solusi = $_POST['edit_solusi'];
  $pencegahan = $_POST['edit_pencegahan'];
  $gambar_lama = $_POST['gambar_lama'];

  // Upload Gambar
  $gambar = upload();
  if ($gambar === false) {
    return false;
  }

  // Jika gambar tidak diedit, gunakan gambar lama
  if (empty($gambar)) {
    $gambar = $gambar_lama;
  }

  $sql = "UPDATE tb_penyakit SET nama_penyakit='$penyakit',definisi='$definisi', solusi='$solusi',pencegahan='$pencegahan',gambar='$gambar' WHERE id='$kdpenyakit'";
  $result = mysqli_query($koneksi, $sql) or die("SQL Error" . mysqli_error($koneksi));


  if ($result) {
    // echo "<table style='margin-top:150px;' align='center'><tr><td>";
    // echo "<div style='width:500px; height:50px auto; border:1px solid #CCC; font-family:Poppins; padding:3px 3px 3px 3px;'>";
    // echo "<center>terima kasih, data berhasil diubah</center><br>";
    // echo "<center><a href='./penyakit.php' class='btn btn-primary btn-sm'>OK</a></center>";
    // echo "</div>";
    // echo "</td></tr></table>";
    echo "<figure class='notification'>";
    echo "<div class='notification__body'>";
    echo "<img src='../../icons/check.svg' title='Success' alt='success' class='notification__icon' />";
    echo "Terima kasih, data berhasil diubah";
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
    echo "Maaf, data gagal diubah";
    // echo "<center><a href='./penyakit.php' class='btn btn-primary btn-sm'>OK</a></center>";
    echo "</div>";
    echo "<div class='notification__progess'></div>";
    echo "</figure>";

    echo "<script>";
    echo "setTimeout(function() {";
    echo "  window.location.href = 'penyakit.php';";
    echo "}, 3000);"; // Mengatur waktu tampilan notifikasi sebelum redirect (dalam contoh ini 3000ms = 3 detik)
    echo "</script>";
    // echo "<center><font color='#ff0000'><strong>Maaf gagal mengupdate data</strong></font></center><br>";
    // echo "<center><a href='./penyakit.php' class='btn btn-danger btn-sm'>Kembali</a></center>";
  }
  ?>
</body>

</html>