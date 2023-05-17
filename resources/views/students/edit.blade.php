@extends('students.layout')
@section('content')

    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('student/' . $students->id) }}" method="post" enctype="multipart/form-data">
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
                <textarea maxlength="500" name="deskripsi" id="deskripsi" class="form-control">{{ $students->deskripsi }}</textarea></br>


                <label for="dospem_1">Dosen Pembimbing 1</label></br>
                <input type="text" name="dospem_1" id="dospem_1" value="{{ $students->dospem_1 }}"
                    class="form-control"></br>

                <label for="dospem_2">Dosen Pembimbing 2</label></br>
                <input type="text" name="dospem_2" id="dospem_2" value="{{ $students->dospem_2 }}"
                    class="form-control"></br>

                <label for="bidang_minat">Bidang Minat</label></br>
                <select id="bidang_minat" name="bidang_minat"
                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600">
                    <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    {{-- <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"> --}}
                    {{-- <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button"> --}}
                        <option value="RPL" class="text-left">
                            Rekayasa Perangkat Lunak
                        </option>
                        <option value="SIG" class="text-left">
                            Sistem Informasi Geografis
                        </option>
                        <option value="DM" class="text-left">
                            Data Mining
                        </option>
                        <option value="Jaringan" class="text-left">
                            Jaringan
                        </option>
                    {{-- </ul> --}}
                    {{-- </div> --}}
                </select>

                <br> <br>

                <label for="link_demo">Link Demo</label></br>
                <input type="text" name="link_demo" id="link_demo" value="{{ $students->link_demo }}"
                    class="form-control"></br>

                <label for="foto1">Foto 1</label><br>
                @if ($students->foto1)
                    <img src="{{ asset('fotoOutput/' . $students->foto1) }}" alt="Foto 1" id="img1" style="width:120px;"><br>
                @else
                    <p>Foto tidak tersedia</p>
                @endif
                <input type="file" accept="image/png, image/jpeg" name="foto1" id="foto1" class="form-control"><br>

                {{-- <label for="foto2">Foto 2</label></br>
                <input accept="image/png, image/jpeg" type="file" name="foto2" id="foto2"
                    value="{{ $students->foto2 }}" class="form-control"></br> --}}
                <label for="foto2">Foto 2</label><br>
                @if ($students->foto2)
                    <img src="{{ asset('fotoOutput/' . $students->foto2) }}" id="img2" alt="Foto 1" style="width:120px;"><br>
                @endif
                <input type="file" accept="image/png, image/jpeg" name="foto2" id="foto2" class="form-control" ><br>


                <label for="foto3">Foto 3</label><br>
                @if ($students->foto3)
                    <img src="{{ asset('fotoOutput/' . $students->foto3) }}" id = "img3" alt="Foto 1" style="width:120px;"><br>
                @endif
                <input type="file" accept="image/png, image/jpeg" name="foto3" id="foto3" class="form-control"><br>


                <label for="foto_mhs">Foto Mahasiswa</label><br>
                @if ($students->foto_mhs)
                    <img src="{{ asset('fotoOutput/' . $students->foto_mhs) }}" id="img_mhs" alt="Foto 1" style="width:120px;"><br>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function selectElement(id, valueToSelect) {
            let element = document.getElementById(id);
            element.value = valueToSelect;
        }

        selectElement('bidang_minat', '{{ $students->bidang_minat }}');

        function setImage(id_img, id_input) {
            var imgavat = $('#'+id_img);
            var inpfile = $('#'+id_input);
            inpfile.on('change', function() {
                if (this.files[0]) {
                    var reader  = new FileReader();

                    reader.readAsDataURL(this.files[0]);

                    reader.onloadend = function () {
                        imgavat.attr('src', reader.result);
                    };
                }
            });
        }

        setImage('img1', 'foto1');
        setImage('img2', 'foto2');
        setImage('img3', 'foto3');
        setImage('img_mhs', 'foto_mhs');

    </script>

@stop