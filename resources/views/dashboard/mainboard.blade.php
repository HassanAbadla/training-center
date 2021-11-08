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

    <div class="m-4 w-full p-2 bg-gray-100 border border-gray-100 rounded-xl ">

    <!-- Numbers Summary -->
        <div class=" flex flex-row justify-around w-full">

            <div class="flex flex-col justify-between bg-gray-50 border rounded-xl w-1/5 p-2 h-auto items-center shadow-lg cursor-default">

                <svg class="w-12 h-12" fill="none" stroke="gray" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>

                <div class="border-b-2 border-yellow-400 p-2 w-full">
                    <h1 class="font-bold text-center text-2xl text-yellow-600 tracking-wide">الطلبات</h1>
                </div>
                    <span class="p-2 font-semibold text-3xl text-gray-500 tracking-wide">{{ $appCount }}</span>
            </div>

            <div class="flex flex-col justify-between bg-gray-50 border rounded-xl w-1/5 p-2 h-auto items-center shadow-lg cursor-default">

            <svg class="w-12 h-12" fill="none" stroke="gray" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>

                <div class="border-b-2 border-yellow-400 p-2 w-full">
                    <h1 class="font-bold text-center text-2xl text-yellow-600 tracking-wide">المسجلين</h1>
                </div>
                    <span class="p-2 font-semibold text-3xl text-gray-500 tracking-wide">{{ $actCount }}</span>
            </div>

            <div class="flex flex-col justify-between bg-gray-50 border rounded-xl w-1/5 p-2 h-auto items-center shadow-lg cursor-default">

            <svg class="w-12 h-12" fill="none" stroke="gray" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7a4 4 0 11-8 0 4 4 0 018 0zM9 14a6 6 0 00-6 6v1h12v-1a6 6 0 00-6-6zM21 12h-6"></path></svg>

                <div class="border-b-2 border-yellow-400 p-2 w-full">
                    <h1 class="font-bold text-center text-2xl text-yellow-600 tracking-wide">غير مسجلين</h1>
                </div>
                    <span class="p-2 font-semibold text-3xl text-gray-500 tracking-wide">{{ $inactCount }}</span>
            </div>

            <div class="flex flex-col justify-between bg-gray-50 border rounded-xl w-1/5 p-2 h-auto items-center shadow-lg cursor-default">

            <svg class="w-12 h-12" fill="none" stroke="gray" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>

                <div class="border-b-2 border-yellow-400 p-2 w-full">
                    <h1 class="font-bold text-center text-2xl text-yellow-600 tracking-wide">الموظفين</h1>
                </div>
                    <span class="p-2 font-semibold text-3xl text-gray-500 tracking-wide">{{ $empCount }}</span>
            </div>
            
        </div>

        <!-- START SECTION 2 -->

        <div class="p-2 m-4 flex">
        <!-- RIGHT SECTION -->
            <div class="flex flex-col justify-between bg-gray-50 border rounded-xl w-1/2 p-2 m-2 h-full items-center shadow-lg">
                <div class="flex flex-row justify-around p-2 border-b-2 border-yellow-400 w-full items-center">
                    <h1 class="font-bold text-lg text-center w-1/2 border-l">الدورات</h1>
                    <h1 class="font-bold text-lg text-center  w-1/2 ">عدد الطلاب</h1>
                </div>
                @foreach($Courses as $Course)
                    <a href="/addCourse" class="flex flex-row justify-around p-2 border-b-2 w-full items-center hover:bg-gray-100 transistion duration-200 ease-in-out transform hover:scale-105">
                        <h1 class="text-center w-1/2 border-l" >{{ $Course['title'] }}</h1>
                        <h1 class="text-center w-1/2 ">{{ $Course['count'] }}</h1>
                    </a>
                @endforeach
            </div>

            <!-- left SECTION -->
            <div class="flex flex-col justify-between bg-gray-50 border rounded-xl w-1/2 p-2 m-2 h-full items-center shadow-lg">
                <div class="flex flex-row justify-around p-2 border-b-2 border-yellow-400 w-full items-center">
                    <h1 class="font-bold text-lg text-center w-1/2 border-l">الموظفون</h1>
                    <h1 class="font-bold text-lg text-center w-1/2 ">جوال</h1>
                </div>
                @foreach($teachers as $teacher)
                    <a href="/empEdit/{{ $teacher['id'] }}" class="flex flex-row justify-around p-2 border-b-2 w-full items-center hover:bg-gray-100 transistion duration-200 ease-in-out transform hover:scale-105">
                        <h1 class="text-center w-1/2 border-l">{{ $teacher['name'] }}</h1>
                        <h1 class="text-center w-1/2 ">{{ $teacher['mobile'] }}</h1>
                    </a>
                @endforeach
            </div>
        </div>

                    <!-- START SECTION 3 -->

        <div class="flex flex-col justify-between bg-gray-50 border rounded-xl px-2 py-4 mx-8  items-center shadow-lg">
            <div class="flex flex-col p-2 border-b-2 border-yellow-400 w-full items-center">
                <div class="w-full ">
                    <h1 class="font-bold text-lg">غير مسجلين</h1>
                </div>
            </div>
            @foreach($inactives as $inactive)
                <a href="/studinfo/{{ $inactive->id }}" class="flex flex-row justify-around p-2 border-b-2 w-full items-center hover:bg-gray-100 transistion duration-200 ease-in-out transform  hover:scale-105">
                        <p class="text-right w-1/2 border-l">{{ $inactive->name }}</p>
                        <p class="text-center w-1/2 border-l ">{{ $inactive->branch }}</p>
                        <p class="text-center w-1/2 border-l ">{{ $inactive->mobile }}</p>
                        <p class="text-center w-1/2  ">{{ $inactive->course->course_title }}</p>
                    </a>
            @endforeach
        </div>
    </div>
</div>

@endsection