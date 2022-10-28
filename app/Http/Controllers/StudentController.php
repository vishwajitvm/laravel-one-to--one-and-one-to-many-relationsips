<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all() ;
        return view('student.index' , compact('students')) ;
    }

    public function create() {
        return view('student.create') ;
    }

    //store
    public function store(Request $request) {
        $student = Student::create([
            'fullname' => $request->fullname ,
            'email' => $request->email ,
            'phone' => $request->phone ,
        ]) ;
        //HAS ONE RELATION with [Student.id == student_detail.student_id]
        $student->studentDetail()->create([
            // 'student_id' => $request->student_id ,
            'alter_phone' => $request->alter_phone ,
            'course' => $request->course ,
            'roll_no' => $request->roll_no ,    
        ]);

        return redirect('students')->with('message' , 'Student & Student detail created successfully') ;
    }

    //EDIT
    public function edit(student $student) {
        return view('student.edit' , compact('student')) ;
    }

    //UPDATE
    public function update(student $student , Request $request) {
        $student->update([
            'fullname' => $request->fullname ,
            'email' => $request->email ,
            'phone' => $request->phone ,
        ]) ;

        $student->studentDetail()->update([
            // 'student_id' => $request->student_id ,
            'alter_phone' => $request->alter_phone ,
            'course' => $request->course ,
            'roll_no' => $request->roll_no ,    
        ]);

        return redirect('students')->with('message' , 'Student & Student detail updated successfully') ;
    }

    //DESTROY
    public function destroy(Student $student) {
        $student->delete() ;
        return redirect('students')->with('message' , "$student->fullname detail Deleted successfully") ;

    }
}
