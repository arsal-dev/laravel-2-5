<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::get();

        dd($student);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return "<h1>create page</h1>";

        Student::create([
            'name' => 'bilal',
            'email' => 'bilal@email.com',
            'address' => 'bilal address',
            'phone' => '023165468',
        ]);

        return 'student added to the database';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $studnet = Student::where('id', $id)->select('name', 'email')->get();

        dd($studnet->all('name'));

        // Student::where('id', $id)->update([
        //     'name' => 'bilal updated',
        // ]);

        // return 'student updated';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        Student::destroy($id);
        // Student::where('id', $id)->delete();
        return 'student deleted';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
