<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Student::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request -> validate([
            "name" => "required|string",
            "email" => "required|email|unique:students,email",
            "gender" => "required|in:male,female,other"
        ]);

        Student::create($data);

        return response()->json([
            "status" => true,
            "message" => "Student created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return response()->json([
            "status" => true,
            "message" => "Student Found",
            "data" => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {

        $request -> validate([
            "name" => "sometimes|string",
            "email" => "sometimes|email|unique:student,email" . $student->email,
            "gender" => "sometimes|in:male,female,other"
        ]);



        $student->update($request->all());

        return response()->json([
            "status" => true,
            "message" => "Student Updated Successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
