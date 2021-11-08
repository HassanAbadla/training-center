@extends('inclodes.layout') 
@section('content')

<div class="container mx-auto md:p-16 p-4 " >
        <div class="flex flex-col-reverse justify-between content-center md:grid md:grid-cols-2 gap-2  bg-yellow-300 h-1/2 rounded-lg ">
            
            <form action="/success" method="POST" class="flex flex-col p-4">
            @csrf
                <h1 class="mb-6 font-bold text-xl border-b border-yellow-500 leading-loose">تسجيل طالب جديد</h1>
                <label for="sName" class="pt-4 pb-2 text-sm md:text-xs">الاسم رباعي
                    <input type="text" name="sName" class="h-8 w-2/3 md:mr-6 md:h-8 w-3/4 text-sm rounded-lg px-2 focus:outline-none focus:ring focus:border-yellow-400">
                </label>
                <label for="mobile" class="pt-4 pb-2 text-sm md:text-sm"> رقم الجوال 
                    <input type="number" name="mobile" class="h-8 w-2/3  md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none focus:ring focus:border-yellow-400">
                </label>
                
                <label for="course" class="pt-4 pb-2 text-sm md:text-sm"> اختر الدورة 
                    <select type="number" name="courseId" class="h-8 w-2/3  md:mr-6 md:h-8 w-3/4  rounded-lg px-2 focus:outline-none     focus:ring focus:border-yellow-400">
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->course_title }}</option>
                    @endforeach
                    </select>
                </label>
                
                <div class="pt-4 pb-2 flex flex-col ml-6">
                     <p class="font-bold pb-2">الفرع الأقرب لك</p>
                     <label class="inline-flex items-center mb-4 bg-yellow-200 p-2 rounded-xl">
                        <input type="radio" class="form-radio" name="branch" value="خانيونس">
                        <span class="mr-2 text-xs md:text-sm">مقر خانيونس : خانيونس - نهاية شارع السيقلي - مقابل ستوديو ضياء - عمارة البطة - الطابق3 / جوال : 0594341112</span>
                      </label>
                     <label class="inline-flex items-center mb-4 bg-yellow-200 p-2 rounded-xl">
                        <input type="radio" class="form-radio" name="branch" value="رفح">
                        <span class="mr-2 text-xs md:text-sm">مقر رفح : رفح - الكراج الشرقي - عمارة قشطة - فوق مزاج - الطابق الرابع (متوفر مصعد) / جوال : 0597909991</span>
                      </label>
                     <label class="inline-flex items-center mb-4 bg-yellow-200 p-2 rounded-xl">
                        <input type="radio" class="form-radio" name="branch" value="القرارة">
                        <span class="mr-2 text-xs md:text-sm">مقر القرارة : القرارة - شارع السكة - بجوار مسجد السلام - عمارة المختار - الطابق الأرضي / جوال : 0595677774</span>
                      </label>
                </div>
                    <div class="flex justify-around  py-12">
                        <button class="btn border-2 bg-gray-100 border-yellow-500 h-12 w-full md:w-1/2 rounded-xl text-yellow-900 hover:bg-yellow-500 hover:text-white transition ease-out duration-500 ">تسجيل</button>
                    </div>
            </form>
        <div class=" place-content-center bg-yellow-400 h-full">
            <img src="/img/reg-img.jpg" alt="" class="w-full md:float-left self-cente object-cover">
        </div>
        </div>
        
    </div>

@endsection