<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::all();

	//Returns form for adding a student as well as an array of all students currently in the database, if you want to display them.
        return view('view goes here', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('joel.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validations same as fees controller.
        // $validation = $request->validate([
            // 'fullname' => 'required|string|max:255',
            // 'student_number' => 'required|integer|unique:students',
		//unique:students checks to make sure that student doesnt exist, otherwise it brings an error, You can remove it if you want.
        //     'dob' => 'required|date'
        // ]);
        $data = $request->all();
        $student = new Student;
        $student->student_number = $data['student_number'];
        $student->fullname = $data['fullname'];
        $student->date_of_birth = $data['dob'];
        $student->address = $data['address'];

        $student->save();
echo "Record Added Successfully!</br></br>";
     
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($student_n)
    {
        //
        $student = Student::findOrFail($student_n);

        $student['total'] = 0;

        if ($student->feePayments->count() != 0) {
            // return $student;
            // $fees = $student->feePayments;

            // return $fees;
            // return $this->totalFees($student);

            $student['total'] = $this->totalFees($student);
        }

        // return view plus a student array containing student details, fee total, and fee payments for that student.
	
        return view('view to display specific student fees plus total', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

	//function to get total fees per student.
    public function totalFees($student) {

        $fees = Student::find($student)->first()->feePayments->sum('amount');

        return $fees;
    }
}
