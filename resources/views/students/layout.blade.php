@extends('layout.main')

@section('judul')
<div class="text-sm font-sans">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h5 class="page-title mb-0 p-0">Mahasiswa</h5>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-blue-700">Home</li>
                            <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection

@section('isi')
    <div class="mx-10 pb-10">
        @yield('content')
    </div>
@endsection