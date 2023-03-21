<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function all(){
        $students = Student::get();
        dd($students);
    }
    public function delete($id){
        Student::where('id', $id)->delete();
    }
    public function trashed(){
        return dd(Student::onlyTrashed()->latest()->get());
    }
    public function restore($id){
       Student::where('id', $id)->restore();
    }
    public function force_delete($id){
        Student::where('id', $id)->forceDelete();
    }
}
