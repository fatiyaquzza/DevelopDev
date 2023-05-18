@extends('layout.main')

@section('judul')
<div class="text-sm font-sans">
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <h5 class="page-title mb-0 p-0">Feedback</h5>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-blue-700">Home</li>
                        <li class="breadcrumb-item active" aria-current="page">Feedback</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>
</div>
@endsection

@section('isi')

<div class="mx-10">
    <div class="text-black font-sans">


        <div class="bg-blue-100 rounded-md pt-4 shadow-md">
            <div class="card-header">
                <h2 class="text-2xl text-center text-blue-900 font-semibold">Kritik dan Saran</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-sm text-black uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th  class="px-6 py-3 w-20">No</th>
                                <th  class="px-6 py-3 ">Nama</th>
                                <th  class="px-6 py-3 ">Email</th>
                                <th  class="px-6 py-3">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($isi as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600">
                                    <td  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $loop->iteration }}</td>
                                    <td  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->nama }}</td>
                                    <td  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->email }}</td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="h-40 w-96 overflow-y-auto">
                                            <p class="whitespace-normal text-justify mr-4">{{ $item->message }}</p>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
