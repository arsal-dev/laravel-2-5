<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::withTrashed()->paginate(10);
        return view('teacher.all', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:teachers',
            'phone' => 'required|numeric',
            'address' => 'required',
        ]);

        Teacher::create($validated_data);

        return redirect()->route('teacher.index')->with('success', 'data saved into the databse');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('teacher.edit', ['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher_id = $teacher->id;

        $validated_data = $request->validate([
            'name' => 'required',
            'email' => "required|email|unique:teachers,email,$teacher_id",
            'phone' => 'required|numeric',
            'address' => 'required'
        ]);

        Teacher::where('id', $teacher->id)->update($validated_data);

        return redirect()->route('teacher.index')->with('success', 'data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        Teacher::destroy($teacher->id);

        return redirect()->route('teacher.index')->with('success', 'teacher deleted successfully');
    }
}
