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
                <a href="#"><span>
                    <img src="img/logo.png" alt="" style="width: 100px;">
                </span></a>
            </div>
                <ul class="flex ml-5 ">
                    <a href="#"><li class=" btn hover:text-yellow-400 transition ease-out duration-500" >
                        تسجيل الدخول</li></a>
                    <a href="#" ><li class="btn hover:text-yellow-400 transition ease-out duration-500 mr-4 ">
                        تواصل معنا</li></a>
                </ul>
        </nav>
    </div>
    <!-- end nav -->

    <main class="h-1/2 justify-center bg-gray-800 p-10 flex-col md:grid md:grid-cols-2 gap-8 md:flex-row md:justify-around">
        <div>
            <img src="img/hero-image.jpg" alt="" class="rounded">
        </div>
        <div class="md:mr-12 mt-4">
            <header class="text-white">
                <h2 class="text-4xl mb-4 text-yellow-400">انضم معنا في أكبر تجمع تعليمي</h2>
                <p class="mb-2">إلتحق في إحدى الدورات التعليمية في اقرب فرع لك</p>
                <p>واستفد من المنح المقدمة من المعهد والجامعات العالمية</p>
                <p class="text-xl mt-4 mb-3 text-yellow-400" >دورات معتمدة من:</p>
                <p>وزارة التربية والتعليم</p>
                <p>جامعة بيرزيت</p>
            </header>

            <div class="flex justify-center mt-6 ">
                <a href="{{ url('/applied')}}" class=" btn text-yellow-300">
                <div class="btn text-yellow-900 md:text-yellow-400 border-solid border border-yellow-400 bg-yellow-400 md:bg-opacity-0 px-12 py-2 rounded-full hover:bg-yellow-400 hover:text-yellow-900 transition ease-out duration-500">التسجيل</div>
                </a>
            
            </div>
        </div>
    </main>

    <div class="mt-8 mx-12 grid md:grid-cols-3 gap-6 bg-gray-100">
            <div class="card bg-white border-2 border-yellow-400 rounded-xl pb-4 flex place-self-center">
                <img src="img/cert.png" alt="Certifiate" class="flex justify-center h-12 sm:h-32 mt-2 object-auto ">
                <div class="mt-6 mx-4">
                    <span class=" font-bold">منحة محادثة لغة انجليزية</span>
                    <p class="text-s text-gray-700">تعلم مصطلحات ومهارات المحادثة للانخراط في المجتمعات المتحثة باللغة</p>
                </div>
            </div>
            <div class="card bg-white border-2 border-yellow-400 rounded-xl pb-4 flex place-self-center">
                <img src="img/cert.png" alt="Certifiate" class="h-12 sm:h-32 mt-2 object-auto ">
                <div class="mt-6 mx-4">
                    <span class=" font-bold">منحة محادثة لغة انجليزية</span>
                    <p class="text-s text-gray-700">تعلم مصطلحات ومهارات المحادثة للانخراط في المجتمعات المتحثة باللغة</p>
                </div>
            </div>
            <div class="card bg-white border-2 border-yellow-400 rounded-xl pb-4 flex place-self-center">
                <img src="img/cert.png" alt="Certifiate" class="h-12 sm:h-32 mt-2 object-auto ">
                <div class="mt-6 mx-4">
                    <span class=" font-bold">منحة محادثة لغة انجليزية</span>
                    <p class="text-s text-gray-700">تعلم مصطلحات ومهارات المحادثة للانخراط في المجتمعات المتحثة باللغة</p>
                </div>
            </div>
    </div>
    <div class="bg-gray-100 px-12 py-12 mb-auto">
        
    <div class="border border-gray-300 px-2 py-2 flex-col justify-between md:grid md:grid-cols-2 gap-2 md:p-12 rounded-xl bg-white">
            <div class="m-4">
                <img src="img/hero-image.jpg" alt="Berziet Training Center" class="rounded w-120 md:pl-4 md:mb-10 ">
            </div>
            <div class="pr-4 h-full flex flex-col">
                <h2 class="text-3xl font-bold mb-4">من نحن!</h2>
                <p>معهد بيرزيت للغات، معهد أسس عام 1999 في مدينة خانيونس، وتم افتتاح.لأول مره في فلسطين ، منحة 90% مقدمة من معهد بيرزيت لدبلوم اللغة الإنجليزية (12 مستوى ) تشمل ( القراءة-الكتابة-الترجمة-التحدث-الإستماع) تشمل طلاب الضفة الغربية وقطاع غزة لأول مره في فلسطين ، منحة 90% مقدمة من معهد بيرزيت لدبلوم اللغة الإنجليزية (12 مستوى ) تشمل ( القراءة-الكتابة-الترجمة-التحدث-الإستماع) تشمل طلاب الضفة الغربية وقطاع غزة .</p>
                <a href="#" class="flex justify-end pb-12 mt-auto place-content-end">
                <div class="btn text-gray-400 border border-gray-400 rounded-full px-6 hover:bg-gray-300 hover:text-gray-800 transition ease-out duration-500 hover:border-yellow-400">
                    اقرأ المزيد
                </div>
                </a>
            </div>
            <div class="m-4">
                <img src="img/hero-image.jpg" alt="Berziet Training Center" class="rounded w-120 md:pl-4 md:mb-10 ">
            </div>
            <div class="pr-4 h-full flex flex-col">
                <h2 class="text-3xl font-bold mb-4">من نحن!</h2>
                <p>معهد بيرزيت للغات، معهد أسس عام 1999 في مدينة خانيونس، وتم افتتاح.لأول مره في فلسطين ، منحة 90% مقدمة من معهد بيرزيت لدبلوم اللغة الإنجليزية (12 مستوى ) تشمل ( القراءة-الكتابة-الترجمة-التحدث-الإستماع) تشمل طلاب الضفة الغربية وقطاع غزة لأول مره في فلسطين ، منحة 90% مقدمة من معهد بيرزيت لدبلوم اللغة الإنجليزية (12 مستوى ) تشمل ( القراءة-الكتابة-الترجمة-التحدث-الإستماع) تشمل طلاب الضفة الغربية وقطاع غزة .</p>
                <a href="#" class="flex justify-end pb-12 mt-auto place-content-end">
                <div class="btn text-gray-400 border border-gray-400 rounded-full px-6 hover:bg-gray-300 hover:text-gray-800 transition ease-out duration-500 hover:border-yellow-400">
                    اقرأ المزيد
                </div>
                </a>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="bg-gray-900 h-auto p-6 flex-col justify-around md:grid md:grid-cols-2 gap-96">
        <div class="">
            <div class="px-6 py-4">
                <img src="img/logo.png" alt="مركز بيرزيت للتدريب" class="w-32" >
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
            <p class="text-gray-500 mt-12">جميع الحقوق محفوظة @ حسن العبادلة</p>
        </div>
        

    </div>
</body>
</html>