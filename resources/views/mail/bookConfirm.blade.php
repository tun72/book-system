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

        .heading {
            font-size: 20px;
            font-weight: 600;
            margin-top: 10px;
        }

        .first_para,
        .second_para,
        .third_para {
            font-size: 30px;
            margin-top: 20px;
        }
    </style>

</head>

<body>

    <section class="container">
        <div class="main">
            <div class="logo">
                <img src="./img/book-and-person-summer-svgrepo-com.svg" alt="">
            </div>
            <div class="line"></div>
            <div class="heading">
                <p>Hi {{ $username }},</p>
            </div>
            <div class="first_para">
                <p>Congratulations🎉</p>
            </div>
            <div class="second_para">
                <p>Your book have been confirmed by admin.🎊</p>
            </div>
            <div class="third_para">
                <p>Keep up the good work💪</p>
            </div>


        </div>

    </section>
</body>
</html>