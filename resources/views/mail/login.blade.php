<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .container {
            width: 100%;
            height: 100vh;
            background-color: black;
            color: white;
        }

        .main {
            width: 100%;
            height: 100%;
            padding: 20px;
        }

        .logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
        }

        .line {
            width: 100%;
            height: 1px;
            background-color: rgb(50, 49, 49);
            margin-top: 10px;
        }

        .name {
            width: 50px;
            height: 50px;
            border: 1px solid blue;
            text-align: center;
            margin-top: 20px;
            display: inline-block;

        }


        .heading {
            font-size: 20px;
            margin-top: 10px;
        }

        .first_para,
        .second_para {
            font-size: 18px;
            margin-top: 10px;
        }

        .btn {
            width: fit-content;
            padding: 10px 25px;
            border: 2px solid blue;
            border-radius: 10px;
            margin-top: 10px;
            font-size: 19px;
            letter-spacing: 1.5px;
        }
    </style>
</head>

<body>
    <section class="container">
        <div class="main">
            <div class="logo">
                <img src="./img/logo.jpg" alt="">
            </div>
            <div class="line"></div>
            <div class="heading">
                <p>Hi {{ $username }},</p>
            </div>
            <div class="first_para">
                <p>You ewceived a request to reset your Literlary Loom password.</p>
            </div>
            <div class="second_para">
                <p></p>Enter the following password reset code:
            </div>
            <div class="btn">
                <p>{{ $otp }}</p>
            </div>

        </div>

    </section>
</body>

</html>
