<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
   public function store(Request $request) {
        Student::insert($request->except('_token'));
        return view('contents.add-student');
   }

   public function index() {
       // mysqli
       $students = Student::get();
       return view('contents.student-list', compact('students'));
   }

   public function destroy($id) {
      Student::where('id', $id)->delete();
      return redirect()->back();
   }
}
