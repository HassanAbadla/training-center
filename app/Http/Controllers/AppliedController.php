<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Applied;

class AppliedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexapi() {
        
        $students = Applied::all();
        
        return Response()->json($students);
    }


    public function index()
    {
        return view('/students', [
            'students'=> $students = Applied::all(),
            'courses' => $course = Course::all()
        ]);
    }

    
    // Show Courses in selection in Signup form
    public function courseSelect()
    {
        return view('applied', [
            'courses' => $course = Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Applied();

        $student->name = request('sName');
        $student->mobile = request('mobile');
        $student->course_id = request('courseId');
        $student->branch = request('branch');

        $student->save();
        return redirect('/success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Applied::find($id);
        // return view('dashboard.studinfo')->with('students', $students);

        return view('dashboard.studinfo', [
            'students'=> $students = Applied::findOrFail($id),
            'courses' => $course = Course::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $student = Applied::findOrFail($id);

        $student->name = request('sName');
        $student->mobile = request('mobile');
        $student->course_id = request('courseId');
        $student->branch = request('branch');
        $student->payment = request('payment');
        $student->pay_date = request('pay-date');
        $student->status = request('status');

        $student->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Applied::findOrFail($id);
        $student->delete();
        return redirect('/students');
    }
}
