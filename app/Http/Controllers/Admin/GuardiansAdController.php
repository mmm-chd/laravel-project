<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardiansAdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guardians = Guardian::paginate(30);

        return view('admin.guardians.table', [
            'guardians' => $guardians
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
            'job' => 'required|string|max:255',
            'phone' => 'required|string|regex:/^[0-9+\-\s]+$/|min:8|max:20',
            'email' => 'required|email|unique:guardians,email',
            'address' => 'nullable|string|max:255',
        ]);

        Guardian::create($validated);

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
        $guardians = Guardian::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'phone' => 'required|string|regex:/^[0-9+\-\s]+$/|min:8|max:20',
            'email' => 'required|email|unique:guardians,email,' . $id,
            'address' => 'nullable|string|max:255',
        ]);

        $guardians->update($validated);

        return redirect()->back()->with('success', 'Guardian updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guardians = Guardian::findOrFail($id);
        $guardians->delete();

        return redirect()->back()->with('success', 'Guardian deleted successfully!');
    }
}
