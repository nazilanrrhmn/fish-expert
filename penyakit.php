<!DOCTYPE html>
<html lang="en">
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
            <a href="./index.php" class="font-bold text-lg text-primary block py-6"
              >FishExpert</a
            >
          </div>
          <div class="flex items-center px-4">
            <button
              id="hamburger"
              name="hamburger"
              type="button"
              class="block absolute right-4 lg:hidden"
            >
              <span
                class="hamburger-line transition duration-300 origin-top-left"
              ></span>
              <span class="hamburger-line transition duration-300"></span>
              <span
                class="hamburger-line transition duration-300 origin-bottom-left"
              ></span>
            </button>

            <nav
              id="nav-menu"
              class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none"
            >
              <ul class="block lg:flex">
                <li class="group">
                  <a
                    href="./index.php"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                    >Beranda</a
                  >
                </li>
                <li class="group">
                  <a
                    href="./konsultasi.php"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                    >Konsultasi</a
                  >
                </li>
                <li class="group">
                  <a
                    href="./penyakit.php" 
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                    >Penyakit</a
                  >
                </li>
                <li class="group">
                  <a
                    href="./about.php" id="about"
                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary"
                    >Tentang Kami</a
                  >
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

    <!-- About Section Start -->
    <section id="about" class="pt-36 pb-32">
      <div class="container">
      <h4 class="font-bold uppercase text-primary text-lg mb-3">
              DATA PENYAKIT
            </h4>
        <div class="flex flex-wrap">
        <?php
                include "koneksi.php";
                $sql = "SELECT * FROM tb_penyakit  ORDER BY kdpenyakit";
                $qry = mysqli_query($koneksi, $sql) or die("SQL Error" . mysqli_error($koneksi));
                $no = 0;
                while ($data = mysqli_fetch_array($qry)) {
                  $no++;
                ?>
          <div class="w-full px-4 mb-10 lg:w-1/2">
            <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-2xl">
              <a href="detail.php?kdpenyakit=<?=$data['kdpenyakit']?>"><?php echo $data['nama_penyakit']; ?></a>
            </h2>
            <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">
              <?php echo $data['definisi']; ?>
            </p>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
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
                <a
                  href="index.php"
                  class="inline-block text-base hover:text-primary mb-3"
                  >Beranda</a
                >
              </li>
              <li>
                <a
                  href="konsultasi.php"
                  class="inline-block text-base hover:text-primary mb-3"
                  >Konsultasi</a
                >
              </li>
              <li>
                <a
                  href="penyakit.php"
                  class="inline-block text-base hover:text-primary mb-3"
                  >Penyakit</a
                >
              </li>
              <li>
                <a
                  href="index.php"
                  class="inline-block text-base hover:text-primary mb-3"
                  >Tentang Kami</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->

    <script src="dist/js/script.js"></script>
  </body>
</html>
