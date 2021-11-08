<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Applied;
use App\Models\Employee;


class DashboardController extends Controller
{

    public function teachersInfo(Request $request)
    {
        $teachers = Employee::all();
        $appCount = Applied::all()->count();
        $empCount = Employee::all()->count();
        $actCount = Applied::all()->where('status','=', 'نشط')->count();
        $inactCount = Applied::all()->where('status','!=', 'نشط')->count();
        $Courses = Course::all();
        $appCourse = Applied::all();
        $inactive = Applied::all()->where('status','!=', 'نشط');

        $lists = [];
        foreach($Courses as $Course){
            $title = $Course->course_title;
            $id = $Course->id;
            $count = Applied::all()->where('course_id', $id )->count();
            $item = [
                "id" => $id,
                "title" => $title,
                "count" => $count
            ];
            array_push($lists, $item);
            
        }

        $teachersList = [];
        foreach ($teachers as $teacher) {
            $id = $teacher->id;
            $name = $teacher->Emp_name;
            $mobile = $teacher->Emp_mobile;

            $teaItem = [
                'id' =>$id,
                'name' => $name,
                'mobile' => $mobile
            ];
            array_push($teachersList, $teaItem);
        }
        

        return view('dashboard.mainboard', [
            'teachers'=> $teachersList,
            'appCount' => $appCount,
            'empCount' => $empCount,
            'actCount' => $actCount,
            'inactCount' => $inactCount,
            'Courses' => $lists,
            'appCourse' => $appCourse,
            'inactives' => $inactive
        ]);
    }

//---------------------//
    public function edit($id)
    {
        $inactives = Applied::find($id);
        // return view('dashboard.studinfo')->with('students', $students);

        return view('dashboard.studinfo', [
            'inactives'=> $inactives = Applied::findOrFail($id)
            // 'courses' => $course = Course::all()
        ]);
    }

}



