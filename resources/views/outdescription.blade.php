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
            background-color: #8978bd;
            border-radius: 16px;
            box-shadow: 100 20000 20px rgba(178, 188, 207, 0.5);
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
        <div class="w3-padding w3-display-topleft w3-animate-zoom container w3-container">
            <img src="{{ asset('gifs/7.gif') }}">
        </div>
        <div class="w3-padding w3-display-topright w3-animate-zoom container w3-container">
            <img src="{{ asset('gifs/8.gif') }}">
        </div>
        <div class="container w3-container w3-center w3-animate-zoom">
            <header>
                <h1>الوصفة الطبية وفق حالتك</h1>
            </header>
            <section>
                <p>{{$description}}</p>
                <p>أتمنى لك صحة جيدة</p>
                {{$diagnosis}}
                <br>
                {{$descriptiondb}}
                {{$yesAnswersCount}}
                {{$yesAnswersCountpercent}}
                <!-- إضافة مكان لرسم الرسم البياني -->
                <div  style="width:50%;hieght:5%; position: relative;">
                  <canvas id="myChart" style="width:50%;hight:10%;max-width:600px" ></canvas>
                </div>
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
                    },
                    title: {
                        display: true,
                        text: 'حالة المريض وخطورته'
                    }
                }

            }
        });
    </script>
</body>
</html>
