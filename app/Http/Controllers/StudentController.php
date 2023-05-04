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


    public function create(): View
    {
        return view('students.create');
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
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');
    }
}
