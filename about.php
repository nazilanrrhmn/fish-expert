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
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-10 lg:w-1/2">
            <h4 class="font-bold uppercase text-primary text-lg mb-3">
              Tentang Kami
            </h4>
            <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">
              Ayo, mulai sekarang! Bersama Fish-Expert.
            </h2>
            <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">
              Fish-Expert adalah ahli ikan virtual yang siap membantu. Dengan
              antarmuka yang sederhana dan mudah digunakan, Anda dapat dengan
              mudah memeriksa kesehatan ikan Anda kapan saja dan di mana saja.
              Jangan biarkan penyakit menghancurkan populasi ikan Anda, gunakan
              Fish-Expert untuk menjaga keberlanjutan ikan Anda.
            </p>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <h3
              class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10"
            >
              Ayo Periksa Ikan Anda
            </h3>
            <p class="font-medium text-base text-secondary mb-6 lg:text-lg">
              Dengan Fish-Expert, Anda akan mendapatkan diagnosis yang akurat
              dan solusi yang efektif. Cukup pilih beberapa tentang gejala ikan
              Anda, dan kami akan memberikan analisis mengenai penyakit yang
              mungkin diderita oleh ikan Anda.
            </p>
            <div class="flex items-center">
              <!-- TailwindsCSS -->
              <a
                href=""
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  class="fill-current"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>Tailwind CSS</title>
                  <path
                    d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"
                  />
                </svg>
              </a>

              <!-- PHP -->
              <a
                href=""
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  class="fill-current"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>PHP</title>
                  <path
                    d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z"
                  />
                </svg>
              </a>

              <!-- Me -->
              <a
                href=""
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  class="fill-current"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>About.me</title>
                  <path
                    d="M19.536 9.146c-1.373 0-2.133 1.014-2.294 2.116h4.608c-.125-1.05-.867-2.115-2.314-2.115m-2.26 3.617c.235 1.156 1.193 1.97 2.532 1.97.725 0 1.77-.27 2.384-.914l1.175 1.35c-1.064 1.11-2.653 1.426-3.74 1.426-2.64 0-4.697-1.906-4.697-4.606 0-2.535 1.894-4.62 4.57-4.62 2.585 0 4.5 1.98 4.5 4.604v.766h-6.723v.023zm-6.487 3.83v-5.69c0-.976-.435-1.536-1.338-1.536-.814 0-1.355.585-1.717 1.007v6.24h-2.35v-5.7c0-.976-.415-1.532-1.318-1.532-.813 0-1.375.586-1.717 1.006v6.24H0V7.505h2.35v1.15c.4-.463 1.302-1.26 2.71-1.26 1.247 0 2.096.526 2.477 1.59.524-.761 1.5-1.59 2.91-1.59 1.7 0 2.69 1.01 2.69 2.963v6.24h-2.353l.005-.007z"
                  />
                </svg>
              </a>
            </div>
          </div>
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
