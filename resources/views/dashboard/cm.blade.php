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
        <div class="w-full p-4 border border-gray-200 rounded-xl bg-gray-50">

            <div class=" flex flex-row justify-between mb-6 pb-2 pt-2 border-b-2 border-yellow-500 leading-loose ">
                <div>
                <h1 class="font-bold text-xl">إدارة المحتوى</h1>
                </div>
                <div class="pl-8 flex flex-row justify-between">
                    <button class="btn border border-yellow-400 bg-yellow-400 rounded-lg px-2 py-2 text-sm hover:bg-yellow-300 hover:text-gray-800 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2 bg-yellow-200 rounded-lg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" /></svg>مقال جديد</button>
                </div>
            </div>
            <div class="flex flex-row justify-around p-2 border-b-2 w-full h-16 items-center hover:bg-gray-100 hover:border-none transistion duration-200 ease-in-out transform  ">
                        <p class="text-right w-full border-l">عنوان المقال</p>
                        <p class="text-center w-1/6 border-l ">التاريخ</p>
                        <a href="#" class="text-center text-sm w-24 border-l bg-blue-300 p-2 ml-1 rounded-lg hover:bg-blue-400 flex ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>

                        تعديل</a>
                        <a href="#" class="text-center text-sm w-24 bg-red-300 p-2 ml-1 rounded-lg hover:bg-red-400 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        
                        حذف</a>
                    </div>
                    <div class="flex flex-row justify-around p-2 border-b-2 w-full h-16 items-center hover:bg-gray-100 hover:border-none transistion duration-200 ease-in-out transform  ">
                        <p class="text-right w-full border-l">عنوان المقال</p>
                        <p class="text-center w-1/6 border-l ">التاريخ</p>
                        <a href="#" class="text-center text-sm w-24 border-l bg-blue-300 p-2 ml-1 rounded-lg hover:bg-blue-400 flex ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>

                        تعديل</a>
                        <a href="#" class="text-center text-sm w-24 bg-red-300 p-2 ml-1 rounded-lg hover:bg-red-400 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        
                        حذف</a>
                    </div>
                    <div class="flex flex-row justify-around p-2 border-b-2 w-full h-16 items-center hover:bg-gray-100 hover:border-none transistion duration-200 ease-in-out transform  ">
                        <p class="text-right w-full border-l">عنوان المقال</p>
                        <p class="text-center w-1/6 border-l ">التاريخ</p>
                        <a href="#" class="text-center text-sm w-24 border-l bg-blue-300 p-2 ml-1 rounded-lg hover:bg-blue-400 flex ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>

                        تعديل</a>
                        <a href="#" class="text-center text-sm w-24 bg-red-300 p-2 ml-1 rounded-lg hover:bg-red-400 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        
                        حذف</a>
                    </div>
                    
                
                </div>
            <!-- </div> -->
        </div>
    </div>
</div>


@endsection