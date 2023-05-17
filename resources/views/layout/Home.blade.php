@extends('layout.main')

@section('judul')
<div class="text-sm font-sans">
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <h5 class="page-title mb-0 p-0">Dashboard</h5>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-blue-700">Home</li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>
</div>
@endsection

@section('isi')

<div class="flex flex-wrap">
<div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/2">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border py-8">
        <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                        <p class="mb-0 font-sans font-semibold leading-normal text-md">Bidang Minat Sistem Informasi Geografis</p>
                        <h5 class="mb-0 font-bold">
                            {{ $sig }}
                            <span class="leading-normal text-sm font-weight-bolder text-lime-500"></span>
                        </h5>
                    </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                    <div
                        class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-cyan-500 to-blue-500">
                        <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/2">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border py-8">
        <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                        <p class="mb-0 font-sans font-semibold leading-normal text-md">Bidang Minat Rekayasa Perangkat Lunak</p>
                        <h5 class="mb-0 font-bold">
                            {{ $rpl }}
                            <span class="leading-normal text-sm font-weight-bolder text-lime-500"></span>
                        </h5>
                    </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                    <div
                        class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-cyan-500 to-blue-500">
                        <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/2">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border py-8">
        <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                        <p class="mb-0 font-sans font-semibold leading-normal text-md">Bidang Minat Data Mining</p>
                        <h5 class="mb-0 font-bold">
                            {{ $dm }}
                            <span class="leading-normal text-sm font-weight-bolder text-lime-500"></span>
                        </h5>
                    </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                    <div
                        class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-cyan-500 to-blue-500">
                        <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:w-1/2">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border py-8">
        <div class="flex-auto p-4">
            <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                        <p class="mb-0 font-sans font-semibold leading-normal text-md">Bidang Minat Jaringan</p>
                        <h5 class="mb-0 font-bold">
                            {{ $jaringan }}
                            <span class="leading-normal text-sm font-weight-bolder text-lime-500"></span>
                        </h5>
                    </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                    <div
                        class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-cyan-500 to-blue-500">
                        <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection