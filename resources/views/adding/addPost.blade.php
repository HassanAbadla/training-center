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
                    <h1 class="font-bold text-xl">إضافة مقال</h1>
                </div>
                <div class="pl-8 flex flex-row justify-between">
                    <button class="btn border border-yellow-400 bg-yellow-400 rounded-lg px-2 py-2 text-sm hover:bg-yellow-300 hover:text-gray-800 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                    </svg>نشر</button>

                    <button class="btn border border-gray-400 bg-gray-300 rounded-lg px-2 mr-2 py-2 text-sm hover:bg-gray-200 hover:text-gray-800 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>إلغاء</button>
                </div>
            </div>

            <div class="flex flex-col py-4 px-8 h-full">
                <label for="title" class="py-2">العنوان:</label>
                <input type="text" class="h-8 w-full px-2  rounded-lg focus:outline-none ring-1 ring-yellow-200 focus:ring-2 mb-2">
                <div class="flex flex-col justify-between w-full bg-white border border-yellow-200 rounded-lg p-2 my-2">
                    <label for="image" class="py-2 mb-2">صورة مصغرة :</label>
                    <input type="file" class=" w-full px-2  rounded-lg ">
                </div>
                <label for="title" class="py-2">المقال:</label>
                <textarea id="editor"  class=" w-full px-2  rounded-lg focus:outline-none ring-1 ring-yellow-200 focus:ring-2">
                </textarea>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<style>
.ck-editor__editable_inline {
    min-height: 400px;
}
.ck.ck-reset, .ck.ck-reset_all, .ck.ck-reset_all {
    direction: rtl;
}
.ck.ck-editor__editable_inline[dir=ltr] {
    text-align: right;
}
</style>

<script>

        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                
                language: {
                    // The UI will be in English.
                    ui: 'ar',

                    // But the content will be edited in Arabic.
                    content: 'ar'
                },
                toolbar: {
                    items: [
                        'heading',  'fontsize',
                        'fontfamily', 'fontsize', '|',
                        'alignment', '|',
                        'fontColor', 'fontBackgroundColor', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
                        'link', '|', 'image',
                        'outdent', 'indent', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'code', 'codeBlock', '|',
                        'insertTable', '|',
                        'uploadImage', 'blockQuote', '|',
                        'undo', 'redo'
                    ],
                }
            })
            .catch( error => {
                console.error( error );
            } );


        // ClassicEditor
        //     .create( document.querySelector( '#editor' ) )
        //     .catch( error => {
        //         console.error( error );
        //     } );
</script>
@endsection
