<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 100%;
            margin: 20px auto;
            padding: 20px;
            border: 2px solid #333;
            border-radius: 10px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            height: 100px;
            width: auto;
            margin-bottom: 10px;
        }

        .title {
            font-size: 44px;
            margin-bottom: 10px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif

        }

        .content {
            text-align: center;
        }

        .name {
            font-size: 30px;
            margin-bottom: 10px;
            margin-top: 0%;
        }

        .course {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .date {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('assets/img/favicon/boost.png') }}" alt="Certificate Logo" class="logo">
            <h1 class="title">CERTIFICATE OF COMPLETION</h1>
        </div>
        <div class="content">
            <p><i>This is to certify that</i></p>
            <h2 class="name"> {{ $student->fname }} {{ $student->lname }} </h2>
            <p class="course">has successfully completed the course:</p>
            <h3 class="course">DATABASE MANAGEMENT SYSTEM</h3>
            <p class="date">Date of Completion: {{ $training->updated_at->format('Y , M d') }}</p>
        </div>
    </div>
</body>
</html>
