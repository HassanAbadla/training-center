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

    <div class="px-8 py-8 flex justify-center w-full" >
        <div class="w-2/3 p-4 border border-gray-200 rounded-xl bg-gray-50">
        
            <div class="">
                <h1 class=" mb-6 pb-2 font-bold text-xl border-b-2 border-yellow-500 leading-loose">بيانات الطالب</h1>
            </div>

            <div class="flex justify-center">

            <form action="/updateinfo/{{$students->id}}" method="POST" class="pt-6 px-4 bg-gray-50 flex flex-col w-2/3 jutify-center">
                @csrf
                {{ method_field('PUT') }}
                    <label for="sName" class="py-2 px-2"> اسم الطالب
                        <input type="text" name="sName" class="h-8 w-3/5 float-left  md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400" value="{{ $students->name }}">
                    </label>
                    <label for="mobile" class="py-2 px-2"> رقم الجوال
                        <input type="number" name="mobile" class="h-8 w-3/5 float-left md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400" value="{{ $students->mobile }}">
                    </label>
                    <label for="course" class="py-2 px-2">الدورة 
                    <select type="text" name="courseId" class="h-8 w-3/5 float-left md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400">
                        <option value="{{ $students->course_id }}">{{ $students->course->course_title }}</option>
                        @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->course_title }}</option>
                        @endforeach
                    </select>
                </label>
                    <label for="branch" class="py-2 px-2"> الفرع
                    <select type="text" name="branch" class="h-8 w-3/5 float-left md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400">
                        <option value="{{ $students->branch }}">{{ $students->branch }}</option>
                        <option value="خانيونس">خانيونس</option>
                        <option value="رفح">رفح</option>
                        <option value="القرارة">القرارة</option>
                    </select>
                    </label>
                    <label for="payment" class="py-2 px-2">الدفعة
                        <input type="number" name="payment" class="h-8 w-3/5 float-left md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400" value="{{ $students->payment }}">
                    </label>
                    <label for="job" class="py-2 px-2">تاريخ الدفعة
                        <input type="date" name="pay-date" class="h-8 w-3/5 float-left md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400" value="{{ $students->pay_date }}">
                    </label>

                    <label for="branch" class="py-2 px-2"> الحالة
                    <select type="text" name="status" class="h-8 w-3/5 float-left md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none ring-1 ring-yellow-200 focus:ring-2 focus:ring-yellow-400">
                        <option value="{{ $students->status }}">{{ $students->status }}</option>
                        <option value="نشط">نشط</option>
                        <option value="غير نشط">غير نشط</option>
                    </select>
                    </label>

                    <div class="flex flex-col pt-12">
                        <button class="btn border-2 bg-gray-100 border-yellow-500 h-12 w-full md:w-full rounded-xl text-yellow-900 hover:bg-yellow-500 hover:text-white transition ease-out duration-500 "  type="submit">حفظ</button>
                    
                </form>

                <form class="w-full pt-8 " action="/deletestudent/{{ $students->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn border-2 bg-gray-100 border-red-500 h-12 w-full rounded-xl text-red-900 hover:bg-red-500 hover:text-white transition ease-out duration-500 ">حذف الطالب</button>
                </form>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
</div>


@endsection