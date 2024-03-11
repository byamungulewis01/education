<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        .certificate {
            position: relative;
            width: 100%;
            /* Adjust the width as needed */
            height: auto;
            /* Adjust the height as needed */
        }

        .border-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .content {
            position: relative;
            z-index: 1;
            text-align: center;
            top: 10%;
            padding: 10px;
        }

        .logo {
            width: 340px;
            height: auto;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 37px;
            margin-bottom: 20px;
            font-style: bold;
            color: #05234d
                /* Change 'Helvetica' to the desired font family */
        }


        p {
            font-size: 16px;
            /* line-height: 1.5; */
            margin-bottom: -5px;
        }

        .name {
            font-weight: 900;
            font-family: 'Argerian', sans-serif;
            font-size: 28px;
            color: #00409a;


        }

        .signature-container {
            margin-top: 50px;
        }

        .signature {
            display: inline-block;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }

        .position {
            display: block;
            font-style: italic;
            margin-top: 5px;
        }

        .seal {
            width: 100px;
            height: auto;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="certificate">
        <img class="border-image" src="{{ public_path('assets/certificate/cert.png') }}" alt="Certificate Border">
        <div class="content">
            <img src="{{ public_path('assets/certificate/boost.png') }}" alt="Institution logo" class="logo">
            <h1 style="font-family: Colonna MT;">PUBLICATION CERTIFICATE</h1>
            <img src="{{ public_path('assets/certificate/line.png') }}" alt="Line">

            <p
                style="font-size: 18px; font-family :Georgia, 'Times New Roman', Times, serif; font-style :italic; font-weight:800">
                This Certificate is proudly presented to</p>
            <p class="name"><u>{{ $student->fname }} {{ $student->lname }}</u></p>
            <p style="font-size: 18px; font-family :Georgia, 'Times New Roman', Times, serif; font-weight:500">for
                having published a manuscript named</p>
            <p style="font-size: 30px; font-family :Georgia, 'Times New Roman', Times, serif;  font-weight:900">
                {{ $training->training->title }}</p>
            <p>In <strong>BOOST CONSULTANCY & COACHING HUB</strong>, Issue {{ $year }}
            </p>
            <img src="{{ public_path('assets/certificate/line.png') }}" alt="Line">


            <table style="width: 100%">
                <tr>
                    <td style="text-align: center; width: 40%">
                        <p class="signature-container">
                            {{-- <span class="signature">XXXXX</span> --}}
                            <img src="{{ public_path('assets/certificate/ceo.png') }}" width="80" alt="Line">

                            <span class="position">Head of Training and Development</span>

                        </p>
                    </td>
                    <td style="text-align: center; width: 20%">

                        <img src="{{ storage_path('app/' . $qrCodeFilePath) }}" alt="QR Code">
                    </td>
                    <td style="text-align: center; width: 40%">
                        <p class="signature-container">
                            {{-- <span class="signature">XXXX</span> --}}
                            <img src="{{ public_path('assets/certificate/ceo.png') }}" width="80" alt="Line">

                            <span class="position">Founder & CEO</span>
                        </p>
                    </td>
                </tr>
            </table>
            {{-- {{  QrCode::size(100)->generate($student->regnumber) }} --}}
        </div>
    </div>
</body>

</html>
