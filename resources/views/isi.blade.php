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
        <p class="text-gray-600 font-medium">{{ $students->nama }} || {{ $students->npm }}</p>
        <h1 class="mt-8 font-bold text-2xl">{{ $students->judul }}</h1>
        <div class="flex justify-center my-4 w-60 mx-auto">
            <img src="{{ asset('fotoOutput/' . $students->foto_mhs) }}" alt="">
        </div>
        <p>Dosen Pembimbing 1 : {{ $students->dospem_1 }}</p>
        <p>Dosen Pembimbing 2 : {{ $students->dospem_2 }}</p>
        <p>Bidang Minat : {{ $students->bidang_minat }}</p>


    </section>

    <section class="bg-sky-100 pb-10 drop-shadow-lg text-black">
        <h1 class="text-center py-8 font-medium text-2xl">Deskripsi</h1>
        <p class="mx-6 text-justify">{{ $students->deskripsi }}</p>
    </section>

    <section class="my-8">
        <div style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
            <h1 class="font-medium text-2xl mb-10">
                Output Tugas Akhir
            </h1>
            <img src="{{ asset('fotoOutput/' . $students->foto1) }}" alt="" style="width:700px">
        </div>
        <div
            style="margin-top: 20px; display: flex; align-items: center; justify-content: center; flex-direction: column;">
            <img src="{{ asset('fotoOutput/' . $students->foto2) }}" alt="" style="width:700px">
        </div>
        <div
            style="margin-top: 20px; display: flex; align-items: center; justify-content: center; flex-direction: column;">
            <img src="{{ asset('fotoOutput/' . $students->foto3) }}" alt="" style="width:700px">
        </div>

        <div class="text-center">
            <h1 class="font-bold text-center mt-10">Link Demo Tugas Akhir</h1>
            <a href="{{ $students->link_demo }}" class="text-blue-700 text-lg">{{ $students->link_demo }}</a>
        </div>
    </section>



    <x-footer />
</body>

</html>
