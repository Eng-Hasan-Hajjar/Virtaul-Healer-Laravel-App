
    <!-- Stylesheets -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="css/color-switcher-design.css" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->



    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="font-size :18px ;color:aqua;text-align:right">
                {{ __(' طبيبي') }}   ||  حدد قسم الألم الرئيسي
            </h2>

        </x-slot>



        <!-- Department Section -->
        <section class="department-section">
            <div class="auto-container">

                <div class="services-carousel owl-carousel owl-theme">

                    <!-- Department Block -->
                    <div class="department-block">
                        <div class="inner-box">
                        <img src="{{ asset('images/القلب.png') }}" >

                            <div class="upper-box">
                                <h3 style="text-align:left"><a href="questionsHeart2">القلب</a></h3>
                            </div>
                            <div class="text">الأمراض القلبية تشير إلى مجموعة واسعة من الحالات التي تؤثر على القلب والأوعية الدموية.</div>
                            <div class="read-outer">
                                <a href="questionsHeart2" class="read-more">المزيد <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Department Block -->
                    <div class="department-block">
                        <div class="inner-box">
                        <img src="{{ asset('images/الرئة.png') }}">
                            <div class="upper-box">

                                <h3><a style="text-align:left" href="questionsLung2">الرئة</a></h3>
                            </div>
                            <div class="text">أمراض الرئة هي مجموعة من الحالات التي تؤثر على الرئتين وقد تؤدي إلى صعوبة في التنفس وتقليل قدرة الرئتين على نقل الأكسجين إلى الجسم. </div>
                            <div class="read-outer">
                                <a href="questionsLung2" class="read-more">المزيد <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Department Block -->
                    <div class="department-block">
                        <div class="inner-box">
                        <img src="{{ asset('images/المعدة.png') }}">

                            <div class="upper-box">

                                <h3><a href="questionsStomach2">المعدة</a></h3>
                            </div>
                            <div class="text">
    الشعور بنخر أو مغص حاد أو ألم (عسر الهضم) أعلى البطن والذي ربما يتفاقم أو يتحسن بتناول الطعام الغثيان قيء شعور بامتلاء أعلى البطن بعد تناول الطعام </div>
                            <div class="read-outer">
                                <a href="questionsStomach2" class="read-more">المزيد <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Department Block -->
                    <div class="department-block">
                        <div class="inner-box">
                        <img src="{{ asset('images/الأمعاء.png') }}">

                            <div class="upper-box">

                                <h3><a href="questionsIntestines2">الأمعاء الدقيقة والغليظة</a></h3>
                            </div>
                            <div class="text">وجود دم في البراز أو براز يحتوي على صديد. إذا استمر الإسهال لمدة تزيد عن 2 إلى 3 أيام لدى شخص بالغ أو 24 ساعة عند الطفل. ارتفاع درجة الحرارة أعلى من 38 درجة مئوية. آلام في البطن شديدة أو مفاجئة </div>
                            <div class="read-outer">
                                <a href="questionsIntestines2" class="read-more">المزيد <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Department Block -->
                    <div class="department-block">
                        <div class="inner-box">
                        <img src="{{ asset('images/الكلية.png') }}">

                            <div class="upper-box">

                                <h3><a href="questionsKidney2">الكلية</a></h3>
                            </div>
                            <div class="text">
    يوجد عدة اختبارات لتشخيص الفشل الكلوي منها: تحليل البول: للبحث عن وجود بروتينات أو سكر في البول مما يدل على ضعف أو عجز الكلى. قياس كمية البول: إذا كان هناك نقص في كمية البول، فإنه قد يدل على وجود انسداد في المجرى البولي. عينة دم: تساعد اختبارات الدم على ملاحظة كفاءة وظائف الكُلى عن طريق نسبة اليوريا والكرياتينين</div>
                            <div class="read-outer">
                                <a href="questionsKidney2" class="read-more">المزيد <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Department Block -->
                    <div class="department-block">
                        <div class="inner-box">
                        <img src="{{ asset('images/الدماغ.png') }}">

                            <div class="upper-box">

                                <h3><a href="questionsBrain2">الدماغ</a></h3>
                            </div>
                            <div class="text">
    تعد أورام الدماغ من الأمراض الخطيرة التي تسبب ضررًا كبيرًا وخاصة في حال التشخيص في المراحل المتقدمة، ويمكن لأورام الدماغ أن تكون حميدة أو خبيثة وتتعدد أنواعها بحسب مكان نمو الأورام وطبيعة الخلايا السرطانية. تشمل أبرز أعراض أورام الدماغ على الآتي: الصداع الشديد والذي غالبًا ما يشتد صباحًا. التشنجات العصبية </div>
                            <div class="read-outer">
                                <a href="questionsBrain2" class="read-more">المزيد <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Department Block -->
                    <div class="department-block">
                        <div class="inner-box">
                        <img src="{{ asset('images/العين.png') }}">

                            <div class="upper-box">

                                <h3><a href="questionsEye2">العين</a></h3>
                            </div>
                            <div class="text">قصر النظر وهو ضعف الرؤية للأشياء البعيدة، على سبيل المثال يصعب على المريض رؤية لافتات الإعلانات البعيدة على الطريق. الاستجماتيزم وهو تشوه الرؤية في جميع المسافات “البعيدة والقريبة” وينشأ بسبب عدم انتظام شكل قرنية العين </div>
                            <div class="read-outer">
                                <a href="questionsEye2" class="read-more">المزيد <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Department Block -->
                    <div class="department-block">
                        <div class="inner-box">
                        <img src="{{ asset('images/البلعوم.png') }}">

                            <div class="upper-box">

                                <h3><a href="questionsPharynx2">البلعوم</a></h3>
                            </div>
                            <div class="text">
    احمرار في الحلق واللوزتين، وانتفاخهما، وظهور بقع بيضاء فيهما في حالات التهاب الحلق البكتيري. خشونة وبحة في الصوت. انتفاخ الغدد الليمفاوية في حالات الاحتقان البكتيري </div>
                            <div class="read-outer">
                                <a href="questionsPharynx2" class="read-more">المزيد <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Department Block -->
                    <div class="department-block">
                        <div class="inner-box">
                        <img src="{{ asset('images/الظهر.png') }}">

                            <div class="upper-box">

                                <h3><a href="questionsBack2">الظهر</a></h3>
                            </div>
                            <div class="text">تتعدد أسباب آلام الظهر، ومن أهمها التمزق والإجهاد العضلي، الذي ينتج عن تمزق صغير في عضلات أو أربطة الظهر، وخاصةً عضلات العمود الفقري القطني الموجودة في أسفل </div>
                            <div class="read-outer">
                                <a href="questionsBack2" class="read-more">المزيد <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Department Block -->
                    <div class="department-block">
                        <div class="inner-box">
                        <img src="{{ asset('images/الجلد.png') }}">

                            <div class="upper-box">

                                <h3><a href="questionsSkin2">الجلد</a></h3>
                            </div>
                            <div class="text">     </div>
                            <div class="read-outer">
                                <a href="questionsSkin2" class="read-more">المزيد <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Department Block -->
                    <div class="department-block">
                        <div class="inner-box">
                        <img src="{{ asset('images/Ear.png') }}" >

                            <div class="upper-box">
                                <h3 style="text-align:left;  "><a href="questionsEar2">أذنية</a></h3>
                            </div>
                            <div class="text">
                                من علامات وأعراض الإصابة بالعدوى الفطرية للأذن الخارجية ما يلي:
                                        الحكة الشديدة بالأذن.
                                        تقشير الأذن من الداخل.
                                        الإنزعاج.
                                        كثرة صديد الأذن.
                                </div>
                            <div class="read-outer">
                                <a href="questionsEar2" class="read-more">المزيد <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- End Department Section -->





    </x-app-layout>

    <!--Scroll to top-->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/script.js"></script>
    <script src="js/color-settings.js"></script>




