/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.php','konsultasi.php','hasilkonsultasi.php','login.php','penyakit.php'],
  theme: {
    container: {
      center: true,
      padding: '16px'
    },
    extend: {
      colors: {
        primary: '#0369a1',
        secondary: '#64748b',
        dark: '#0f172a',
      },
      screens: {
        '2xl': '1320px',
      }
    },
  },
  plugins: [],
}

