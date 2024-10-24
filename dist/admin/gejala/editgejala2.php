<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <title>FISH-EXPERT - Edit</title>
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <!-- My CSS -->
  <link href="../../css/style.css" rel="stylesheet">
  
</head>

<body>
  <?php
  include "../../../koneksi.php";

  $kdgejala = $_POST['kdgejala'];
  $gejala = $_POST['edit_gejala'];
  $sql = "UPDATE tb_gejala SET gejala='$gejala' WHERE id='$kdgejala'";
  $result = mysqli_query($koneksi, $sql) or die("SQL Error" . mysqli_error($koneksi));

  if ($result) {
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
      echo "  window.location.href = 'gejala.php';";
      echo "}, 3000);"; // Mengatur waktu tampilan notifikasi sebelum redirect (dalam contoh ini 3000ms = 3 detik)
      echo "</script>";

    // echo "<table style='margin-top:150px;' align='center'><tr><td>";
    // echo "<div style='width:500px; height:50px auto; border:1px solid #CCC; font-family:Poppins; padding:3px 3px 3px 3px;'>";
    // echo "<center>terima kasih, data berhasil diubah</center><br>";
    // echo "<center><a href='./gejala.php' class='btn btn-primary btn-sm'>OK</a></center>";
    // echo "</div>";
    // echo "</td></tr></table>";
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
      echo "  window.location.href = 'gejala.php';";
      echo "}, 3000);"; // Mengatur waktu tampilan notifikasi sebelum redirect (dalam contoh ini 3000ms = 3 detik)
      echo "</script>";
    // echo "<center><font color='#ff0000'><strong>Maaf gagal mengupdate data</strong></font></center><br>";
    // echo "<center><a href='./gejala.php' class='btn btn-danger btn-sm'>Kembali</a></center>";
  }
  ?>
</body>

</html>