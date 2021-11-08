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
        <div class="m-8 w-full p-4 bg-gray-100 border border-gray-100 rounded-xl">

            <div class=" flex flex-row justify-around  md:grid md:grid-cols-2 md:gap-6 ">
                <form action="/addCourse" method="POST" class=" border rounded-xl p-2 max-h-60 bg-gray-50 ">
                @csrf
                    <h1 class="mb-6 font-bold text-xl border-b-2 border-yellow-500 leading-loose">إضافة دورة تعليمية</h1>
                    <label for="courseTitle" class="pt-4 pb-2 px-2"> اسم الدورة
                        <input type="text" name="courseTitle" class="h-8 w-2/3  md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400">
                    </label>
                    <div class="flex justify-around  py-12">
                        <button class="btn border-2 bg-gray-100 border-yellow-500 h-12 w-full md:w-1/2 rounded-xl text-yellow-900 hover:bg-yellow-500 hover:text-white transition ease-out duration-500 " type="submit">إضافة</button>
                    </div>
                </form>
                <div class="border rounded-xl h-auto p-2 bg-gray-50">
                    <h1 class="mb-6 font-bold text-xl border-b-2 border-yellow-500 leading-loose">الدورات المضافة</h1>
                    @foreach($courses as $course)
                    <div class="flex flex-row justify-between p-2 border-b">
                    <p> {{ $course->course_title }} </p>
                    <form action="/addCourses/{{$course->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn border border-red-400 rounded-xl px-2 text-sm text-red-500 hover:bg-red-300 hover:text-gray-800">حذف</button>
                    </form>
                    </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>

@endsection