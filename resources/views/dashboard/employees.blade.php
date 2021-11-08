@extends('inclodes.layout')
@section('content')

<div class="flex flex-row min-h-screen h-auto">
        <!-- Start Side Bar -->
    <div class="h-auto bg-gray-200 w-1/6 text-black">
        <div class="flex flex-col">
            <a href="{{ url('/dashboard')}}">
                <div class="py-4 px-2 text-center hover:bg-yellow-400 transition-ease-out duration-300">الرئيسية</div>
            </a>
            <a href="{{ url('/students')}}">
                <div class="py-4 px-2 text-center hover:bg-yellow-400 transition-ease-out duration-300">جميع المتقدمين</div>
            </a>
            <a href="{{ url('/addCourse')}}">
                <div class="py-4 px-2 text-center hover:bg-yellow-400 transition-ease-out duration-300">الدورات</div>
            </a>
            <a href="{{ url('/employees')}}">
                <div class="py-4 px-2 text-center hover:bg-yellow-400 transition-ease-out duration-300">الموظفين</div>
            </a>
            <a href="{{ url('/content')}}">
                <div class="py-4 px-2 text-center hover:bg-yellow-400 transition-ease-out duration-300">إدارة الصفحة الرئيسية</div>
            </a>
        </div>
    </div>
    <!-- End Side Bar -->

    <div class="px-8 py-8 flex flex-col w-full" >
            <a href="/add-employees" class="flex justify-start py-6 px-4 border-b">
                <button class="flex  items-center pr-2  btn border-2 bg-gray-100 border-yellow-500 h-12 w-1/3 md:w-44 rounded-xl text-yellow-900 hover:bg-yellow-500 hover:text-white transition ease-out duration-500 " type="submit">
                
                <svg class="w-8 h-8 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                
                 إضافة موظف</button>
            </a>
        <div class="py-4 text-lg font-bold ">الموظفون</div>

        <div class="bg-gray-50 border border-gray-100 rounded-xl p-6 mt-2">
            <table class="w-full table-auto border-collapse ">
                <thead class="bg-yellow-300 ">
                    <th class="border border-gray-300 py-2">اسم الموظف</th>
                    <th class="border border-gray-300 py-2">رقم الجوال</th>
                    <th class="border border-gray-300 py-2">الفرع</th>
                    <th class="border border-gray-300 py-2">التخصص</th>
                    <th class="border border-gray-300 py-2">الوظيفة</th>
                    <th class="border border-gray-300 py-2">...</th>
                </thead>
                <tbody class="">
                    @foreach($employees as $employee)
                    <tr>
                        <td class="border border-gray-300 pr-2">{{ $employee->Emp_name }}</td>
                        <td class="border border-gray-300 pr-2 text-center">{{ $employee->Emp_mobile }}</td>
                        <td class="border border-gray-300 pr-2 text-center">{{ $employee->Emp_branch }}</td>
                        <td class="border border-gray-300 pr-2 text-center">{{ $employee->speciality }}</td>
                        <td class="border border-gray-300 pr-2 text-center">{{ $employee->job }}</td>
                        <td class="border border-gray-300 py-2 px-4 w-1/6 text-center">
                            <a href="/empEdit/{{ $employee->id }}"><div class="px-4 w-auto border border-green-600 text-sm rounded-full hover:bg-green-300 transition-ease-out duration-300 text-center">تعديل</div>
                        </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>


@endsection