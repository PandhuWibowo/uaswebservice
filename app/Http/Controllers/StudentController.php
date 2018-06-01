<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
// use App\Http\Models\Category;
use App\Http\Models\Student;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function show(){
        try { 
            $st = Student::all();
            return response()->json($st, 200);
        } catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex->getMessage());
        }
    }

    public function detailshow($id){
        return response()->json(Student::find($id));
    }

    public function create(Request $request)
    {
        $st = Student::create($request->all());

        return response()->json($st, 201);
    }

    public function update(Request $request,$id)
    {
        $st = Student::findOrFail($id);
        $st->update($request->all());
        return response()->json($st, 200);
    }

    public function delete($id)
    {
        Student::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

}
