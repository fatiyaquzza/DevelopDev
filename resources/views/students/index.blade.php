@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row">


            <div class="card">
                <div class="card-header">
                    <h2 class="text-lg">Arsip Tugas Akhir Mahasiswa</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>NPM</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Dosen Pembimbing 1</th>
                                    <th>Dosen Pembimbing 2</th>
                                    <th>Bidang Minat</th>
                                    <th>Link Demo</th>
                                    <th>Foto 1</th>
                                    <th>Foto 2</th>
                                    <th>Foto 3</th>
                                    <th>Foto Profil</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->npm }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>{{ $item->dospem_1 }}</td>
                                        <td>{{ $item->dospem_2 }}</td>
                                        <td>{{ $item->bidang_minat }}</td>
                                        <td>
                                            <a href="{{ $item->link_demo }}">
                                                {{ $item->link_demo }}</a>
                                        </td>

                                        <td>
                                            <img src="{{ asset('fotoOutput/' . $item->foto1) }}" alt=""
                                                style="width:120px;">

                                        </td>
                                        <td>
                                            <img src="{{ asset('fotoOutput/' . $item->foto2) }}" alt=""
                                                style="width:120px;">

                                        </td>
                                        <td>
                                            <img src="{{ asset('fotoOutput/' . $item->foto3) }}" alt=""
                                                style="width:120px;">

                                        </td>
                                        <td>
                                            <img src="{{ asset('fotoOutput/' . $item->foto_mhs) }}" alt=""
                                                style="width:120px;">

                                        </td>

                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"> <button
                                                    type="button"
                                                    class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4
                                                focus:ring-sky-300 font-medium rounded-lg text-sm px-3 py-2.5 mr-2 mb-2 dark:bg-sky-600
                                                dark:hover:bg-sky-700 focus:outline-none dark:focus:ring-sky-800">View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student">
                                                <div class="my-6">

                                                    <button type="button"
                                                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4
                                                        focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2 dark:bg-green-600
                                                        dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Update</button>

                                                </div>
                                            </a>

                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button
                                                    type="submit"class="text-white bg-red-700 hover:bg-red-800 focus:ring-4
                                                focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2 dark:bg-red-600
                                                dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800"
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