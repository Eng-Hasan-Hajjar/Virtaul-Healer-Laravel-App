    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <title>الوصفة الطبية</title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #8dc6aa;
            }

            .container {
                max-width: 800px;
                margin: 0 auto;
                padding: 10px;
                background-color: #8978bd;


                border-radius: 16px;
                box-shadow:100 20000 20px rgba(178, 188, 207, 0.5) ;



            }

            header {
                text-align: center;
                padding-bottom: 10px;
                border-bottom: 2px solid #ddd;
            }

            h1 {
                color: #ffffff;
                font-style: bold;
            }

            p {
                line-height: 1.6;
                color: #f5f5f5;
                font-style: bold;
            }

            @media print {
                body {
                    background-color: #fff;
                }

                .container {
                    box-shadow:10 0 20px rgba(184, 33, 33, 0.1) ;

                    border: 20px solid #97cb1c;
                    border-radius: 100px;


                }
            }






        </style>
    </head>
    <body>

        <div class="w3-display-container " >
            <div class="w3-padding w3-display-topleft w3-animate-zoom container w3-container"  >  <img src="{{ asset('gifs/7.gif') }}"> </div>
            <div class="w3-padding w3-display-topright w3-animate-zoom container w3-container"><img src="{{ asset('gifs/8.gif') }}"></div>


            <div>

                    <div class="container w3-container w3-center w3-animate-zoom">
                        <header>
                            <h1>الوصفة الطبية  وفق حالتك </h1>
                        </header>
                        <section >
                            <p>{{$description}}</p>
                            <p>أتمنى لك صحة جيدة </p>

                        </div>
                        </section>
                    </div>


            </div>

          </div>




           <script>


        </script>
    </body>
    </html>
