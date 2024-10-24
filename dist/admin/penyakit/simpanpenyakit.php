<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <title>Simpan Data Penyakit</title>
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <!-- My CSS -->
  <link href="../../css/style.css" rel="stylesheet">
</head>

<body class="not">
  <?php
  include "../../../koneksi.php";
  $kdpenyakit = $_POST['kdpenyakit'];
  $nama_penyakit = $_POST['nama_penyakit'];
  $definisi = $_POST['definisi'];
  $solusi = $_POST['solusi'];
  $pencegahan = $_POST['pencegahan'];

  function upload()
  {
    $nama_file = $_FILES['filegambar']['name'];
    $tipe_file = $_FILES['filegambar']['type'];
    $ukuran_file = $_FILES['filegambar']['size'];
    $error = $_FILES['filegambar']['error'];
    $tmp_file = $_FILES['filegambar']['tmp_name'];


    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
      // echo "<script>
      //         alert('pilih gambar terlebih dahulu!');
      //       </script>";
      return '../../img/nopoto.jpg';
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

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
      echo "<script>
              alert('yang anda pilih bukan gambar!');
            </script>";
      return false;
    }

    // cek ukuran file
    // maksimal 5Mb = 5000000
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
  };

  // Upload Gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }


  // $tempdir = "../../img/thumb/"; 
  //       if (!file_exists($tempdir))
  //       mkdir($tempdir,0755); 
  //       //gambar akan di simpan di folder gambar
  //       $target_path = $tempdir . basename($_FILES['filegambar']['name']);

  //       //nama gambar
  //       $nama_gambar=$_FILES['filegambar']['name'];
  //       //ukuran gambar
  //       $ukuran_gambar = $_FILES['filegambar']['size']; 

  //       $fileinfo = @getimagesize($_FILES["filegambar"]["tmp_name"]);
  //       //lebar gambar
  //       $width = $fileinfo[0];
  //       //tinggi gambar
  //       $height = $fileinfo[1];  
  //       if($ukuran_gambar > 81920){ 
  //         echo 'Ukuran gambar melebihi 80kb';
  //       }else if ($width > "480" || $height > "640") {
  //           echo 'Ukuran gambar harus 480x640';
  //       }else{
  //           if (move_uploaded_file($_FILES['filegambar']['tmp_name'], $target_path)) {

  //               // $sql=mysql_query("INSERT INTO tb_penyakit(gambar) VALUES('".$nama_gambar."')");
  //               echo 'Simpan data berhasil';
  //           } else {
  //               echo 'Simpan data gagal';
  //           }
  //       } 

  //cek keberadaan data
  $sqlrs = mysqli_query($koneksi, "SELECT kdpenyakit FROM tb_penyakit WHERE kdpenyakit='$kdpenyakit'");
  $rs = mysqli_num_rows($sqlrs);
  if ($rs == 0) {
    $perintah = "INSERT INTO tb_penyakit(kdpenyakit,nama_penyakit,definisi,solusi,pencegahan,gambar)VALUES('$kdpenyakit','$nama_penyakit','$definisi','$solusi','$pencegahan','$gambar')";
    $berhasil = mysqli_query($koneksi, $perintah);

    //jika data berhasil disimpan
    if ($berhasil) {
      // Notifications
      echo "<figure class='notification'>";
      echo "<div class='notification__body'>";
      echo "<img src='../../icons/check.svg' title='Success' alt='success' class='notification__icon' />";
      echo "Data Berhasil Disimpan!";
      // echo "<center><a href='./penyakit.php' class='btn btn-primary btn-sm'>OK</a></center>";
      echo "</div>";
      echo "<div class='notification__progess'></div>";
      echo "</figure>";

      echo "<script>";
      echo "setTimeout(function() {";
      echo "  window.location.href = 'penyakit.php';";
      echo "}, 3000);"; // Mengatur waktu tampilan notifikasi sebelum redirect (dalam contoh ini 3000ms = 3 detik)
      echo "</script>";
      // echo "<table style='margin-top:150px;' align='center'><tr><td>";
      // echo "<div style='width:500px; height:50px auto; border:1px solid #CCC; font-family:Poppins; padding:3px 3px 3px 3px;'>";
      // echo "<center>terima kasih, data berhasil disimpan</center><br>";
      // echo "<center><a href='./penyakit.php' class='btn btn-primary btn-sm'>OK</a></center>";
      // echo "</div>";
      // echo "</td></tr></table>";
    } else {
      // Notifications
      echo "<figure class='notification'>";
      echo "<div class='notification__body'>";
      echo "<img src='../../icons/check.svg' title='Success' alt='success' class='notification__icon' />";
      echo "Data Gagal Disimpan!";
      echo "</div>";
      echo "<div class='notification__progess'></div>";
      echo "</figure>";

      echo "<script>";
      echo "setTimeout(function() {";
      echo "  window.location.href = 'penyakit.php';";
      echo "}, 3000);"; // Mengatur waktu tampilan notifikasi sebelum redirect (dalam contoh ini 3000ms = 3 detik)
      echo "</script>";
      // echo "<center><font color='#ff0000'><strong>Maaf Penyimpanan Gagal</strong></font></center><br>";
      // echo "<center><a href='./penyakit.php' class='btn btn-danger btn-sm'>Kembali</a></center>";
      // header("location:penyakit.php");
    }
  } else {
    // Notifications
    echo "<figure class='notification'>";
    echo "<div class='notification__body'>";
    echo "<img src='../../icons/check.svg' title='Success' alt='success' class='notification__icon' />";
    echo "Maaf kode penyakit $kdpenyakit <strong>Telah ada di database, Masukkan Kode penyakit yang lain!</strong>";
    // echo "<center><a href='./penyakit.php' class='btn btn-primary btn-sm'>OK</a></center>";
    echo "</div>";
    echo "<div class='notification__progess'></div>";
    echo "</figure>";

    echo "<script>";
    echo "setTimeout(function() {";
    echo "  window.location.href = 'penyakit.php';";
    echo "}, 3000);"; // Mengatur waktu tampilan notifikasi sebelum redirect (dalam contoh ini 3000ms = 3 detik)
    echo "</script>";
    // echo "<table style='margin-top:150px;' align='center'><tr><td>";
    // echo "<div style='width:500px; height:50px auto; border:1px solid #CCC; color:#F90; padding:3px 3px 3px 3px;'>";
    // echo "<center><font>Maaf kode penyakit $kdpenyakit <strong>Telah ada di database, Masukkan Kode penyakit yang lain!</strong></font></center><br>";
    // echo "<center><a href='./penyakit.php' class='btn btn-danger btn-sm'>Kembali</a></center>";
    // echo "</div>";
    // echo "</td></tr></table>";
    // header("location:penyakit.php");
  }

  ?>
</body>

</html>