<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Student $student)
    {
        return view('students/create', compact('Student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        $student = new Student;
        $student->nama = $request->nama;
        $student->npm = $request->npm;
        $student->email = $request->email;
        $student->jurusan = $request->jurusan;

        $student->save();


        return redirect('/students')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // $students = \App\student::find($id);
        // $students = student::all();
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        Student::where('id', $student->id)
        ->update ([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);
        return redirect('/students')->with('status', 'Data Berhasil Di Ubah');
        // $students = \App\student::find($id);
        // $students->update($request->all());
        // return redirect('/students')->with('status', 'Data Berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $students = \App\student::find($id);
        $students->delete();
        return redirect('/students')->with('status', 'Data Berhasil Dihapus');
    }

    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        return redirect('/students')->with('status', 'Data Berhasil Dihapus');
    }
}
