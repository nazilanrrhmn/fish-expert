<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Simpan Data Rules</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link href="../../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../vendor/simple-datatables/style.css" rel="stylesheet">

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
  <div>
    <?php
    include "../../../koneksi.php";
    if (isset($_POST['gejala'])) {
      $seleksi   = htmlentities(implode(',', $_POST['gejala']));
    }
    $data = $seleksi;
    $input = $data;

    //menampilkan outputnya
    $kd_penyakit = $_POST['daftarpenyakit'];
    $belief = $_POST['belief'];
    //menyimpan data kedalam tabel relasi
    $barisinputan = $data;
    $barisinputan = $data;
    $barisinputan = explode(",", $barisinputan);
    $no = 0;
    for ($mulai = 0; $mulai < count($barisinputan); $mulai++) {
      $inputan = $barisinputan[$mulai];

      $sql = "INSERT INTO  tb_rules (id_penyakit,id_gejala,belief) VALUES ('$kd_penyakit','$inputan','$belief' )";
      $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
      $no++;
    }

    // Notifications
    echo "<figure class='notification'>";
    echo "<div class='notification__body'>";
    echo "<img src='../../icons/check.svg' title='Success' alt='success' class='notification__icon' />";
    echo "<strong>Data Rule berhasil di tambahkan</strong>";
    // echo "<center><a href='./penyakit.php' class='btn btn-primary btn-sm'>OK</a></center>";
    echo "</div>";
    echo "<div class='notification__progess'></div>";
    echo "</figure>";

    echo "<script>";
    echo "setTimeout(function() {";
    echo "  window.location.href = 'rules.php';";
    echo "}, 3000);"; // Mengatur waktu tampilan notifikasi sebelum redirect (dalam contoh ini 3000ms = 3 detik)
    echo "</script>";
    // echo "<br><br><br>";
    // echo "<center><strong>Data Rule berhasil di tambahkan</strong></center>";
    // echo "<br>";
    // echo "<center><a class='ok' href='./rules.php'>OK</a></center>";
    ?>
  </div>

  <!-- Vendor JS Files -->
  <script src="../../vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../vendor/chart.js/chart.min.js"></script>
  <script src="../../vendor/echarts/echarts.min.js"></script>
  <script src="../../vendor/quill/quill.min.js"></script>
  <script src="../../vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../vendor/tinymce/tinymce.min.js"></script>
  <script src="../../vendor/php-email-form/validate.js"></script>
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/jquery.truncatable.js"></script>

  <!-- Template Main JS File -->
  <script src="../../js/main.js"></script>

</body>

</html>