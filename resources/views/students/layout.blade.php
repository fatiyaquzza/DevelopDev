@extends('layout.main')

@section('judul')
    <h1 class="text-center font-semibold">Halaman Mahasiswa</h1>
@endsection

@section('isi')
    <div class="container">
        @yield('content')
    </div>
@endsection