<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOST Coaching Hub</title>
    <style>
        body {
            font-family: 'Bookman Old Style', serif; /* Change the font-family */
            margin: 0;
            padding: 0;
            text-align: justify; /* Justify all text */
            font-size: 16px; /* Adjust font size */
        }

        .header {
            background-color: #012e5e;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        .logo {
            height: 70px;
            /* Adjust the height as needed */
            width: auto;
            margin-right: 10px;
            float: left;
        }


        .content {
            padding: 20px;
            line-height: 1.5; /* Adjust line height */
        }

        .contact-info {
            margin-top: 20px;
        }

        .contact-info p {
            margin: 5px 0;
        }

        .qr-code {
            width: 120px;
        }

        .issued-date {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('assets/img/favicon/boost.png') }}" alt="BOOST Coaching Hub Logo" class="logo">
            <h2 class="title">Boost Consultancy & Coaching Hub</h2>
            <p1>www.bcchacademy.com, info@bcchacademy.com</p1>
        </div>
        <br>
        <div class="content">
            <p> Names: {{ $student->fname }} {{ $student->lname }}</p>
            <p> Reg.No: {{ $student->regnumber }}</p>
            <p> Email: {{ $student->email }}</p>
            <p><strong>REF: Admission Letter</strong></p>
            <p>Dear Applicant,</p>
            <p>Reference is made to your application for admission into <strong>{{ $training }}</strong>, now, we are pleased to inform you that your application has been successful with Registration Number: <strong>{{ $student->regnumber }}</strong>. Congratulations for being selected and thank you for choosing Boost Consultancy & Coaching Hub as an avenue for your studies. Details regarding the Professional Training is available in your student account accessible via <a href="https://www.bcchacademy.com/">https://www.bcchacademy.com/</a> and Click To Sign In Button.</p>

            <p>Thank you for choosing us as your online learning partner. We look forward to seeing you succeed in your studies.</p>
            <p>Best regards,</p>
            <p>BCCH Office of Registration</p>
            <center>
                <img src="{{ public_path('assets/img/qrCode.PNG') }}" class="qr-code" alt="BOOST Coaching Hub Logo">
                <p class="issued-date"><strong>Issued on {{ $student->created_at }}</strong></p>
            </center>
        </div>
    </div>
</body>

</html>
