<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('dashboard.employees', [
            'employees' => $employee = Employee::all()
        ]);
    }


    public function store(Request $request)
    {
        $employee = new Employee();

        $employee->Emp_name = request('empName');
        $employee->Emp_mobile = request('empMobile');
        $employee->Emp_branch = request('empBranch');
        $employee->speciality = request('speciality');
        $employee->job = request('job');

        $employee->save();

        return redirect('/add-employees');
    }

    // -----------//


    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        // return view('dashboard.studinfo')->with('students', $students);

        return view('dashboard.empEdit', [
            'employees'=> $employees = Employee::findOrFail($id),
            // 'courses' => $course = Course::all()
        ]);
    }


    //-------//


    public function update(Request $request, $id)
    {
        
        $employee = Employee::findOrFail($id);

        $employee->Emp_name = request('empName');
        $employee->Emp_mobile = request('empMobile');
        $employee->Emp_branch = request('empBranch');
        $employee->speciality = request('speciality');
        $employee->job = request('job');

        $employee->save();

        return redirect('/employees');
    }



    //--------------//


    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect('/employees');
    }
}
