<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FishExpert - Tailwinds</title>
  <link href="dist/output.css" rel="stylesheet" />


  <!-- <link href="./dist/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="./assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="./assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="./assets/vendor/simple-datatables/style.css" rel="stylesheet"> -->
</head>

<body>
  <?php
  include 'koneksi.php';
  // mengaktifkan session
  session_start();
  ?>

  <!-- Header Start -->
  <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
      <div class="flex items-center justify-between relative">
        <div class="px-4">
          <a href="./index.php" class="font-bold text-lg text-primary block py-6">FishExpert</a>
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
                <a href="./index.php" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
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

  <!-- Konsultasi Section Start -->
  <section class="pt-36 pb-10">
    <div class="container mx-auto p-4">
      <div class="p-5 h-auto bg-primary text-white mb-12">
        <h1 class="text-3xl mb-2 text-center">Konsultasi Ikan Mas</h1>
        <!-- <div class="mt-4">
          <button class="text-base font-semibold text-white bg-primary py-2 px-6 mx-8 flex rounded-lg hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out sm:text-center" onclick="return validateForm();">
            <i class="bi bi-check-lg"></i> Diagnosa
          </button>
        </div> -->
        <p class="text-base mt-5 text-justify">
          Selanjutnya, anda diminta untuk menjawab dengan cara klik opsi
          gejala apabila gejala tersebut sesuai dengan kondisi yang terjadi.
          Bacalah dan jawab setiap gejala dengan teliti dan seksama. <br />
          Note : Anda harus memilih gejala minimal 2 gejala!
        </p>
      </div>
      <?php
      $koneksi = mysqli_connect("localhost", "root", "", "dbpakar");

      // Check connection
      if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " . mysqli_connect_error();
      }
      ?>
      <form action="hasilkonsultasi.php" method="POST">
        <div class="mb-3">
          <label class="block">
            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
              Nama
            </span>
            <input type="text" name="nama" id="nama" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Nama Anda!" required />
          </label>
        </div>
        <div class="mb-3">
          <label class="block">
            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
              Alamat
            </span>
            <input type="text" name="alamat" id="alamat" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Alamat Anda!" required />
          </label>
        </div>
        <div class="mb-8">
          <label class="block">
            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
              Tanggal Konsultasi
            </span>
            <input type="date" name="tgl_konsul" id="tgl_konsul" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" aria-describedby="Tanggal" required />
          </label>
        </div>
        <?php

        $sqli = "SELECT * FROM tb_gejala";
        // $result = mysqli_query($koneksi, $sqli);
        $result = $koneksi->query($sqli);
        if (isset($_POST['bukti'])) {
          if (count($_POST['bukti']) < 2) {
            echo "<p class=\"gejala\">Mohon maaf anda harus pilih minimal 2 gejala</p>";
          } elseif (count($_POST['bukti']) <= 0) {
            echo "<p class=\"gejala\">Anda harus memilih gejala terlebih dahulu</p>";
          }
        }

        // mengambil baris berikutnya menjadi objek
        while ($row = $result->fetch_object()) {
          echo "<hr> ";
          echo "<label for='checkbox" . $row->id . "' style='cursor: pointer;'>";
          echo "<input style='cursor: pointer; width:20px;height:20px;' type='checkbox' id='checkbox" . $row->id . "' name='bukti[]' value='" . $row->id . "'";
          if (isset($_POST['bukti'])) {
            echo (in_array($row->id, $_POST['bukti']) ? " checked" : "");
          }
          echo ">&ensp; " . $row->kdgejala . ". " . $row->gejala . "</label><br>";
        }

        ?>

        <div class="mt-4">
          <button class="text-base font-semibold text-white bg-primary py-2 px-6 mx-8 flex rounded-lg hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out sm:text-center" onclick="return validateForm();">
            <i class="bi bi-check-lg"></i> Diagnosa</button>

        </div>

      </form>
      <script>
        function validateForm() {
          var boxes = document.getElementsByName("bukti[]");
          var checkboxesChecked = 0;
          for (var i = 0; i < boxes.length; i++) {
            if (boxes[i].checked) {
              checkboxesChecked++;
            }
          }
          if (checkboxesChecked < 2) {
            alert("Maaf, Anda harus memilih minimal 2 gejala");
            return false;
          }
        }
      </script>
    </div>
  </section>
  <!-- Konsultasi Section End -->

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