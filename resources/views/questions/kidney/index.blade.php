<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="font-size :18px ;color:aqua;text-align:right">
            {{ __('طبيبك الافتراضي') }}
        </h2>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 style="font-size :32px ;color:aqua;text-align:right">   أجب من فضلك على الأسئلة التالية </h1>
                 </div>
            </div>
        </div>
    </div>


    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                <form method="post" action="{{ route('questions.submitKidney') }}">
                    @csrf

                    @foreach($questionsKidney as $question)
                        <div class="py-12">

                                    <p style="color:aqua;text-align:right">{{ $question->question }}</p>
                                    @if($question->answer_type == 'YesNo')
                                    <div style="float: right;">
                                        <label >
                                            <input type="radio" name="answer_{{ $question->id }}" value="Yes" required> لا
                                        </label>
                                        <label>
                                            <input type="radio" name="answer_{{ $question->id }}" value="No" required> نعم
                                        </label>
                                    </div>
                                    @elseif($question->answer_type == 'Text')
                                        <textarea name="answer_{{ $question->id }}" rows="4" required></textarea>
                                    @endif

                        </div>
                    @endforeach

                    <button type="submit">إرسال</button>
                </form>


                 </div>
            </div>
        </div>
    </div>





</x-app-layout>




