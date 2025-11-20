<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersAdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::with('subject')->paginate(30);
        $subjects = Subject::all();

        return view('admin.teachers.table', [
            'teachers' => $teachers,
            'subjects' => $subjects
        ]);
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
            'subject_id' => 'required|integer|exists:subjects,id',
            'phone' => 'required|string|min:8|max:20',
            'email' => 'required|email|unique:teachers,email',
            'address' => 'nullable|string|max:255',
        ]);

        Teacher::create($validated);

        return redirect()->back()->with('success', 'Data saved !');
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
        $teachers = Teacher::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject_id' => 'required|integer|exists:subjects,id',
            'phone' => 'required|string|min:8|max:20',
            'email' => 'required|email|unique:teachers,email,' . $id,
            'address' => 'nullable|string|max:255',
        ]);

        $teachers->update($validated);

        return redirect()->back()->with('success', 'Teacher updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teachers = Teacher::findOrFail($id);
        $teachers->delete();

        return redirect()->back()->with('success', 'Teacher deleted successfully!');
    }
}
