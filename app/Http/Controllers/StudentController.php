<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return StudentResource::collection(Student::paginate(10));
        // return $students = Student::paginate(15)->first();
        $students = DB::table('students')->get();
        return json_encode($students);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $student = array();
        $student['name'] = $request->name;
        $student['email'] = $request->email;
        $student['phone'] = $request->phone;
        $student['gender'] = $request->gender;
        DB::table('students')->insert($student);
        // $student = Student::create($request->validated());
        return $student;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DB::table('students')->where('id',$id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStudentRequest $request,Student $student)
    {
        // $student = array();
        // $student['name'] = $request->name;
        // $student['email'] = $request->email;
        // $student['phone'] = $request->phone;
        // $student['gender'] = $request->gender;
        // DB::table('students')->whwre('id',$request->id)->update($student);
        $student->update($request->validated());
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id',$id)->delete();
        return response()->json(['message' => 'data deleted'],200);
    }
}
