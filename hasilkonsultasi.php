<?php
include 'koneksi.php';
// mengaktifkan session
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FishExpert - Tailwinds</title>
  <link href="dist/output.css" rel="stylesheet" />
</head>

<body>

  <!-- Header Start -->
  <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
      <div class="flex items-center justify-between relative">
        <div class="px-4">
          <a href="/index.php" class="font-bold text-lg text-primary block py-6">FishExpert</a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
            <span class="hamburger-line transition duration-300 origin-top-left"></span>
            <span class="hamburger-line transition duration-300"></span>
            <span class="hamburger-line transition duration-300 origin-bottom-left"></span>
          </button>

          <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex">
              <li class="group">
                <a href="/index.php" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
              </li>
              <li class="group">
                <a href="./konsultasi.php" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Konsultasi</a>
              </li>
              <li class="group">
                <a href="./penyakit.php" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Penyakit</a>
              </li>
              <li class="group">
                <a href="./about.php" id="about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Tentang Kami</a>
              </li>
              <!-- <li class="group">
                  <a
                    href="dist/admin/login.php"
                    class="text-base font-semibold text-white bg-primary py-2 px-6 mx-8 flex rounded-lg hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out sm:text-center"
                    >Masuk</a
                  >
                </li> -->
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->

  <!-- Hasil Konsultasi Section Start -->
  <section class="pt-36 pb-10">
    <div class="container">
      <h1 class="text-center mt-5">Hasil Diagnosa Penyakit Ikan Mas</h1>
      <br>
      <table class="border-collapse border-slate-500 w-full text-justify mb-5">
        <thead>
          <tr>
            <th class="border-slate-600">Nama</th>
            <th class="border-slate-600">Alamat</th>
            <th class="border-slate-600">Tanggal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo htmlspecialchars($_POST['nama']) ?></td>
            <td><?php echo htmlspecialchars($_POST['alamat']) ?></td>
            <td><?php echo htmlspecialchars($_POST['tgl_konsul']) ?></td>
          </tr>
        </tbody>
      </table>
      <?php
      $koneksi = mysqli_connect("localhost", "root", "", "dbpakar");

      // cek koneksi
      if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " . mysqli_connect_error();
      }

      //Mengambil Nilai Belief Gejala Yang dipilih
      if (isset($_POST['bukti'])) {
        echo "<div class='form'><p><b>Gejala Yang dipilih :</b></p>";
        $gejaladipilih = $_POST['bukti'];
        $gejala = "";
        foreach ($gejaladipilih as $gjlplh) {
          echo $gjlplh . " | ";
          $qry = mysqli_query($koneksi, "SELECT * FROM tb_gejala WHERE id='$gjlplh' ");
          while ($data = mysqli_fetch_array($qry)) {
            echo $data['gejala'] . "<br>";
          }
        }
        echo "</div>";

        $sql = "SELECT GROUP_CONCAT(b.kdpenyakit), a.belief
                    FROM tb_rules a
                    JOIN tb_penyakit b ON a.id_penyakit=b.id
                    WHERE a.id_gejala IN(" . implode(',', $_POST['bukti']) . ") 
                    GROUP BY a.id_gejala";
        $result = $koneksi->query($sql);
        $bukti = array();
        while ($row = $result->fetch_row()) {
          $bukti[] = $row;
        }
        // var_dump($row);
        // die;
        $sql = "SELECT GROUP_CONCAT(kdpenyakit) FROM tb_penyakit";
        $result = $koneksi->query($sql);
        $row = $result->fetch_row();
        $fod = $row[0];
        // var_dump($fod);
        // die;
        //menentukan nilai densitas
        $densitas_baru = array();
        while (!empty($bukti)) {
          $densitas1[0] = array_shift($bukti);
          $densitas1[1] = array($fod, 1 - $densitas1[0][1]);
          $densitas2 = array();
          if (empty($densitas_baru)) {
            $densitas2[0] = array_shift($bukti);
          } else {
            foreach ($densitas_baru as $k => $r) {
              if ($k != "&theta;") {
                $densitas2[] = array($k, $r);
              }
            }
          }
          $theta = 1;
          foreach ($densitas2 as $d) $theta -= $d[1];
          $densitas2[] = array($fod, $theta);
          $m = count($densitas2);
          $densitas_baru = array();
          for ($y = 0; $y < $m; $y++) {
            for ($x = 0; $x < 2; $x++) {
              if (!($y == $m - 1 && $x == 1)) {
                $v = explode(',', $densitas1[$x][0]);
                $w = explode(',', $densitas2[$y][0]);
                sort($v);
                sort($w);
                $vw = array_intersect($v, $w);
                if (empty($vw)) {
                  $k = "&theta;";
                } else {
                  $k = implode(',', $vw);
                }

                if (!isset($densitas_baru[$k])) {
                  $densitas_baru[$k] = $densitas1[$x][1] * $densitas2[$y][1];
                } else {
                  $densitas_baru[$k] += $densitas1[$x][1] * $densitas2[$y][1];
                }
              }
            }
          }
          foreach ($densitas_baru as $k => $d) {
            if ($k != "&theta;") {
              $densitas_baru[$k] = $d / (1 - (isset($densitas_baru["&theta;"]) ? $densitas_baru["&theta;"] : 0));
            }
          }
        }
        var_dump($densitas_baru);
        die;
        //menentukan urutan penyakit
        // unset($densitas_baru["&theta;"]);
        // arsort($densitas_baru);

        // $arrPenyakit = array();
        // $qry = mysqli_query($koneksi, "SELECT * FROM tb_penyakit");
        // while ($data = mysqli_fetch_array($qry)) {
        //   $arrPenyakit["$data[kdpenyakit]"] = $data['nama_penyakit'];
        // }

        // $datasolusi = array();
        // $datasolusi = array_intersect_key($arrPenyakit, $densitas_baru);
        // // var_dump($nilaiTertinggi); die;

        // $dataS = null; // Inisialisasi variabel $dataS

        // foreach ($nilaiTertinggi as $k => $a) {
        //     foreach ($densitas_baru as $kdpenyakit => $ranking) {
        //         if ($k == $kdpenyakit) {
        //             $strS = mysqli_query($koneksi, "SELECT solusi FROM tb_penyakit WHERE kdpenyakit='$k' ");
        //             $dataS = mysqli_fetch_array($strS);
        //         }
        //     }
        // }

        // example
        unset($densitas_baru["&theta;"]);
        arsort($densitas_baru);

        $arrPenyakit = array();
        $qry = mysqli_query($koneksi, "SELECT * FROM tb_penyakit");
        while ($data = mysqli_fetch_array($qry)) {
          $arrPenyakit["$data[kdpenyakit]"] = $data['nama_penyakit'];
        }

        die;
        $datasolusi = array();
        $datasolusi = array_intersect_key($arrPenyakit, $densitas_baru);

        // Mendapatkan nilai tertinggi dari array $densitas_baru
        $indeksTertinggi = array_keys($densitas_baru)[0];
        $nilaiTertinggi = $densitas_baru[$indeksTertinggi];

        // Mendapatkan solusi dari nilai tertinggi (jika ada)
        $dataS = null; // Inisialisasi variabel $dataS

        foreach ($densitas_baru as $kdpenyakit => $ranking) {
          if ($indeksTertinggi == $kdpenyakit) {
            $strS = mysqli_query($koneksi, "SELECT solusi FROM tb_penyakit WHERE kdpenyakit='$indeksTertinggi'");
            $dataS = mysqli_fetch_array($strS);
            break; // Keluar dari loop setelah ditemukan solusi untuk nilai tertinggi
          }
        }


        $codes = array_keys($densitas_baru);
        $final_codes = explode(',', $codes[0]);
        $sql = "SELECT GROUP_CONCAT(solusi)  
                    FROM tb_penyakit  
                    WHERE kdpenyakit IN('" . implode("' ,'", $final_codes) . "')";
        $result = $koneksi->query($sql);
        $rowS = $result->fetch_row();
        $solusi = isset($rowS[0]) ? htmlspecialchars($rowS[0]) : ""; // Ambil solusi dari $rowS

        // var_dump($solusi); die;
        //menampilkan hasil
        echo "<br>";
        echo "<p style='text-align:center;'>";
        $codes = array_keys($densitas_baru);
        $final_codes = explode(',', $codes[0]);
        $sql = "SELECT GROUP_CONCAT(nama_penyakit)  
                    FROM tb_penyakit  
                    WHERE kdpenyakit IN('" . implode("' ,'", $final_codes) . "')";
        $result = $koneksi->query($sql);
        $row = $result->fetch_row();

        $kepercayaan = round($densitas_baru[$codes[0]] * 100, 2);
        echo "<br>";
        echo "<br>";
        echo "<b>Kesimpulan Hasil Diagnosa :</b>";
        echo "<br>";
        echo " <p style='margin: 10px;max-height:300px;overflow:auto; border:3px solid #a3f0ff ; letter-spacing:2px;' class=\"diagnosa\">Terdeteksi penyakit <b>" . htmlspecialchars($row[0]) . "</b> dengan presentase sebesar
                    <b>" . $kepercayaan . "%</b></p>";
        echo "<br>";
        echo "<b><p style='text-align:center;'> Penanganan / Pengobatan :</b></p> ";
        echo "<p style='margin: 10px
            ;max-height:300px;overflow:auto; border:3px solid #a3f0ff ; letter-spacing:2px;'>" . htmlspecialchars($solusi) . "</p>";
      }
      // var_dump($solusi); die;

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include "koneksi.php";

        // Mengambil nilai input dari form
        $bukti = $_POST['bukti'];
        $namauser = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['nama']));
        $alamatuser = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['alamat']));
        $tanggal = mysqli_real_escape_string($koneksi, htmlspecialchars($_POST['tgl_konsul']));

        // Menggunakan GROUP_CONCAT dan implode untuk menggabungkan gejala
        $sql = "SELECT GROUP_CONCAT(gejala SEPARATOR ', ')
                    FROM tb_gejala
                    WHERE id IN ('" . implode("' ,'", $bukti) . "')";
        $result = $koneksi->query($sql);
        $gejala = $result->fetch_row();

        // Menyimpan data ke dalam database
        $sql = "INSERT INTO lapdiagnosa (nama, alamat, tgl_konsul, gejala, penyakit, kepercayaan)
                    VALUES('$namauser', '$alamatuser', '$tanggal', '$gejala[0]', '$row[0]', '$kepercayaan')";
        $result = mysqli_query($koneksi, $sql);
        if ($result) {
          // Data berhasil disimpan, lanjutkan dengan proses lainnya
          // ...
        } else {
          // Terjadi kesalahan saat menyimpan data ke database
          echo "Error: " . mysqli_error($koneksi);
          exit;
        }
      }
      ?>

      <div class="flex align-items-center justify-center mt-5">
        <a href="./konsultasi.php" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-lg hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Klik disini untuk kembali</a>
      </div>
      <br><br>
    </div>
  </section>
  <!-- Hasil Konsultasi Section End -->

  <!-- Footer Start -->
  <footer class="bg-dark pt-24 pb-12 mb-0">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/2">
          <h2 class="font-bold text-4xl text-white mb-5">FISH-EXPERT</h2>
          <h3 class="font-bold text-2xl mb-2">Sistem Pakar</h3>
          <p>Solusi aplikasi untuk mendiagnosa penyakit ikan</p>
        </div>
        <div class="w-full px-4 mb-12 md:w-1/2">
          <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
          <ul class="text-slate-300">
            <li>
              <a href="" class="inline-block text-base hover:text-primary mb-3">Beranda</a>
            </li>
            <li>
              <a href="" class="inline-block text-base hover:text-primary mb-3">Tentang Kami</a>
            </li>
            <li>
              <a href="" class="inline-block text-base hover:text-primary mb-3">Kontak Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Vendor JS Files -->
  <script src="./dist/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <script src="dist/js/script.js"></script>
  <script src="dist/js/main.js"></script>
</body>

</html>