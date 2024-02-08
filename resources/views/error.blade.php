<!-- resources/views/error.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #1f2937;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .error-container {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #e74c3c;
        }

        p {
            color: #333;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>خطأ 403</h1>
        <p>غير مسموح لك بالدخول.</p>
        <!-- زر الرجوع -->
        <a href="{{ url()->previous() }}">رجوع</a>
    </div>
</body>
</html>
