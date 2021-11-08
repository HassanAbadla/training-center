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

    <div class="px-8 py-8 flex justify-center w-full" >
        <div class="m-8 w-2/3 p-4 border border-gray-200 rounded-xl bg-gray-50">

            <div>
                <h1 class="mb-6 pb-2 font-bold text-xl border-b-2 border-yellow-500 leading-loose">إضافة موظف جديد</h1>
            </div>
            <div class="flex justify-center">
            <form action="/add-employees" method="POST" class="pt-6 px-4 bg-gray-50 flex flex-col w-2/3 ">
                @csrf
                    <label for="empName" class="py-2 px-2"> اسم الموظف
                        <input type="text" name="empName" class="h-8 w-3/5 float-left  md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400">
                    </label>
                    <label for="empMobile" class="py-2 px-2"> رقم الجوال
                        <input type="number" name="empMobile" class="h-8 w-3/5 float-left md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400">
                    </label>

                    <label for="empBranch" class="py-2 px-2"> الفرع
                    <select type="number" name="empBranch" class="h-8 w-3/5 float-left md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400">
                        <option value="القرارة">القرارة</option>
                        <option value="خانيونس">خانيونس</option>
                        <option value="رفح">رفح</option>
                    </select>
                    </label>
                    <label for="speciality" class="py-2 px-2">التخصص
                        <input type="text" name="speciality" class="h-8 w-3/5 float-left md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400">
                    </label>
                    <label for="job" class="py-2 px-2">الوظيفة
                        <input type="text" name="job" class="h-8 w-3/5 float-left md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400">
                    </label>
                    <div class="flex justify-center pt-12">
                        <button class="btn border-2 bg-gray-100 border-yellow-500 h-12 w-full md:w-1/2 rounded-xl text-yellow-900 hover:bg-yellow-500 hover:text-white transition ease-out duration-500 " type="submit">إضافة</button>
                    </div>
                </form>
                </div>
            <!-- </div> -->
        </div>
    </div>
</div>


@endsection