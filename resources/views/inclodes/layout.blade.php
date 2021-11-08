<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مركز بيرزيت للتدريب</title>
    <link rel="stylesheet" href="../css/tailwind.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script src="../js/ar.js"></script>
</head>
<body dir="rtl" class="Tajawal bg-gray-100" >
    <!-- start nav -->
    <div class="  px-4 py-8 bg-gray-900 text-white">

        <nav class="flex justify-between">
            <div class="">
                <a href="/"><span>
                    <img src="/img/logo.png" alt="" style="width: 100px;">
                </span></a>
            </div>
                <ul class="flex ml-5 items-center">
                    <a href="#"><li class="text-sm btn hover:text-yellow-400 transition ease-out duration-500" >
                        تسجيل الدخول</li></a>
                    <a href="#" ><li class="text-sm btn hover:text-yellow-400 transition ease-out duration-500 mr-4 ">
                        تواصل معنا</li></a>
                </ul>
        </nav>

    </div>
    <!-- end nav -->

    @yield('content')

    <div class="bg-gray-900 h-auto p-6 flex-col justify-around md:grid md:grid-cols-2 gap-96">
        <div class="">
            <div class="px-6 py-4">
                <img src="/img/logo.png" alt="مركز بيرزيت للتدريب" class="w-32" >
            </div>
            <div class="px-12 text-gray-500">
                <ul class="mt-2">
                    <li >
                        <h4 class="font-bold">خانيونس</h4>
                        <span>شارع المجايدة، عمارة البطة، الطابق الرابع</span>
                    </li>
                    <li>
                        <h4 class="font-bold">القرارة</h4>
                        <span>شارع السكة، عمارة المختار</span>
                    </li>
                    <li>
                        <h4 class="font-bold">رفح</h4>
                        <span>دوار العودة، عمارة جوال، الطابق الثاني</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-gray-300 pt-16 pr-8">
            <h1 class="font-bold text-yellow-400 ">روابط</h1>
            <div class="pt-4 px-4">
                <ul class="">
                    <li class="hover:text-yellow-400">
                        <a href="#" class="no-underline hover:underline" >عن المعهد</a>
                    </li>
                    <li class="hover:text-yellow-400">
                        <a href="#" class="no-underline hover:underline">وظائف</a>
                    </li>
                    <li class="hover:text-yellow-400">
                        <a href="#" class="no-underline hover:underline">تواصل معنا</a>
                    </li>
                </ul>
            </div>
            <p class="text-gray-400 mt-12 font-bold">All rights reserved © Hassan Alabadla 2021 | جميع الحقوق محفوظة @ حسن العبادلة</p>
        </div>
        

    </div>
    
</body>
<script src="../js/main.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

    <!-- <script src="../js/ckeditor.js"></script> -->
    @yield('scripts')
</html>