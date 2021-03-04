<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Castoro:ital@0;1&display=swap" rel="stylesheet" />

    <style>
        * {
            margin: 0;
        }

        body {
            font-family: 'Castoro';
        }

        .bg-theme {
            background: linear-gradient(90deg, #900a22 0%, #ca302d 100%);
        }

        .text-theme {
            color: #ca302d;
        }

        .wrapper {
            width: 100%;
            height: 100vh;
        }

        .content {
            width: 80%;
            height: 80%;
            background: #f2f2f2;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .row {
            width: 100%;
            height: 98%;
            display: flex;
        }

        .col-image {
            width: 50%;
            height: 100%;
        }

        .img-fluid {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .col-desc {
            width: 50%;
            height: 100%;
            box-sizing: border-box;
            padding: 20px;
            overflow-y: auto;
        }

        .col-desc .col-title {
            font-style: italic;
            margin-bottom: 2rem;
            font-family: 'Castoro' !important;
            font-size: 24px;
        }

        .text-center {
            text-align: center;
        }

        .info-item {
            margin-bottom: 1rem;
        }

        .info-item h4 {
            font-family: 'Castoro' !important;
            font-size: 14px;
            font-weight: bold;
            color: #900a22;
        }

        .info-item p, .info-item ul {
            font-family: 'Castoro' !important;
            font-size: 14px;
            font-weight: bold;
            margin-left: 10px;
        }

        .info-item .desc {
            font-family: 'Castoro' !important;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 1px;
            text-align: justify;
        }

        @media (max-width: 976px) {
            .content {
                width: 90%;
                height: 90%;
            }

            .row {
                flex-direction: column;
            }

            .img-fluid {
                object-fit: cover;
            }

            .col-image {
                width: 100%;
                height: 50%;
            }

            .col-desc {
                width: 100%;
                height: 50%;
            }
        }
    </style>
</head>
<body>
<div class="wrapper bg-theme">
    <div class="content">
        <div class="row">
            <div class="col-image">
                <img src="{{asset('assets/img/appointment_mail.jpg')}}" class="img-fluid" alt="Appointment Image"/>
            </div>
            <div class="col-desc">
                <h2 class="text-center text-theme col-title">Appointment Application</h2>

                <div class="info-item">
                    <h4>Name of user:</h4>
                    <p>{{$body->first_name}} {{$body->last_name}}</p>
                </div>

                <div class="info-item">
                    <h4>Email Address:</h4>
                    <p>{{$body->email}}</p>
                </div>

                <div class="info-item">
                    <h4>Contact Number:</h4>
                    <p>{{$body->contact_number}}</p>
                </div>

                <div class="info-item">
                    <h4>Address:</h4>
                    <p>{{$body->address}}</p>
                </div>

                <div class="info-item">
                    <h4>Loan Type:</h4>
                    <ul>
                        <li>Home Loan</li>
                        <li>Business Loan</li>
                    </ul>
                </div>

                <div class="info-item">
                    <h4>Income Source:</h4>
                    <p>{{$body->income_source}}</p>
                </div>

                @if($body->message)
                    <div class="info-item">
                        <h4>Message:</h4>
                        <p class="desc">{{$body->message}}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
</body>
</html>
