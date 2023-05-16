<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;

class StudentController extends Controller
{

    public function index(): View
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }

    public function daftar_portfolio(Request $request)
    {
        if ($request->has('search') && $request->has('kategori')) {
            if ($request['kategori'] == 'all') {
                $data = Student::where(function ($query) use ($request) {
                    $query->where('nama', 'LIKE', '%' . $request->search . '%')
                        ->orWhere('judul', 'LIKE', '%' . $request->search . '%');
                })->get();
            } else {
                $data = Student::where('bidang_minat', $request->kategori)->where(function ($query) use ($request) {
                    $query->where('nama', 'LIKE', '%' . $request->search . '%')
                        ->orWhere('judul', 'LIKE', '%' . $request->search . '%');
                })->get();
            }

            // $data = Student::where([
            //     ['nama', 'LIKE', '%' . $request->search . '%'],
            //     ['bidang', 'LIKE', '%' . $request->kategori . '%']])->paginate(5);
        } else {
            $data = Student::all();
        }
        return view('portfolio', compact('data'));
    }

    public function isi(string $id): View
    {

        $students = Student::find($id);
        return view('isi', compact('students'));
    }

    public function create(): View
    {
        return view('students.create');
    }

    public function add(Request $request): RedirectResponse
    {
        return redirect('student')->with('flash_message', 'Student Addedd!');
    }

    public function store(Request $request): RedirectResponse
    {
        // $input = $request->all();
        $data = Student::create($request->all());

        if ($request->hasFile('foto1')) {
            $request->file('foto1')->move('fotoOutput/', $request->file('foto1')->getClientOriginalName());
            $data->foto1 = $request->file('foto1')->getClientOriginalName();
            $data->save();
        }

        if ($request->hasFile('foto2')) {
            $request->file('foto2')->move('fotoOutput/', $request->file('foto2')->getClientOriginalName());
            $data->foto2 = $request->file('foto2')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto3')) {
            $request->file('foto3')->move('fotoOutput/', $request->file('foto3')->getClientOriginalName());
            $data->foto3 = $request->file('foto3')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto_mhs')) {
            $request->file('foto_mhs')->move('fotoOutput/', $request->file('foto_mhs')->getClientOriginalName());
            $data->foto_mhs = $request->file('foto_mhs')->getClientOriginalName();
            $data->save();
        }
        return redirect('student')->with('flash_message', 'Student Addedd!');
    }

    public function show(string $id): View
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }

    public function edit(string $id): View
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $input = $request->all();
        // $my_id = $input["id"];
        // echo json_encode($my_id);
        // echo ($input["npm"]);
        // echo ("<br>");
        // echo ("<br>");
        // echo json_encode($student);
        // echo ("<br>");
        // echo ("<br>");
        // echo json_encode($input);
        // die();


        if ($request->hasFile('foto1')) {
            $request->file('foto1')->move('fotoOutput/', $request->file('foto1')->getClientOriginalName());
            echo ($request->file('foto1')->getClientOriginalName());
            $student->foto1 = $request->file('foto1')->getClientOriginalName();
            $input["foto1"] = $request->file('foto1')->getClientOriginalName();
            $student->save();
        } else {
            $input["foto1"] = $student->foto1;
        }

        if ($request->hasFile('foto2')) {
            $request->file('foto2')->move('fotoOutput/', $request->file('foto2')->getClientOriginalName());
            $student->foto2 = $request->file('foto2')->getClientOriginalName();
            $input["foto2"] = $request->file('foto2')->getClientOriginalName();
            $student->save();
        } else {
            $input["foto2"] = $student->foto2;
        }

        if ($request->hasFile('foto3')) {
            $request->file('foto3')->move('fotoOutput/', $request->file('foto3')->getClientOriginalName());
            $student->foto3 = $request->file('foto3')->getClientOriginalName();
            $input["foto3"] = $request->file('foto3')->getClientOriginalName();
            $student->save();
        } else {
            $input["foto3"] = $student->foto3;
        }

        if ($request->hasFile('foto_mhs')) {
            $request->file('foto_mhs')->move('fotoOutput/', $request->file('foto_mhs')->getClientOriginalName());
            $student->foto_mhs = $request->file('foto_mhs')->getClientOriginalName();
            $input["foto_mhs"] = $request->file('foto_mhs')->getClientOriginalName();
            $student->save();
        } else {
            $input["foto_mhs"] = $student->foto_mhs;
        }
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');
    }
}