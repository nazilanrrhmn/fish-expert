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
    <header
      class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10"
    >
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="#home" class="font-bold text-lg text-primary block py-6"
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
                    href="#home"
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

    <!-- Hero Section Start -->
    <section id="home" class="pt-36 pb-32">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-semibold text-primary md:text-lg">
              Selamat Datang - Ahli di Dunia Ikan!
              <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl"
                >FISH-EXPERT</span
              >
            </h1>
            <h2
              class="font-medium text-secondary text-sm mb-5 leading-relaxed lg:text-lg"
            >
              <span class="text-dark">Sistem Pakar</span> Diagnosa Penyakit Ikan
              Mas
            </h2>
            <p class="font-medium text-secondary mb-10">
              Apakah Anda ingin mengetahui penyakit yang mungkin dihadapi ikan
              Anda dan solusi terbaik untuk mengatasinya?<br /><span
                class="text-dark font-bold"
                >Fish-Expert</span
              >
              hadir sebagai solusi untuk Anda!
            </p>

            <a
              href="konsultasi.php"
              class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
              >Diagnosa Sekarang</a
            >
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:mt-9 lg:right-0">
              <img
                src="./dist/img/ikanmas.png"
                alt="Ikan Mas"
                class="max-w-full mx-auto"
              />
              <span
                class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125"
              >
                <svg
                  width="400"
                  height="400"
                  viewBox="0 0 200 200"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="#0369a1"
                    d="M14.9,-21.8C21.1,-12.5,29.2,-9.6,36.1,-1.8C42.9,6,48.4,18.6,43.4,23.1C38.5,27.6,22.9,24,10.6,28.1C-1.8,32.3,-11.1,44.1,-21.4,45.9C-31.6,47.7,-42.8,39.5,-43.8,29.4C-44.7,19.3,-35.4,7.3,-29.1,-1.1C-22.8,-9.5,-19.5,-14.4,-15.1,-24C-10.8,-33.7,-5.4,-48,-0.5,-47.4C4.3,-46.8,8.7,-31.1,14.9,-21.8Z"
                    transform="translate(100 100) scale(1.2)"
                  />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

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
                  href=""
                  class="inline-block text-base hover:text-primary mb-3"
                  >Beranda</a
                >
              </li>
              <li>
                <a
                  href=""
                  class="inline-block text-base hover:text-primary mb-3"
                  >Tentang Kami</a
                >
              </li>
              <li>
                <a
                  href=""
                  class="inline-block text-base hover:text-primary mb-3"
                  >Kontak Kami</a
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
