@extends('students.layout')
@section('content')
    <div class="">
        <div class="text-black font-sans">


            <div class="bg-blue-100 rounded-md pt-4 shadow-md">
                <div class="card-header">
                    <h2 class="text-2xl text-center text-blue-900 font-semibold">Arsip Tugas Akhir Mahasiswa</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/student/create') }}" class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-2 py-2.5 text-center mr-2 mb-2" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive ">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-sm text-black uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th  class="px-6 py-3 w-20">No</th>
                                    <th  class="px-6 py-3 ">Nama</th>
                                    <th  class="px-6 py-3 ">NPM</th>
                                    <th  class="px-6 py-3 ">Judul</th>
                                    <th  class="px-6 py-3">Deskripsi</th>
                                    <th  class="px-6 py-3">Dospem_1</th>
                                    <th  class="px-6 py-3">Dospem_2</th>
                                    <th>
                                        <div class="d-inline-block " style="width: 100px">Bidang Minat</div></th>

                                    <th  class="px-6 py-3 w-2">Link Demo</th>
                                    <th  class="px-6 py-3">Foto 1</th>
                                    <th  class="px-6 py-3">Foto 2</th>
                                    <th  class="px-6 py-3">Foto 3</th>
                                    <th  class="px-6 py-3">Foto Profil</th>
                                    <th  class="px-6 py-3">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $item)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600">
                                        <td  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">{{ $loop->iteration }}</td>
                                        <td  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">{{ $item->nama }}</td>
                                        <td  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">{{ $item->npm }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="h-10 w-96 overflow-y-auto my-auto">
                                                <p class="whitespace-normal text-justify mr-4">{{ $item->judul }}</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="h-40 w-96 overflow-y-auto">
                                                <p class="whitespace-normal text-justify mr-4">{{ $item->deskripsi }}</p>
                                            </div>
                                        </td>
                                        <td  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">{{ $item->dospem_1 }}</td>
                                        <td  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">{{ $item->dospem_2 }}</td>
                                        <td  class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">{{ $item->bidang_minat }}</td>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="h-10 w-96 overflow-y-auto">
                                                <a href="{{ $item->link_demo }}">
                                                    {{ $item->link_demo }}</a>
                                            </div>
                                        </td>

                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                            <img src="{{ asset('fotoOutput/' . $item->foto1) }}" alt=""
                                                style="width:120px;">

                                        </td>
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white ">
                                            <img src="{{ asset('fotoOutput/' . $item->foto2) }}" alt=""
                                                style="width:120px;">

                                        </td>
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                            <img src="{{ asset('fotoOutput/' . $item->foto3) }}" alt=""
                                                style="width:120px;">

                                        </td>
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                            <img src="{{ asset('fotoOutput/' . $item->foto_mhs) }}" alt=""
                                                style="width:120px;">

                                        </td>

                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"> <button
                                                    type="button"
                                                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-4 py-2.5 text-center mr-2 mb-2">View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student">
                                                <div class="my-6">

                                                    <button type="button"
                                                        class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-3 py-2.5 text-center mr-2 mb-2">Update</button>

                                                </div>
                                            </a>

                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}"
                                                accept-charset="UTF-8" class="">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button
                                                    type="submit"class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-3 py-2.5 text-center mr-2 mb-2"
                                                    title="Delete Student"
                                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
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
