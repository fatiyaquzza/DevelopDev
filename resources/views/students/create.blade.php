@extends('students.layout')
@section('content')

    <div class="card">
        <div class="card-header">Students Page</div>
        <div class="card-body">

            <form action="{{ url('student') }}" method="post" enctype="multipart/form-data">
                @csrf
                {!! csrf_field() !!}
                <label for="nama">Name</label></br>
                <input type="text" name="nama" id="nama" class="form-control"></br>

                <label for="npm">NPM</label></br>
                <input type="text" name="npm" id="npm" class="form-control"></br>

                <label for="judul">Judul</label></br>
                <input type="text" name="judul" id="judul" class="form-control"></br>

                <label for="deskripsi">Deskripsi</label></br>
                <textarea maxlength="500" name="deskripsi" id="deskripsi" class="form-control"></textarea></br>


                <label for="dospem_1">Dosen Pembimbing 1</label></br>
                <input type="text" name="dospem_1" id="dospem_1" class="form-control"></br>

                <label for="dospem_2">Dosen Pembimbing 2</label></br>
                <input type="text" name="dospem_2" id="dospem_2" class="form-control"></br>

                <label for="bidang_minat">Bidang Minat</label></br>
                <input type="text" name="bidang_minat" id="bidang_minat" class="form-control"></br>

                <label for="link_demo">Link Demo</label></br>
                <input type="text" name="link_demo" id="link_demo" class="form-control"></br>

                <label for="foto1">Foto 1</label></br>
                <input type="file" accept="image/png, image/jpeg" name="foto1" id="foto1"
                    class="form-control"></br>


                <label for="foto2">Foto 2</label></br>
                <input accept="image/png, image/jpeg" type="file" name="foto2" id="foto2"
                    class="form-control"></br>


                <label for="foto3">Foto 3</label></br>
                <input type="file" name="foto3" id="foto3" class="form-control"></br>


                <label for="foto_mhs">Foto Mahasiswa</label></br>
                <input type="file" name="foto_mhs" id="foto_mhs" class="form-control"></br>


                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop