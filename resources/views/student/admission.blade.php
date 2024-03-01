<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOST Coaching Hub</title>
    <link rel="shortcut icon" type="image/png" href="{{ public_path('assets/img/favicon/boost.png') }}" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
        }

        .contact-info {
            margin-top: 20px;
        }

        .contact-info p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('assets/img/favicon/boost.png') }}" alt="BOOST Coaching Hub Logo" class="logo">
            <h2 class="title">Welcome to BOOST Coaching Hub!</h2>
        </div>
        <br><br>
        <div class="content">
            <p>Dear {{ $student->fname }} {{ $student->lname }} ,</p>
            <p>Welcome to BOOST Coaching Hub! We are excited to inform you that your enrollment has been confirmed for
                the course:</p>
            <p><strong>Registration Number:</strong> {{ $student->regnumber }}</p>
            <p><strong>Training:</strong> {{ $training }}</p>
            <p>We appreciate your decision to embark on this learning journey with us. To get started, please log in to
                your dashboard and follow the instructions provided to access your course materials.</p>
            <p>On your dashboard, you will find resources, assignments, and everything you need to make the most out of
                your learning experience. If you have any questions or encounter any issues, our support team is here to
                assist you.</p>
            <div class="contact-info">
                <p>For your convenience, here are important email contacts:</p>
                <p>- Registration Email: <a href="mailto:maniraruta2018@gmail.com">maniraruta2018@gmail.com</a></p>
                <p>- Instructor Email: <a href="mailto:simparinka@gmail.com">simparinka@gmail.com</a></p>
                <p>- Organization Email: <a href="mailto:info@boasthub.com">info@boasthub.com</a></p>
            </div>
            <p>Thank you for choosing us as your online learning partner. We look forward to seeing you succeed in your
                studies.</p>
            <p>Best regards,</p>
            <p>Dr. HATEGEKIMANA Jean Paul</p>
            <p>Managing Director</p>
            <table style="width: 100%">
                <tr>
                    <td>
                        <p><strong>Organization Details:</strong><br>
                            BOOST Coaching Hub<br>
                            Kigali, Rwanda<br>
                            <a href="mailto:info@boasthub.com">info@boasthub.com</a>
                        </p>
                    </td>
                    <td>
                        <img src="{{ public_path('assets/img/qrCode.png') }}" style="width: 120px;" alt="BOOST Coaching Hub Logo">
                    </td>
                </tr>
            </table>

        </div>
    </div>
</body>

</html>
