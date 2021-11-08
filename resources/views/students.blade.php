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
        </div>
    </div>
    <!-- End Side Bar -->

    <div class="px-8 py-8 flex flex-col w-full" >
    
        <div class="mb-8 py-4 px-4 border border-gray-200 rounded-xl bg-gray-50 flex ">

            <div class=" px-2 my-1 flex justify-around">
                <div class="px-4 -m-2 border-l ">
                    <svg class="w-8 h-8" fill="none" stroke="orange" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                    <h1 class="px-6">ابحث عن طالب</h1>
            </div>
            <div class=" w-1/2 float-right">
                <input type="text" name="search" class="h-8 w-full rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400" id="search" placeholder="بحث...">
            </div>
        </div>
        

        <div class="py-2 px-2 text-lg font-bold ">طلبات التسجيل</div>

        <div class="bg-gray-50 border border-gray-200 rounded-xl p-6 mt-2">
            <table class="w-full table-auto border-collapse ">
                <thead class="bg-yellow-300 ">
                    <th class="border border-gray-300 py-2">اسم الطالب</th>
                    <th class="border border-gray-300 py-2">رقم الجوال</th>
                    <th class="border border-gray-300 py-2">المنحة</th>
                    <th class="border border-gray-300 py-2">الفرع</th>
                    <th class="border border-gray-300 py-2">رسوم الدورة</th>
                    <th class="border border-gray-300 py-2">تاريخ التحصيل</th>
                    <th class="border border-gray-300 py-2">الحالة</th>
                    <th class="border border-gray-300 py-2">...</th>
                </thead>
                <tbody class="">
                    @foreach($students as $student)
                    <tr>

                        <td class="border border-gray-300 pr-2">{{ $student->name }}</td>
                        <td class="border border-gray-300 pr-2 text-center">{{ $student->mobile }}</td>
                        <td class="border border-gray-300 pr-2 text-center">{{ $student->course->course_title }}</td>
                        <td class="border border-gray-300 pr-2 text-center">{{ $student->branch }}</td>
                        <td class="border border-gray-300 pr-2 text-center">{{ $student->payment }}</td>
                        <td class="border border-gray-300 pr-2 text-center">{{ $student->pay_date }}</td>
                        <td class="border border-gray-300 pr-2 text-center">{{ $student->status }}</td>

                        <td class="border border-gray-300 pr-2 text-center py-2 ">
                            <a href="/studinfo/{{ $student->id }}" type="submit" class="px-2 border border-green-600 text-sm rounded-full hover:bg-green-300 transition-ease-out duration-300" id="confirm-btn">تعديل</a>
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