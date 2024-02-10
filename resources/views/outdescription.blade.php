<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>الوصفة الطبية</title>
    <style>
        /* أسلوب الصفحة */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #8dc6aa;
        }
        /* أسلوب الحاوية */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 10px;
            background-color: #013e33;
            border-radius: 16px;
            box-shadow: 100 20000 20px rgba(32, 60, 112, 0.5);
        }
        /* أسلوب الرأس */
        header {
            text-align: center;
            padding-bottom: 10px;
            border-bottom: 2px solid #ddd;
        }
        /* أسلوب النصوص */
        h1 {
            color: #ffffff;
            font-style: bold;
        }
        p {
            line-height: 1.6;
            color: #f5f5f5;
            font-style: bold;
        }
        .left {
            float: left;
            width: 30%;
            margin-top: 20px;
            font-size: 20px;

        }

        .center {
            display: inline-block;
            width: 60%;
        }

        .right {
            float: right;
            width: 10%;
        }
           /* 5 */
            .btn-5 {
            width: 130px;
            height: 40px;
            line-height: 42px;
            padding: 0;
            border: none;
            background: rgb(102, 133, 52);
            background: linear-gradient(0deg, rgba(141,198,170,1) 0%, rgb(141, 198, 170,1) 100%);
            }
            .btn-5:hover {
            color: #eeeeee;
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
            background: #5ef115;
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
  background: rgba(141,198,170,1);
background: linear-gradient(0deg,  rgba(141,198,170,1) 0%,  rgba(141,198,170,1) 100%);
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

        /* أسلوب الطباعة */
        @media print {
            body {
                background-color: #fff;
            }
            .container {
                box-shadow: 10 0 20px rgba(184, 33, 33, 0.1);
                border: 20px solid #97cb1c;
                border-radius: 100px;
            }
        }
    </style>
</head>
<body>
    <div class="w3-display-container">

        <div class="w3-padding w3-display-topcenter w3-animate-zoom container w3-container">
            <header>

     <h1 class="center">التشخيص  الطبي وفق حالتك </h1>

     <button class=" left custom-btn btn-12" ><span> <a  href="/dashboard">انقر</a></span><span> الأقسام</span></button>


            </header>
        </div>
        <div class="container w3-container w3-display-center w3-center w3-animate-zoom">
            <section>
                <p> "ملاحظة : التشخيص التالي هو عبارة عن استنتاجات من خلال اجابتك عن الأسئلة السابقة "</p>
                <br>
                <p>  {{$descriptiondb}} </p>
                <p>{{ $diagnosis}}</p>

                <br>
                <!-- إضافة مكان لرسم الرسم البياني -->
                <div class="container w3-container w3-center w3-animate-zoom" style="width:50%;hieght:5%;position: center;">
                    <canvas id="myChart" style="width:50%;hight:10%;max-width:600px" ></canvas>
                </div>



                <br>
                <p>أتمنى لك صحة جيدة</p>

            </section>
        </div>
    </div>
    <script>
        // استيراد البيانات الخاصة بك من PHP إلى JavaScript
        var yesAnswersCountpercent = {{$yesAnswersCountpercent}};

        // رسم الرسم البياني
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut', // يمكنك تغييره إلى 'bar' أو  pie 'line' وفقًا لاحتياجاتك
            data: {
                labels: ['نسبة سلامة المرض ', 'نسبة خطورة المرض '],

                datasets: [{
                    data: [ 100 - yesAnswersCountpercent,  yesAnswersCountpercent],
                    backgroundColor: ["#1e7145" , "#b91d47"], // قد ترغب في تغيير الألوان
                    borderColor: ["#1e7145" , "#b91d47"],
                    borderWidth: 1

                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio:true ,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                        color: 'white',
                        fontSize: 34 // حجم الخط
                                 }
                    },

                    title: {
                        display: true,
                        text: 'حالة المريض وخطورته' ,
                        color:'white',
                        fontSize: 34 // حجم الخط
                    }
                }

            }
        });
    </script>
</body>
</html>
