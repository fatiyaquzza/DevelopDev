@extends('students.layout')
@section('content')


    <div class="card">
        <div class="card-header">Data</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title mb-4">Name : {{ $students->nama }}</h5>
                <p class="card-text mb-4">NPM : {{ $students->npm }}</p>
                <p class="card-text mb-4">Judul : {{ $students->judul }}</p>
                <p class="card-text mb-4">Deskripsi : {{ $students->deskripsi }}</p>
                <p class="card-text mb-4">Dosen Pembimbing 1 : {{ $students->dospem_1 }}</p>
                <p class="card-text mb-4">Dosen Pembimbing 2 : {{ $students->dospem_2 }}</p>
                <p class="card-text mb-4">Bidang Minat : {{ $students->bidang_minat }}</p>
                <p class="card-text mb-4">Link Demo : {{ $students->link_demo }}</p>

                <p class="card-text">Foto 1 :
                    {{-- {{ $students->foto1 }} --}}
                    <img src="{{ asset('fotoOutput/' . $students->foto1) }}" alt="" style="width:120px;">
                </p>
                <p class="card-text">Foto 2 :
                    <img src="{{ asset('fotoOutput/' . $students->foto2) }}" alt="" style="width:120px;">
                </p>
                <p class="card-text">Foto 3 :
                    <img src="{{ asset('fotoOutput/' . $students->foto3) }}" alt="" style="width:120px;">
                </p>
                <p class="card-text">Foto Profil:
                    <img src="{{ asset('fotoOutput/' . $students->foto_mhs) }}" alt="" style="width:120px;">
                </p>

                <div class="mt-12">
                    <a href="{{ url('/student') }}">
                        <button type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                        focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600
                        dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back</button>
                    </a>
                </div>
            </div>


            </hr>

        </div>
    </div>

@stop