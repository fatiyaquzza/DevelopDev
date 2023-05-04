<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <title>INF FAP</title>

    <style>
        #menu-toggle:checked+#menu {
            display: block;
        }

        #dropdown-toggle:checked+#dropdown {
            display: block;
        }
    </style>
</head>

<body>
    <x-header />

    <section class="mx-auto text-center shadow-lg mt mt-8 pb-8">
        <p class="text-green-500">Wilda Fahera || 2108107010023</p>
        <h1 class="mt-8 font-bold text-2xl">Pengembangan Media Pembelajaran Berbantuan Video Berbasis Augmented Reality
            Pada
            Mata
            Pelajaran Teknik
            Animasi 3d Kompetensi Keahlian Multimedia (2017)</h1>
        <div class="flex justify-center my-4">
            <img src="https://st2.depositphotos.com/4082359/8710/i/950/depositphotos_87100194-stock-photo-male-student-working-in-a.jpg" alt="">
        </div>
        <p>Dosen Pembimbing 1 : Pak Alim Misbullah</p>
        <p>Dosen Pembimbing 2 : Pak Nazaruddin</p>
        <p>Bidang Minat : Rekayasa Perangkat Lunak</p>


    </section>

    <section class="bg-green-100 pb-10 drop-shadow-lg">
        <h1 class="text-center py-8 font-medium text-2xl">Deskripsi</h1>
        <p class="mx-6 text-justify">Sistem Pendukung Keputusan (SPK) Penilaian Kesehatan Tanah dengan metode Simple
            Additive
            Weighting (SAW)
            adalah suatu aplikasi yang dikembangkan untuk membantu para ahli atau pengambil keputusan dalam menentukan
            kualitas kesehatan suatu tanah. Sistem ini akan memproses data yang telah dikumpulkan dari tanah dan
            memberikan hasil evaluasi berupa nilai atau skor kesehatan tanah.
            Metode SAW adalah salah satu teknik pemilihan alternatif terbaik yang sering digunakan dalam sistem
            pendukung keputusan. Metode ini memperhitungkan bobot atau nilai penting dari setiap kriteria yang diberikan
            untuk menentukan skor akhir. Setiap kriteria yang dihitung akan diberikan bobot atau nilai penting yang
            berbeda-beda tergantung pada kebutuhan pengguna.
            Dalam tugas akhir ini, penulis akan membuat sebuah aplikasi yang mudah digunakan oleh pengguna. Aplikasi ini
            akan menampilkan hasil evaluasi berupa nilai atau skor kesehatan tanah dan memberikan saran untuk
            meningkatkan kualitas kesehatan tanah jika diperlukan. Dengan adanya aplikasi SPK ini, diharapkan para ahli
            atau pengambil keputusan bisa memperoleh hasil evaluasi yang akurat dan lebih cepat dalam menentukan
            kualitas kesehatan suatu tanah.</p>
    </section>

    <section class="my-8">
  <div style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
    <h1 class="font-medium text-2xl">
      Output Tugas Akhir
    </h1>
    <img src="https://i.pinimg.com/originals/57/8e/7c/578e7c7091118d8096042e7b12aa6f27.jpg" alt=""> 
  </div>
  <div style="margin-top: 20px; display: flex; align-items: center; justify-content: center; flex-direction: column;">
    <img src="https://i.pinimg.com/originals/fd/19/c0/fd19c012fdba613d73e4fca9f4c84338.jpg" alt=""> 
  </div>
  <div style="margin-top: 20px; display: flex; align-items: center; justify-content: center; flex-direction: column;">
    <img src="https://i.pinimg.com/originals/05/0d/31/050d31ed9529e16901568c870cbb02ab.jpg" alt=""> 
  </div>
</section> 



    {{-- <x-footer /> --}}
</body>

</html>