<?php

namespace App\Http\Controllers\admin;

use App\Models\Student;
use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentsAdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = Student::with('classroom')
            ->search($request->input('search'))
            ->paginate(9)
            ->withQueryString();

        $classrooms = Classroom::all();

        return view('admin.students.table', compact('students', 'classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|string|in:Male,Female',
            'classroom_id' => 'required|integer|exists:classrooms,id',
            'email' => 'required|email|unique:students,email',
            'address' => 'nullable|string|max:255',
        ]);

        Student::create($validated);

        return redirect()->back()->with('success', 'Data berhasil disimpan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $students = Student::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|string|in:Male,Female',
            'classroom_id' => 'required|integer|exists:classrooms,id',
            'email' => 'required|email|unique:students,email,' . $id,
            'address' => 'nullable|string|max:255',
        ]);

        $students->update($validated);

        return redirect()->back()->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::findOrFail($id);
        $students->delete();

        return redirect()->back()->with('success', 'Student deleted successfully!');
    }
}
