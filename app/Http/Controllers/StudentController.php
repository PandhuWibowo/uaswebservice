<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Transformers\StudentTransformer;

class StudentController extends BaseController
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

    public function show()
    {
        $st = Student::all();

        return $this->response->collection($st, new StudentTransformer);
    }

    public function showDetails($id)
    {
        $st = Student::find($id);

        return $this->response->item($st, new StudentTransformer);
    }

    public function store(Request $request)
    {
        $st = Student::create($request->all());

        return response()->json($st, 201);
    }

    public function update($id, Request $request)
    {
        $st = Student::findOrFail($id);
        $st->update($request->all());

        return response()->json($st, 200);
    }

    public function delete($id)
    {
        Student::findOrFail($id)->delete();
        return response('Students has been success deleted', 200);
    }
}
