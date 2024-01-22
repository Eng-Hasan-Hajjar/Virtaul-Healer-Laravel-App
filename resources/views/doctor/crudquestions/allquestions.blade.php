
<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="font-size :32px ;color:aqua;text-align:right">
            {{ __('طبيبك الافتراضي') }}
        </h1>

    </x-slot>

<body>
    <div class="center-container">
        <div class="links-container">
            <a href="questionsBack"> أسئلة الظهر</a>
            <a href="questionsBrain"> أسئلة الدماغ</a>
            <a href="questionsEar"> أسئلةالأذن</a>

        </div>
    </div>
</body>


</x-app-layout>

<style>

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #3e3678; /* لون الخلفية يمكن تعديله حسب الاحتياج */
}

.center-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 50vh; /* يجعل العرض الكلي للصفحة يأخذ 100% من ارتفاع الشاشة */
}

.links-container {
    text-align: center;
}

.links-container a {
    display: inline-block;
    margin: 20px;
    padding: 10px 20px;
    text-decoration: none;
    color: #333; /* لون الروابط */
    background-color: #ddd; /* لون الخلفية للروابط */
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.links-container a:hover {
    background-color: #555; /* تغيير لون الخلفية عند التحويم */
    color: #fff; /* تغيير لون النص عند التحويم */
}

</style>
