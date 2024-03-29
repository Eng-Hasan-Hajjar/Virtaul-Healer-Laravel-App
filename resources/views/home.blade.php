<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>طبيبك الافتراضي</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
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
</head>

<body>

<div class="page-wrapper rtl">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header">


        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="#"><img src="images/logo-blue.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a style="font-size: 24px" href="#">الرئيسية</a>

                                    </li>
									<li ><a style="font-size: 24px" href="/about">حول التطبيق</a>

                                    </li>


									<li class=""><a style="font-size: 24px" href="departements">الأقسام</a>

                                    </li>

                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">
                            @guest
                                <!-- Button Box -->
                                <div class="btn-box">
                                    <a href="login" class="theme-btn btn-style-one"><span class="txt">سجل دخول</span></a>
                                </div>
                                <!-- Button Box -->
                                <div class="btn-box">
                                    <a href="register" class="theme-btn btn-style-one"><span class="txt">أنشئ حساب </span></a>
                                </div>
                            @endauth
                            @auth
                                      <!-- Settings Dropdown -->
                                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                                        <x-dropdown align="left" width="48">
                                            <x-slot name="trigger">
                                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                                    <div>{{ Auth::user()->name }}</div>

                                                    <div class="ms-1">
                                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                </button>
                                            </x-slot>

                                            <x-slot name="content">
                                                <x-dropdown-link :href="route('profile.edit')">
                                                    {{ __('Profile') }}
                                                </x-dropdown-link>

                                                <!-- Authentication -->
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link>
                                                </form>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

		<!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.html" class="img-responsive"><img src="images/logo-small-blue.png" alt="" title=""></a>
                </div>

				<!--Right Col-->
                <div class="right-col pull-right">
					<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon far fa-window-close"></span></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
            	<div class="nav-logo"><a href="index.html"><img src="images/nav-logo.png" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

	<!-- Main Slider -->
	<section class="main-slider">
		<div class="banner-carousel">
			<!-- Swiper -->
			<div class="swiper-wrapper">

				<div class="swiper-slide slide" style="background-image:url(images/main-slider/1.jpg)">
					<div class="auto-container">
						<div class="content clearfix">
							<div class="title"></div>
							<h2 >اعتني بصحتك مع طبيبي</h2>
							<div class="text"></div>
							<div class="btn-box clearfix">
								<a href="login" class="theme-btn btn-style-two"><span class="txt">خدمتي</span></a>
								<a href="login" class="theme-btn phone-btn"><span class="icon flaticon-call"></span>133</a>
							</div>
						</div>
					</div>
				</div>

				<div class="swiper-slide slide" style="background-image:url(images/main-slider/1.jpg)">
					<div class="auto-container">
						<div class="content">
							<div class="title"> </div>
							<h2>اعتني بصحتك</h2>
							<div class="text"></div>
							<div class="btn-box">
								<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">خدمتي</span></a>
								<a href="contact.html" class="theme-btn phone-btn"><span class="icon flaticon-call"></span>133</a>
							</div>
						</div>
					</div>
				</div>

				<div class="swiper-slide slide" style="background-image:url(images/main-slider/1.jpg)">
					<div class="auto-container">
						<div class="content">
							<div class="title"></div>
							<h2>اعتني بصحتك</h2>
							<div class="text"></div>
							<div class="btn-box">
								<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">خدمتي</span></a>
								<a href="contact.html" class="theme-btn phone-btn"><span class="icon flaticon-call"></span>133</a>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</section>
	<!-- End Main Slider -->

	<!-- Department Section -->
	<section class="department-section">
		<div class="auto-container">

			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>أقسام الرعاية الصحية المتوفرة في الموقع</h2>
				<div class="separator"></div>
			</div>

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

	<!-- Fluid Section One -->
    <section class="fluid-section-one">
		<div class="outer-section clearfix">

           <!--Image Column-->
        	<div class="image-column" style="background-image: url(images/resource/image-1.jpg)">
            	<div class="image">
                	<img src="images/resource/image-1.jpg" alt="">
                </div>
            </div>
            <!--End Image Column-->

            <!--Content Column-->
            <div class="content-column">
            	<div class="content-box">
					<div class="sec-title">
						<h2>رائدة في مجال الصحة.</h2>
						<div class="separator style-two"></div>
					</div>
					<div class="text">
						<p>
                            هدفنا الرئيسي على المدى الطويل هو دائمًا تحقيق نتائج معقدة لصحة أسنانك. ولكن في هذه العملية، نواصل أيضًا التركيز على تقديم أفضل خدمة عملاء لك. نحن دائمًا نجعل عيادة طب الأسنان لدينا مكانًا آمنًا قدر الإمكان!
                        </p>

					</div>
					<div class="row clearfix">
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<ul class="list-style-one">
								<li><span class="icon flaticon-medical-stethoscope-variant"></span>العلاج الطبي</li>
								<li><span class="icon flaticon-doctor"></span>الأطباء المؤهلين</li>
							</ul>
						</div>
						<div class="column col-lg-6 col-md-6 col-sm-12">
							<ul class="list-style-one">
								<li><span class="icon flaticon-ambulance-side-view"></span>مساعدة الطوارئ</li>
								<li><span class="icon flaticon-medical-kit"></span>محترفين طبيا</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>








	<!--Main Footer-->
    <footer class="main-footer" style="background-image: url(images/background/2.jpg)">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">

                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index.html"><img src="images/footer-logo-blue.png" alt="" /></a>
                                    </div>
                                    <div class="text">
                                        My Doctor عبارة عن مكتبة للقوالب الصحية والطبية تحتوي على عناصر ويب محددة مسبقًا والتي تساعدك على إنشاء أفضل موقع للقوالب الطبية الخاصة بك وتوفير رعاية شاملة عالية الجودة حول الرعاية الطبية

                                    </div>
									<ul class="social-icons">
										<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
										<li><a href="#"><span class="fab fa-google"></span></a></li>
										<li><a href="#"><span class="fab fa-twitter"></span></a></li>
										<li><a href="#"><span class="fab fa-skype"></span></a></li>
										<li><a href="#"><span class="fab fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>

							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<div class="footer-title  clearfix">
										<h2>الأقسام المتوفرة بالتطبيق</h2>
										<div class="separator"></div>
									</div>
									<ul class="footer-list">
										<li><a href="#"> الرئة</a></li>
                                        <li><a href="#"> الظهر</a></li>
                                        <li><a href="#">القلبية </a></li>

                                        <li><a href="#">المعدة </a></li>

                                        <li><a href="#">الدماغ </a></li>


									</ul>
								</div>
							</div>

						</div>
					</div>

					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
									<div class="footer-title  clearfix">
									</div>

									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="separator">
                                        </div>
                                    </div>

                                    <ul class="footer-list">

                                            <li><a href="#"> البلعوم </a></li>

                                            <li><a href="#"> الأذن</a></li>

                                            <li><a href="#"> الجلد</a></li>

                                            <li><a href="#"> العين</a></li>
                                    </ul>

								</div>
							</div>

							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<div class="footer-title  clearfix">

									</div>

									<ul class="separator">


									</ul>

								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright">MyDoctor Helth Care &copy; All Rights Reserved By Lama</div>
			</div>
		</div>

	</footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="index.html">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Logistics</a></li>
                <li><a href="#">Freedom</a></li>
            </ul>

        </div>

    </div>
</div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fas fa-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>

	<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>

    <a href="#" class="purchase-btn">Purchase now $17</a>

    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>

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

</body>
</html>
