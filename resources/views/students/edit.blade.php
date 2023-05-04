@extends('students.layout')
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('student/' . $students->id) }}" method="post">
                @csrf
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" id="id" value="{{ $students->id }}" />

                <label>Name</label></br>
                <input type="text" name="nama" id="nama" value="{{ $students->nama }}" class="form-control"></br>

                <label>NPM</label></br>
                <input type="text" name="npm" id="npm" value="{{ $students->npm }}" class="form-control"></br>

                <label>Judul</label></br>
                <input type="text" name="judul" id="judul" value="{{ $students->judul }}"
                    class="form-control"></br>

                <label for="deskripsi">Deskripsi</label></br>
                <textarea maxlength="500" name="deskripsi" id="deskripsi" value="{{ $students->deskripsi }}" class="form-control"></textarea></br>


                <label for="dospem_1">Dosen Pembimbing 1</label></br>
                <input type="text" name="dospem_1" id="dospem_1" value="{{ $students->dospem_1 }}"
                    class="form-control"></br>

                <label for="dospem_2">Dosen Pembimbing 2</label></br>
                <input type="text" name="dospem_2" id="dospem_2" value="{{ $students->dospem_2 }}"
                    class="form-control"></br>

                <label for="bidang_minat">Bidang Minat</label></br>
                <input type="text" name="bidang_minat" id="bidang_minat" value="{{ $students->bidang_minat }}"
                    class="form-control"></br>

                <label for="link_demo">Link Demo</label></br>
                <input type="text" name="link_demo" id="link_demo" value="{{ $students->link_demo }}"
                    class="form-control"></br>

                <label for="foto1">Foto 1</label><br>
                @if ($students->foto1)
                    <img src="{{ asset('fotoOutput/' . $students->foto1) }}" alt="Foto 1" style="width:120px;"><br>
                @else
                    <p>Foto tidak tersedia</p>
                @endif
                <input type="file" accept="image/png, image/jpeg" name="foto1" id="foto1" class="form-control"><br>

                {{-- <label for="foto2">Foto 2</label></br>
                <input accept="image/png, image/jpeg" type="file" name="foto2" id="foto2"
                    value="{{ $students->foto2 }}" class="form-control"></br> --}}
                <label for="foto2">Foto 2</label><br>
                @if ($students->foto2)
                    <img src="{{ asset('fotoOutput/' . $students->foto2) }}" alt="Foto 1" style="width:120px;"><br>
                @endif
                <input type="file" accept="image/png, image/jpeg" name="foto2" id="foto2" class="form-control"><br>


                <label for="foto3">Foto 3</label><br>
                @if ($students->foto3)
                    <img src="{{ asset('fotoOutput/' . $students->foto3) }}" alt="Foto 1" style="width:120px;"><br>
                @endif
                <input type="file" accept="image/png, image/jpeg" name="foto3" id="foto3" class="form-control"><br>


                <label for="foto_mhs">Foto Mahasiswa</label><br>
                @if ($students->foto_mhs)
                    <img src="{{ asset('fotoOutput/' . $students->foto_mhs) }}" alt="Foto 1" style="width:120px;"><br>
                @endif
                <input type="file" accept="image/png, image/jpeg" name="foto_mhs" id="foto_mhs"
                    class="form-control"><br>


                <div class="flex justify-between">
                    <input type="submit" value="Update" class="btn btn-success my-8 mr-24">
                    <a href="{{ url('/student') }}">
                        <button type="button" class="btn btn-danger my-8">Cancel</button> </a>
                </div>

            </form>

        </div>
    </div>

@stop