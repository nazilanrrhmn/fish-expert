<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update Nilai Belief</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../css/style.css" rel="stylesheet">

  <style>
    .ok {
      background-color: #4154f1;
      border: none;
      color: white;
      padding: 5px 20px;
      border-radius: 3px;
    }

    .ok:hover {
      background-color: #717ff5;
      border: none;
      color: white;
      padding: 5px 20px;
      border-radius: 3px;
    }
  </style>

</head>

<body>
  <?php
  include "../../../koneksi.php";
  $kd_gejala = $_GET['id_gejala'];
  $kd_penyakit = $_GET['id_penyakit'];
  $belief = $_POST['updatebelief'];
  // jika data nol maka simpan data
  $perintah = "UPDATE tb_rules SET belief='$belief' WHERE id_gejala='$kd_gejala' AND id_penyakit='$kd_penyakit' ";
  //$perintah2=mysqli_query("UPDATE tbrule SET md='$NilaiMD' WHERE kd_gejala='$kd_gejala' ");
  $berhasil = mysqli_query($koneksi, $perintah) or die(" Data tidak masuk database / data telah ada " . mysqli_error($koneksi));
  if ($berhasil) {
    echo "<figure class='notification'>";
    echo "<div class='notification__body'>";
    echo "<img src='../../icons/check.svg' title='Success' alt='success' class='notification__icon' />";
    echo "Data Berhasil Diubah!";
    echo "</div>";
    echo "<div class='notification__progess'></div>";
    echo "</figure>";

    echo "<script>";
    echo "setTimeout(function() {";
    echo "  window.location.href = 'rules.php';";
    echo "}, 3000);"; // Mengatur waktu tampilan notifikasi sebelum redirect (dalam contoh ini 3000ms = 3 detik)
    echo "</script>";
    // echo "<br><br><br>";
    // echo "<center><b>Data Nilai Belief Berhasil Diubah</b></center>";
    // echo "<br>";
    // echo "<center><a class='ok' href='./rules.php'>OK</a></center>";
  } else {
    echo "<figure class='notification'>";
    echo "<div class='notification__body'>";
    echo "<img src='../../icons/check.svg' title='Success' alt='success' class='notification__icon' />";
    echo "Data Gagal Diubah!";
    echo "</div>";
    echo "<div class='notification__progess'></div>";
    echo "</figure>";

    echo "<script>";
    echo "setTimeout(function() {";
    echo "  window.location.href = 'rules.php';";
    echo "}, 3000);"; // Mengatur waktu tampilan notifikasi sebelum redirect (dalam contoh ini 3000ms = 3 detik)
    echo "</script>";
    // echo "<center><font color='#ff0000'><strong>Penyimpanan Gagal</strong></font></center><br>";
    // echo "<center><a href='./rules.php'>Kembali</a></center>";
  }

  ?>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../assets/vendor/quill/quill.min.js"></script>
  <script src="../../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/jquery.truncatable.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>