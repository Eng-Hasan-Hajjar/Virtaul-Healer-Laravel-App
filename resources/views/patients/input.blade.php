
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
    <style>
        table, th, td {
            border: 0px solid;
            padding: 15px;
            text-align: center;
            color: rgb(0, 0, 0);
            background-color: #026b74;
            border-radius: 120px;
            }
        table {
            position: center;
            width: 50%;
            margin-left:340px;
            }
        th {
              height: 70px;
        }

        tr:hover {background-color: rgb(181, 79, 42);}
    </style>

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="font-size :18px ;color:rgb(45, 197, 197);text-align:right">
                {{ __('طبيبي') }}   ||  معرفة أكثر عنك
            </h2>




        </x-slot>

        <div class="row font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="font-size :18px ; color:rgb(73, 228, 228); text-align:center">


        <table>
            <tbody>
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <tr style="align-content: right">
                            <div class="pull-left">
                                <h2></h2>
                            </div>
                         </tr>
                         <tr style="align-content:left">
                            <div class="pull-right" style="margin:20px ;align-content:left">
                            </div>
                        </tr>
                    </div>
                </div>

            </tbody>
        </table>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('patients.store') }}" method="POST">
            @csrf


            <table>
              <tbody>
                    <div class="row">
                                        <!-- معلومات الشخصية -->
                        <tr>
                            <div class="form-group">

                                <td>  <label for="age">العمر:</label></td>
                                    <td>   <input type="number" class="form-control" id="age" name="age" placeholder="العمر" >
                                    </td>
                                 </div>
                       </tr>
                       <tr>
                        <div class="form-group">
                            <td> <label for="gender">الجنس:</label></td>
                            <td>
                            <select class="form-control" id="gender" name="gender" >
                                <option value="male">ذكر</option>
                                <option value="female">أنثى</option>
                                <option value="other">أخر</option>
                            </select>
                        </td>
                        </div>
                    </tr>
                        <tr>
                        <div class="form-group">
                            <td> <label for="blood_type">زمرة الدم:</label></td>
                            <td>
                            <select class="form-control" id="blood_type" name="blood_type" >
                                <option value="a+">A+</option>
                                <option value="a-">A-</option>
                                <option value="b+">B+</option>
                                <option value="b-">B-</option>
                                <option value="o+">O+</option>
                                <option value="o-">O-</option>
                                <option value="o+">AB+</option>
                                <option value="o-">AB-</option>
                                <option value="noval">لا أعرف</option>
                            </select>
                        </td>
                        </div>
                    </tr>

                        <tr>
                        <!-- التاريخ الطبي -->
                        <div class="form-group">
                            <td> <label for="genetic_disease">الأمراض الوراثية:</label></td>
                            <td>
                                <select class="form-control" id="genetic_disease" name="genetic_disease" >
                                    <option value="yes">يوجد</option>
                                    <option value="no">لا يوجد</option>
                                </select>

                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <td> <label for="chronic_diseases">الأمراض المزمنة:</label></td>
                            <td>
                                <select class="form-control" id="chronic_diseases" name="chronic_diseases" >
                                    <option value="yes">يوجد</option>
                                    <option value="no">لا يوجد</option>
                                </select>
                            </td>
                        </div>
                    <tr>
                    </tr>
                        <div class="form-group">
                            <td> <label for="previous_surgery">عمليات جراحية سابقة:</label></td>
                                <td>
                                    <input type="text" class="form-control" id="previous_surgery" name="previous_surgery" placeholder="عمليات جراحية سابقة"></td>
                        </div>
                    </tr>
                    <tr>
                        <!-- معلومات الاتصال -->
                        <div class="form-group">
                            <td>  <label for="number">الرقم :</label></td>
                                <td>   <input type="phone" class="form-control" id="number" name="number" ></td>
                        </div>
                    </tr>

                        <tr>
                        <div class="form-group">
                            <td><label for="address">العنوان:</label></td>
                                <td> <input type="text" class="form-control" id="address" name="address" value="Aleppo"></td>
                        </div>
                    </tr>

                        <tr>

                            <td> <div class="col-xs-12 col-sm-12 col-md-12 text-center"></td>
                                <td>    <button type="submit" class="custom-btn btn-15">انشاء  </button></td>
                        </div>
                    </tr>
                    </div>
             </tbody>
            </table>
        </form>

        </div>


    </x-app-layout>



















    <style>
        body {
          background: #e0e5ec;
        }
        h1 {
          position: relative;
          text-align: center;
          color: #353535;
          font-size: 50px;
          font-family: "Cormorant Garamond", serif;
        }

        p {
          font-family: 'Lato', sans-serif;
          font-weight: 300;
          text-align: center;
          font-size: 18px;
          color: #676767;
        }
        .frame {
          width: 90%;
          margin: 40px auto;
          text-align: center;
        }
        button {
          margin: 20px;
        }
        .custom-btn {
          width: 130px;
          height: 40px;
          color: #fff;
          border-radius: 5px;
          padding: 10px 25px;
          font-family: 'Lato', sans-serif;
          font-weight: 500;
          background: transparent;
          cursor: pointer;
          transition: all 0.3s ease;
          position: relative;
          display: inline-block;
           box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
           7px 7px 20px 0px rgba(0,0,0,.1),
           4px 4px 5px 0px rgba(0,0,0,.1);
          outline: none;
        }

        /* 1 */
        .btn-1 {
          background: rgb(6,14,131);
          background: linear-gradient(0deg, rgba(6,14,131,1) 0%, rgba(12,25,180,1) 100%);
          border: none;
        }
        .btn-1:hover {
           background: rgb(0,3,255);
        background: linear-gradient(0deg, rgba(0,3,255,1) 0%, rgba(2,126,251,1) 100%);
        }

        /* 2 */
        .btn-2 {
          background: rgb(96,9,240);
          background: linear-gradient(0deg, rgba(96,9,240,1) 0%, rgba(129,5,240,1) 100%);
          border: none;

        }
        .btn-2:before {
          height: 0%;
          width: 2px;
        }
        .btn-2:hover {
          box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
                      -4px -4px 6px 0 rgba(116, 125, 136, .5),
            inset -4px -4px 6px 0 rgba(255,255,255,.2),
            inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
        }


        /* 3 */
        .btn-3 {
          background: rgb(0,172,238);
        background: linear-gradient(0deg, rgba(0,172,238,1) 0%, rgba(2,126,251,1) 100%);
          width: 130px;
          height: 40px;
          line-height: 42px;
          padding: 0;
          border: none;

        }
        .btn-3 span {
          position: relative;
          display: block;
          width: 100%;
          height: 100%;
        }
        .btn-3:before,
        .btn-3:after {
          position: absolute;
          content: "";
          right: 0;
          top: 0;
           background: rgba(2,126,251,1);
          transition: all 0.3s ease;
        }
        .btn-3:before {
          height: 0%;
          width: 2px;
        }
        .btn-3:after {
          width: 0%;
          height: 2px;
        }
        .btn-3:hover{
           background: transparent;
          box-shadow: none;
        }
        .btn-3:hover:before {
          height: 100%;
        }
        .btn-3:hover:after {
          width: 100%;
        }
        .btn-3 span:hover{
           color: rgba(2,126,251,1);
        }
        .btn-3 span:before,
        .btn-3 span:after {
          position: absolute;
          content: "";
          left: 0;
          bottom: 0;
           background: rgba(2,126,251,1);
          transition: all 0.3s ease;
        }
        .btn-3 span:before {
          width: 2px;
          height: 0%;
        }
        .btn-3 span:after {
          width: 0%;
          height: 2px;
        }
        .btn-3 span:hover:before {
          height: 100%;
        }
        .btn-3 span:hover:after {
          width: 100%;
        }

        /* 4 */
        .btn-4 {
          background-color: #4dccc6;
        background-image: linear-gradient(315deg, #4dccc6 0%, #96e4df 74%);
          line-height: 42px;
          padding: 0;
          border: none;
        }
        .btn-4:hover{
          background-color: #89d8d3;
        background-image: linear-gradient(315deg, #89d8d3 0%, #03c8a8 74%);
        }
        .btn-4 span {
          position: relative;
          display: block;
          width: 100%;
          height: 100%;
        }
        .btn-4:before,
        .btn-4:after {
          position: absolute;
          content: "";
          right: 0;
          top: 0;
           box-shadow:  4px 4px 6px 0 rgba(255,255,255,.9),
                      -4px -4px 6px 0 rgba(116, 125, 136, .2),
            inset -4px -4px 6px 0 rgba(255,255,255,.9),
            inset 4px 4px 6px 0 rgba(116, 125, 136, .3);
          transition: all 0.3s ease;
        }
        .btn-4:before {
          height: 0%;
          width: .1px;
        }
        .btn-4:after {
          width: 0%;
          height: .1px;
        }
        .btn-4:hover:before {
          height: 100%;
        }
        .btn-4:hover:after {
          width: 100%;
        }
        .btn-4 span:before,
        .btn-4 span:after {
          position: absolute;
          content: "";
          left: 0;
          bottom: 0;
          box-shadow:  4px 4px 6px 0 rgba(255,255,255,.9),
                      -4px -4px 6px 0 rgba(116, 125, 136, .2),
            inset -4px -4px 6px 0 rgba(255,255,255,.9),
            inset 4px 4px 6px 0 rgba(116, 125, 136, .3);
          transition: all 0.3s ease;
        }
        .btn-4 span:before {
          width: .1px;
          height: 0%;
        }
        .btn-4 span:after {
          width: 0%;
          height: .1px;
        }
        .btn-4 span:hover:before {
          height: 100%;
        }
        .btn-4 span:hover:after {
          width: 100%;
        }

        /* 5 */
        .btn-5 {
          width: 130px;
          height: 40px;
          line-height: 42px;
          padding: 0;
          border: none;
          background: rgb(255,27,0);
        background: linear-gradient(0deg, rgba(255,27,0,1) 0%, rgba(251,75,2,1) 100%);
        }
        .btn-5:hover {
          color: #f0094a;
          background: transparent;
           box-shadow:none;
        }
        .btn-5:before,
        .btn-5:after{
          content:'';
          position:absolute;
          top:0;
          right:0;
          height:2px;
          width:0;
          background: #f0094a;
          box-shadow:
           -1px -1px 5px 0px #fff,
           7px 7px 20px 0px #0003,
           4px 4px 5px 0px #0002;
          transition:400ms ease all;
        }
        .btn-5:after{
          right:inherit;
          top:inherit;
          left:0;
          bottom:0;
        }
        .btn-5:hover:before,
        .btn-5:hover:after{
          width:100%;
          transition:800ms ease all;
        }


        /* 6 */
        .btn-6 {
          background: rgb(247,150,192);
        background: radial-gradient(circle, rgba(247,150,192,1) 0%, rgba(118,174,241,1) 100%);
          line-height: 42px;
          padding: 0;
          border: none;
        }
        .btn-6 span {
          position: relative;
          display: block;
          width: 100%;
          height: 100%;
        }
        .btn-6:before,
        .btn-6:after {
          position: absolute;
          content: "";
          height: 0%;
          width: 1px;
         box-shadow:
           -1px -1px 20px 0px rgba(255,255,255,1),
           -4px -4px 5px 0px rgba(255,255,255,1),
           7px 7px 20px 0px rgba(0,0,0,.4),
           4px 4px 5px 0px rgba(0,0,0,.3);
        }
        .btn-6:before {
          right: 0;
          top: 0;
          transition: all 500ms ease;
        }
        .btn-6:after {
          left: 0;
          bottom: 0;
          transition: all 500ms ease;
        }
        .btn-6:hover{
          background: transparent;
          color: #76aef1;
          box-shadow: none;
        }
        .btn-6:hover:before {
          transition: all 500ms ease;
          height: 100%;
        }
        .btn-6:hover:after {
          transition: all 500ms ease;
          height: 100%;
        }
        .btn-6 span:before,
        .btn-6 span:after {
          position: absolute;
          content: "";
          box-shadow:
           -1px -1px 20px 0px rgba(255,255,255,1),
           -4px -4px 5px 0px rgba(255,255,255,1),
           7px 7px 20px 0px rgba(0,0,0,.4),
           4px 4px 5px 0px rgba(0,0,0,.3);
        }
        .btn-6 span:before {
          left: 0;
          top: 0;
          width: 0%;
          height: .5px;
          transition: all 500ms ease;
        }
        .btn-6 span:after {
          right: 0;
          bottom: 0;
          width: 0%;
          height: .5px;
          transition: all 500ms ease;
        }
        .btn-6 span:hover:before {
          width: 100%;
        }
        .btn-6 span:hover:after {
          width: 100%;
        }

        /* 7 */
        .btn-7 {
        background: linear-gradient(0deg, rgba(255,151,0,1) 0%, rgba(251,75,2,1) 100%);
          line-height: 42px;
          padding: 0;
          border: none;
        }
        .btn-7 span {
          position: relative;
          display: block;
          width: 100%;
          height: 100%;
        }
        .btn-7:before,
        .btn-7:after {
          position: absolute;
          content: "";
          right: 0;
          bottom: 0;
          background: rgba(251,75,2,1);
          box-shadow:
           -7px -7px 20px 0px rgba(255,255,255,.9),
           -4px -4px 5px 0px rgba(255,255,255,.9),
           7px 7px 20px 0px rgba(0,0,0,.2),
           4px 4px 5px 0px rgba(0,0,0,.3);
          transition: all 0.3s ease;
        }
        .btn-7:before{
           height: 0%;
           width: 2px;
        }
        .btn-7:after {
          width: 0%;
          height: 2px;
        }
        .btn-7:hover{
          color: rgba(251,75,2,1);
          background: transparent;
        }
        .btn-7:hover:before {
          height: 100%;
        }
        .btn-7:hover:after {
          width: 100%;
        }
        .btn-7 span:before,
        .btn-7 span:after {
          position: absolute;
          content: "";
          left: 0;
          top: 0;
          background: rgba(251,75,2,1);
          box-shadow:
           -7px -7px 20px 0px rgba(255,255,255,.9),
           -4px -4px 5px 0px rgba(255,255,255,.9),
           7px 7px 20px 0px rgba(0,0,0,.2),
           4px 4px 5px 0px rgba(0,0,0,.3);
          transition: all 0.3s ease;
        }
        .btn-7 span:before {
          width: 2px;
          height: 0%;
        }
        .btn-7 span:after {
          height: 2px;
          width: 0%;
        }
        .btn-7 span:hover:before {
          height: 100%;
        }
        .btn-7 span:hover:after {
          width: 100%;
        }

        /* 8 */
        .btn-8 {
          background-color: #f0ecfc;
        background-image: linear-gradient(315deg, #f0ecfc 0%, #c797eb 74%);
          line-height: 42px;
          padding: 0;
          border: none;
        }
        .btn-8 span {
          position: relative;
          display: block;
          width: 100%;
          height: 100%;
        }
        .btn-8:before,
        .btn-8:after {
          position: absolute;
          content: "";
          right: 0;
          bottom: 0;
          background: #c797eb;
          /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
                      -4px -4px 6px 0 rgba(116, 125, 136, .2),
            inset -4px -4px 6px 0 rgba(255,255,255,.5),
            inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
          transition: all 0.3s ease;
        }
        .btn-8:before{
           height: 0%;
           width: 2px;
        }
        .btn-8:after {
          width: 0%;
          height: 2px;
        }
        .btn-8:hover:before {
          height: 100%;
        }
        .btn-8:hover:after {
          width: 100%;
        }
        .btn-8:hover{
          background: transparent;
        }
        .btn-8 span:hover{
          color: #c797eb;
        }
        .btn-8 span:before,
        .btn-8 span:after {
          position: absolute;
          content: "";
          left: 0;
          top: 0;
          background: #c797eb;
          /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
                      -4px -4px 6px 0 rgba(116, 125, 136, .2),
            inset -4px -4px 6px 0 rgba(255,255,255,.5),
            inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
          transition: all 0.3s ease;
        }
        .btn-8 span:before {
          width: 2px;
          height: 0%;
        }
        .btn-8 span:after {
          height: 2px;
          width: 0%;
        }
        .btn-8 span:hover:before {
          height: 100%;
        }
        .btn-8 span:hover:after {
          width: 100%;
        }


        /* 9 */
        .btn-9 {
          border: none;
          transition: all 0.3s ease;
          overflow: hidden;
        }
        .btn-9:after {
          position: absolute;
          content: " ";
          z-index: -1;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
           background-color: #1fd1f9;
        background-image: linear-gradient(315deg, #1fd1f9 0%, #b621fe 74%);
          transition: all 0.3s ease;
        }
        .btn-9:hover {
          background: transparent;
          box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
                      -4px -4px 6px 0 rgba(116, 125, 136, .2),
            inset -4px -4px 6px 0 rgba(255,255,255,.5),
            inset 4px 4px 6px 0 rgba(116, 125, 136, .3);
          color: #fff;
        }
        .btn-9:hover:after {
          -webkit-transform: scale(2) rotate(180deg);
          transform: scale(2) rotate(180deg);
          box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
                      -4px -4px 6px 0 rgba(116, 125, 136, .2),
            inset -4px -4px 6px 0 rgba(255,255,255,.5),
            inset 4px 4px 6px 0 rgba(116, 125, 136, .3);
        }

        /* 10 */
        .btn-10 {
          background: rgb(22,9,240);
        background: linear-gradient(0deg, rgba(22,9,240,1) 0%, rgba(49,110,244,1) 100%);
          color: #fff;
          border: none;
          transition: all 0.3s ease;
          overflow: hidden;
        }
        .btn-10:after {
          position: absolute;
          content: " ";
          top: 0;
          left: 0;
          z-index: -1;
          width: 100%;
          height: 100%;
          transition: all 0.3s ease;
          -webkit-transform: scale(.1);
          transform: scale(.1);
        }
        .btn-10:hover {
          color: #fff;
          border: none;
          background: transparent;
        }
        .btn-10:hover:after {
          background: rgb(0,3,255);
        background: linear-gradient(0deg, rgba(2,126,251,1) 0%,  rgba(0,3,255,1)100%);
          -webkit-transform: scale(1);
          transform: scale(1);
        }

        /* 11 */
        .btn-11 {
          border: none;
          background: rgb(251,33,117);
            background: linear-gradient(0deg, rgba(251,33,117,1) 0%, rgba(234,76,137,1) 100%);
            color: #fff;
            overflow: hidden;
        }
        .btn-11:hover {
            text-decoration: none;
            color: #fff;
        }
        .btn-11:before {
            position: absolute;
            content: '';
            display: inline-block;
            top: -180px;
            left: 0;
            width: 30px;
            height: 100%;
            background-color: #fff;
            animation: shiny-btn1 3s ease-in-out infinite;
        }
        .btn-11:hover{
          opacity: .7;
        }
        .btn-11:active{
          box-shadow:  4px 4px 6px 0 rgba(255,255,255,.3),
                      -4px -4px 6px 0 rgba(116, 125, 136, .2),
            inset -4px -4px 6px 0 rgba(255,255,255,.2),
            inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
        }


        @-webkit-keyframes shiny-btn1 {
            0% { -webkit-transform: scale(0) rotate(45deg); opacity: 0; }
            80% { -webkit-transform: scale(0) rotate(45deg); opacity: 0.5; }
            81% { -webkit-transform: scale(4) rotate(45deg); opacity: 1; }
            100% { -webkit-transform: scale(50) rotate(45deg); opacity: 0; }
        }


        /* 12 */
        .btn-12{
          position: relative;
          right: 20px;
          bottom: 20px;
          border:none;
          box-shadow: none;
          width: 130px;
          height: 40px;
          line-height: 42px;
          -webkit-perspective: 230px;
          perspective: 230px;
        }
        .btn-12 span {
          background: rgb(0,172,238);
        background: linear-gradient(0deg, rgba(0,172,238,1) 0%, rgba(2,126,251,1) 100%);
          display: block;
          position: absolute;
          width: 130px;
          height: 40px;
          box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
           7px 7px 20px 0px rgba(0,0,0,.1),
           4px 4px 5px 0px rgba(0,0,0,.1);
          border-radius: 5px;
          margin:0;
          text-align: center;
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          box-sizing: border-box;
          -webkit-transition: all .3s;
          transition: all .3s;
        }
        .btn-12 span:nth-child(1) {
          box-shadow:
           -7px -7px 20px 0px #fff9,
           -4px -4px 5px 0px #fff9,
           7px 7px 20px 0px #0002,
           4px 4px 5px 0px #0001;
          -webkit-transform: rotateX(90deg);
          -moz-transform: rotateX(90deg);
          transform: rotateX(90deg);
          -webkit-transform-origin: 50% 50% -20px;
          -moz-transform-origin: 50% 50% -20px;
          transform-origin: 50% 50% -20px;
        }
        .btn-12 span:nth-child(2) {
          -webkit-transform: rotateX(0deg);
          -moz-transform: rotateX(0deg);
          transform: rotateX(0deg);
          -webkit-transform-origin: 50% 50% -20px;
          -moz-transform-origin: 50% 50% -20px;
          transform-origin: 50% 50% -20px;
        }
        .btn-12:hover span:nth-child(1) {
          box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
           7px 7px 20px 0px rgba(0,0,0,.1),
           4px 4px 5px 0px rgba(0,0,0,.1);
          -webkit-transform: rotateX(0deg);
          -moz-transform: rotateX(0deg);
          transform: rotateX(0deg);
        }
        .btn-12:hover span:nth-child(2) {
          box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
           7px 7px 20px 0px rgba(0,0,0,.1),
           4px 4px 5px 0px rgba(0,0,0,.1);
         color: transparent;
          -webkit-transform: rotateX(-90deg);
          -moz-transform: rotateX(-90deg);
          transform: rotateX(-90deg);
        }


        /* 13 */
        .btn-13 {
          background-color: #89d8d3;
        background-image: linear-gradient(315deg, #89d8d3 0%, #03c8a8 74%);
          border: none;
          z-index: 1;
        }
        .btn-13:after {
          position: absolute;
          content: "";
          width: 100%;
          height: 0;
          bottom: 0;
          left: 0;
          z-index: -1;
          border-radius: 5px;
           background-color: #4dccc6;
        background-image: linear-gradient(315deg, #4dccc6 0%, #96e4df 74%);
          box-shadow:
           -7px -7px 20px 0px #fff9,
           -4px -4px 5px 0px #fff9,
           7px 7px 20px 0px #0002,
           4px 4px 5px 0px #0001;
          transition: all 0.3s ease;
        }
        .btn-13:hover {
          color: #fff;
        }
        .btn-13:hover:after {
          top: 0;
          height: 100%;
        }
        .btn-13:active {
          top: 2px;
        }


        /* 14 */
        .btn-14 {
          background: rgb(255,151,0);
          border: none;
          z-index: 1;
        }
        .btn-14:after {
          position: absolute;
          content: "";
          width: 100%;
          height: 0;
          top: 0;
          left: 0;
          z-index: -1;
          border-radius: 5px;
          background-color: #eaf818;
          background-image: linear-gradient(315deg, #eaf818 0%, #f6fc9c 74%);
           box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5);
           7px 7px 20px 0px rgba(0,0,0,.1),
           4px 4px 5px 0px rgba(0,0,0,.1);
          transition: all 0.3s ease;
        }
        .btn-14:hover {
          color: #000;
        }
        .btn-14:hover:after {
          top: auto;
          bottom: 0;
          height: 100%;
        }
        .btn-14:active {
          top: 2px;
        }

        /* 15 */
        .btn-15 {
          background: #b621fe;
          border: none;
          z-index: 1;
        }
        .btn-15:after {
          position: absolute;
          content: "";
          width: 0;
          height: 100%;
          top: 0;
          right: 0;
          z-index: -1;
          background-color: #663dff;
          border-radius: 5px;
           box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
           7px 7px 20px 0px rgba(0,0,0,.1),
           4px 4px 5px 0px rgba(0,0,0,.1);
          transition: all 0.3s ease;
        }
        .btn-15:hover {
          color: #fff;
        }
        .btn-15:hover:after {
          left: 0;
          width: 100%;
        }
        .btn-15:active {
          top: 2px;
        }


        /* 16 */
        .btn-16 {
          border: none;
          color: #000;
        }
        .btn-16:after {
          position: absolute;
          content: "";
          width: 0;
          height: 100%;
          top: 0;
          left: 0;
          direction: rtl;
          z-index: -1;
          box-shadow:
           -7px -7px 20px 0px #fff9,
           -4px -4px 5px 0px #fff9,
           7px 7px 20px 0px #0002,
           4px 4px 5px 0px #0001;
          transition: all 0.3s ease;
        }
        .btn-16:hover {
          color: #000;
        }
        .btn-16:hover:after {
          left: auto;
          right: 0;
          width: 100%;
        }
        .btn-16:active {
          top: 2px;
        }
        </style>
